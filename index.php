<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TokenTrip</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="style.css">

    <style>
        .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fff;
    margin: 15% auto;
    padding: 20px;
    border-radius: 4px;
    width: 30%;
}

.close-btn {
    color: #aaa;
    font-size: 28px;
    font-weight: bold;
    position: absolute;
    right: 15px;
    top: 15px;
}

.close-btn:hover,
.close-btn:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
    </style>
</head>

<body>
    <!-- Header Section -->
    <header style="background:#333;">
        <div class="top-bar">
            <img src="logo.jpg" style="height:50px; width:50px; border-radius:50%;" class="logo">
            <div class="logo">TokenTrip</div>
            <div class="account">
                
                    <button class="login-btn" id="openLoginModal">Login</button>
                    <button class="signup-btn" id="openSignupModal">Register</button>
            
            </div>
        </div>
        <!-- Navigation -->
        <nav>
            <ul>
            <li><a href="home.php" class=""><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#" class="active"><i class="fas fa-plane"></i> Flights</a></li>
                <li><a href="indexhotel.html"><i class="fas fa-hotel"></i> Hotels</a></li>
                <li><a href="#"><i class="fas fa-home"></i> Homestays & Villas</a></li>
                <li><a href="#"><i class="fas fa-umbrella-beach"></i> Holiday Packages</a></li>
                <li><a href="#"><i class="fas fa-train"></i> Trains</a></li>
                <li><a href="#"><i class="fas fa-bus"></i> Buses</a></li>
                <li><a href="#"><i class="fas fa-taxi"></i> Cabs</a></li>
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
        </section>
        <div class="search-container">
            <div class="filter-panel">
                <h3>Applied Filters</h3>
                <label><input type="checkbox" checked> Non Stop</label>
                <label><input type="checkbox"> Refundable Fares</label>
                <label><input type="checkbox"> IndiGo</label>
                <label><input type="checkbox"> Morning Departures</label>
                <h4>One Way Price</h4>
                <input type="range" min="9000" max="28000" value="11673" id="priceRange">
                <span id="priceValue">₹11,673</span>
            </div>

            <!-- Flights Result Section -->
            <div class="results-panel">
                <h2>Flights from New Delhi to Mumbai</h2>
                <div class="flight-card">
                    <img src="https://via.placeholder.com/50" alt="Airline Logo">
                    <div class="flight-info">
                        <h3>IndiGo 6E 519</h3>
                        <p>23:55 - 02:15 | Non Stop</p>
                    </div>
                    <div class="price">
                        <h3>₹11,673</h3>
                        <button>View Prices</button>
                    </div>
                </div>

                <!-- Repeated Flight Card (Add More Similar Flights) -->
                <div class="flight-card">
                    <img src="https://via.placeholder.com/50" alt="Airline Logo">
                    <div class="flight-info">
                        <h3>Air India AI 101</h3>
                        <p>22:00 - 00:30 | Non Stop</p>
                    </div>
                    <div class="price">
                        <h3>₹10,500</h3>
                        <button>View Prices</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeLoginModal">&times;</span>
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <label for="email">Email</label>
                <input type="email" name="email" id="loginEmail" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="loginPassword" required>

                <button type="submit" name="login">Login</button>
                <p>Don't have an account?
                    <a href="javascript:void(0);" id="openSignupModalFromLogin">Sign Up</a>
                </p>
            </form>
        </div>
    </div>



    <!-- Sign Up Modal -->
    <div id="signupModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeSignupModal">&times;</span>
            <h2>Sign Up</h2>
            <form action="register.php" method="POST">
                <label for="username">Username</label>
                <input type="text" name="username" id="signupUsername" placeholder="Enter Username" required>

                <label for="email">Email</label>
                <input type="email" name="email" id="signupEmail" placeholder="Enter Email" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="signupPassword" placeholder="Enter Password" required>

                <label for="phone">Phone</label>
                <input type="text" name="phone" id="signupPhone" placeholder="Enter Phone Number">

                <button type="submit" name="signup">Register</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
    <script>
        // Get the modal elements
const loginModal = document.getElementById("loginModal");
const signupModal = document.getElementById("signupModal");

// Get the buttons to open the modals
const openLoginModalBtn = document.getElementById("openLoginModal");
const openSignupModalBtn = document.getElementById("openSignupModal");

// Get the close buttons
const closeLoginModalBtn = document.getElementById("closeLoginModal");
const closeSignupModalBtn = document.getElementById("closeSignupModal");

// Show login modal
openLoginModalBtn.onclick = () => {
    loginModal.style.display = "block";
};

// Show signup modal
openSignupModalBtn.onclick = () => {
    signupModal.style.display = "block";
};

// Close the login modal
closeLoginModalBtn.onclick = () => {
    loginModal.style.display = "none";
};

// Close the signup modal
closeSignupModalBtn.onclick = () => {
    signupModal.style.display = "none";
};

// Close modals if clicked outside
window.onclick = (event) => {
    if (event.target === loginModal) {
        loginModal.style.display = "none";
    }
    if (event.target === signupModal) {
        signupModal.style.display = "none";
    }
};

// Switch to Signup form from Login form
document.getElementById("openSignupModalFromLogin").onclick = () => {
    loginModal.style.display = "none";
    signupModal.style.display = "block";
};

    </script>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 TokenTrip | Lowest Exchange Rates Guaranteed</p>
    </footer>
</body>

</html>
