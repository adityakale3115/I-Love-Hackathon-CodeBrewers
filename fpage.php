<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TokenTrip</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Header Section -->
    <header>
        <div class="top-bar">
            <img src="logo.jpg" style="height:50px; width:50px; border-radius:50%;" class="logo">
            <div class="logo">TokenTrip</div>
            <div class="account">
                <?php if (isset($_SESSION['username'])): ?>
                    <div>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></div>
                    <a href="logout.php"><button>Logout</button></a>
                <?php endif; ?>
            </div>
        </div>
        <!-- Navigation -->
        <nav>
            <ul>
                <li><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#" class="active"><i class="fas fa-plane"></i> Flights</a></li>
                <li><a href="hotel.php"><i class="fas fa-hotel"></i> Hotels</a></li>
                <li><a href="#"><i class="fas fa-home"></i> Homestays & Villas</a></li>
                <li><a href="#"><i class="fas fa-umbrella-beach"></i> Holiday Packages</a></li>
                <li><a href="#"><i class="fas fa-train"></i> Trains</a></li>
                <li><a href="#"><i class="fas fa-bus"></i> Buses</a></li>
                <li><a href="#"><i class="fas fa-taxi"></i> Cabs</a></li>
                <li><a href="#track-flight-modal" id="trackFlightBtn"><i class="fas fa-map-marker-alt"></i> Track Your Flight</a></li>
                <li><a href="games.html"><i class="fa-solid fa-gamepad"></i> TokenTrip Games</a></li>
            </ul>
        </nav>
    </header>

    <!-- Search Section -->
    <main>
        <section class="search-container">
            <form class="search-box">
                <div class="form-group">
                    <label>From</label>
                    <input type="text" placeholder="Delhi">
                </div>
                <div class="form-group">
                    <label>To</label>
                    <input type="text" placeholder="Mumbai">
                </div>
                <div class="form-group">
                    <label>Departure</label>
                    <input type="date">
                </div>
                <div class="form-group">
                    <label>Return</label>
                    <input type="date">
                </div>
                <div class="form-group">
                    <label>Travellers & Class</label>
                    <input type="text" placeholder="1 Traveller, Economy">
                </div>
                <div class="fare-group">
                    <label>Select a special fare:</label>
                    <div class="fare-options">
                        <button class="selected">Regular</button>
                        <button>Student</button>
                        <button>Senior Citizen</button>
                        <button>Armed Forces</button>
                        <button>Doctor and Nurses</button>
                    </div>
                </div>
                <button type="submit" class="search-button">SEARCH</button>
            </form>

            <!-- Map Section -->
            <div id="map" style="width: 100%; height: 500px;"></div>

<script>
    // Fetch live flight data from OpenSky API
    async function fetchFlightData() {
        try {
            const apiUrl = 'https://opensky-network.org/api/states/all';
            const response = await fetch(apiUrl);
            if (!response.ok) throw new Error('Failed to fetch flight data');
            const data = await response.json();
            return data.states;
        } catch (error) {
            console.error("Error fetching flight data:", error);
            return []; // Return an empty array on error
        }
    }

    // Array of random image URLs (replace with your own URLs)
    const imageUrls = [
        "https://example.com/image1.png",  // Replace with actual image URLs
        "https://example.com/image2.png",
        "https://example.com/image3.png",
        "https://example.com/image4.png"
    ];

    // Function to select a random image from the array
    function getRandomImage() {
        const randomIndex = Math.floor(Math.random() * imageUrls.length);
        return imageUrls[randomIndex];
    }

    // Add flight markers to the map
    function addFlightMarkers(map, flights) {
        const bounds = new google.maps.LatLngBounds(); // To adjust the map view to show all markers

        flights.forEach(flight => {
            if (flight[5] && flight[6]) { // Check if latitude and longitude are available
                const position = { lat: flight[6], lng: flight[5] };

                // Log to check coordinates are valid
                console.log(`Flight coordinates: lat=${flight[6]}, lng=${flight[5]}`);

                // Get a random image for this marker
                const imageUrl = getRandomImage();

                // Create the marker
                new google.maps.Marker({
                    position,
                    map,
                    icon: {
                        url: imageUrl,   // Use the random image URL
                        scaledSize: new google.maps.Size(32, 32), // Adjust size of the icon
                        anchor: new google.maps.Point(16, 16), // Center the icon properly
                    },
                    title: `Flight: ${flight[1]}` // Display flight callsign or flight number
                });

                // Extend the bounds to include this marker's position
                bounds.extend(position);
            } else {
                console.warn("Invalid coordinates for flight:", flight);
            }
        });

        // Adjust map to show all markers within the bounds
        map.fitBounds(bounds);
    }

    // Update the map with real-time flight data
    async function updateFlights(map) {
        const flights = await fetchFlightData();
        addFlightMarkers(map, flights);
    }

    // Initialize the map
    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 20.5937, lng: 78.9629 },
            zoom: 2,
        });

        updateFlights(map);
        setInterval(() => updateFlights(map), 30000); // Update every 30 seconds
    }
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLp7OQDhuAwESLoFGO4qzJGy12MDajYRE&callback=initMap"></script>

            <div id="loginModal" class="modal">
                <div class="modal-content">
                    <span class="close-btn" id="closeModal">&times;</span>

                    <!-- Login Form -->
                    <div id="loginForm" class="tabcontent active-tab">
                        <h2>Login</h2>
                        <form action="login.php" method="POST">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required>

                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" required>

                            <button type="submit" name="login">Login</button>
                            <p>Don't have an account?
                                <a href="javascript:void(0);" onclick="switchToForm('signupForm')">Sign Up</a>
                            </p>
                        </form>
                    </div>

                    <!-- Signup Form -->
                    <div id="signupForm" class="tabcontent" style="display: none;">
                        <h2>Sign Up</h2>
                        <form action="register.php" method="POST">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" placeholder="Enter Username" required>

                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter Email" required>

                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Enter Password" required>

                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" placeholder="Enter Phone Number">

                            <button type="submit" name="signup">Register</button>
                        </form>
                    </div>
                </div>
            </div>

            <script>
                // Open and close "Track Your Flight" modal
                document.getElementById('trackFlightBtn').addEventListener('click', function () {
                    document.getElementById('track-flight-modal').style.display = 'block';
                });

                document.getElementById('closeTrackFlight').addEventListener('click', function () {
                    document.getElementById('track-flight-modal').style.display = 'none';
                });

                // Handle flight tracking form submission
                document.getElementById('flightTrackingForm').addEventListener('submit', function (e) {
                    e.preventDefault();

                    // Example: Display dummy tracking result
                    const resultSection = document.getElementById('trackingResult');
                    resultSection.style.display = 'block';
                });
            </script>
            <script src="script.js"></script>
        </section>

        <!-- Flight Tracking Modal -->
        <div id="track-flight-modal" class="modal">
            <div class="modal-content">
                <span class="close-btn" id="closeTrackFlight">&times;</span>
                <h3>Track Your Flight</h3>
                <form id="flightTrackingForm">
                    <label for="flightNumber">Flight Number:</label>
                    <input type="text" id="flightNumber" name="flightNumber" required>

                    <label for="departureDate">Departure Date:</label>
                    <input type="date" id="departureDate" name="departureDate" required>

                    <button type="submit">Track Flight</button>
                </form>

                <!-- Flight tracking result -->
                <div id="trackingResult" style="display: none;">
                    <h4>Flight Status: <span id="flightStatus">On Time</span></h4>
                    <p>Current Location: <span id="flightLocation">Location data not available</span></p>
                </div>
            </div>
        </div>

    </main>

</body>

</html>
