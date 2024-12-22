<?php

include 'conn.php'; // Your database connection file
session_start();
require 'vendor/autoload.php'; // Autoload Composer libraries

use kornrunner\Keccak;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Check if email exists in the database
    $checkQuery = "SELECT * FROM users WHERE email = ?";
    $stmt = $con->prepare($checkQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $hashedPassword = $user['password'];

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, fetch wallet address and other details
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['wallet_address'] = $user['wallet_address'];

            // Redirect to the dashboard or desired page after successful login
            header("Location: fpage.php");
            exit();
        } else {
            // Redirect with error message for incorrect password
            header("Location: login.php?error=incorrect_password");
            exit();
        }
    } else {
        // Redirect with error message for email not found
        header("Location: login.php?error=email_not_found");
        exit();
    }
}
?>

<!-- HTML for login form -->
<form method="POST" action="login.php">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

<?php
// Display error message if any
if (isset($_GET['error'])) {
    $error = htmlspecialchars($_GET['error']);
    if ($error === 'incorrect_password') {
        echo "<p style='color:red;'>Incorrect password. Please try again.</p>";
    } elseif ($error === 'email_not_found') {
        echo "<p style='color:red;'>Email not found. Please check your email or register.</p>";
    }
}
?>
