<?php
session_start();  // Start the session
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TokenTrip</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="hotel.css">
</head>

<body>
    <!-- Header Section -->
    <header>
        <div class="top-bar">
        <img src="logo.jpg" style="height:50px; width:50px; border-radius:50%;" class="logo">   `1                                                              
            <div class="logo">TokenTrip</div>
            <div class="account">
                <?php if (isset($_SESSION['username'])): ?>
                    <div>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></div>
                    <a href="logout.php"><button>Logout</button></a>
                <?php else: ?>
                    <button class="login-btn" id="openModal">Login or Create Account</button>
                <?php endif; ?>
            </div>
        </div>
        <!-- Navigation -->
        <nav>
            <ul>
                <li><a href="fpage.php"><i class="fas fa-plane"></i> Flights</a></li>
                <li><a href="hotel.html" class="active"><i class="fas fa-hotel"></i> Hotels</a></li>
                <li><a href="#"><i class="fas fa-home"></i> Homestays & Villas</a></li>
                <li><a href="#"><i class="fas fa-umbrella-beach"></i> Holiday Packages</a></li>
                <li><a href="#"><i class="fas fa-train"></i> Trains</a></li>
                <li><a href="#"><i class="fas fa-bus"></i> Buses</a></li>
                <li><a href="#"><i class="fas fa-taxi"></i> Cabs</a></li>
            </ul>
        </nav>
    </header>

    <!-- Search Section -->
    <section class="search-section">
        <h2>City, Property Name Or Location</h2>
        <div class="search-filters">
            <input type="text" placeholder="Goa, India" class="search-input">
            <div class="date-inputs">
                <div>
                    <label>Check-In</label>
                    <input type="date" id="checkin-date" value="2024-12-19">
                </div>
                <div>
                    <label>Check-Out</label>
                    <input type="date" id="checkout-date" value="2024-12-20">
                </div>
            </div>
            <div>
                <label>Rooms & Guests</label>
                <select>
                    <option>1 Room 2 Adults</option>
                    <option>2 Rooms 4 Adults</option>
                </select>
            </div>
            <button class="search-btn">SEARCH</button>
        </div>
    </section>

    <!-- Hotel Listings Section -->
    <section class="hotel-listings">
        <h2>For your stay in Mumbai</h2>
        <div class="hotel-cards">
            <div class="hotel-card">
                <img src="https://via.placeholder.com/300x200" alt="Hotel 1">
                <h3>Hotel Taj Mahal Palace</h3>
                <p>₹12,000 per night</p>
            </div>
            <div class="hotel-card">
                <img src="https://via.placeholder.com/300x200" alt="Hotel 2">
                <h3>Trident Hotel</h3>
                <p>₹10,500 per night</p>
            </div>
            <div class="hotel-card">
                <img src="https://via.placeholder.com/300x200" alt="Hotel 3">
                <h3>Holiday Inn</h3>
                <p>₹8,900 per night</p>
            </div>
            <div class="hotel-card">
                <img src="https://via.placeholder.com/300x200" alt="Hotel 4">
                <h3>Sofitel BKC</h3>
                <p>₹15,000 per night</p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 TokenTrip. All rights reserved.</p>
    </footer>

    <!-- Script for Session Management -->
    <script>
        // Your session handling script goes here if needed (e.g., checking login status)
    </script>
</body>

</html>
