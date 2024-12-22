<?php

include 'conn.php'; // Your database connection file

require 'vendor/autoload.php'; // Autoload Composer libraries

use phpseclib3\Crypt\EC;
use kornrunner\Keccak;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $phone = htmlspecialchars($_POST['phone']);

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Check if email already exists
    $checkQuery = "SELECT * FROM users WHERE email = ?";
    $stmt = $con->prepare($checkQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email is already registered. Please use another email.";
    } else {
        // Generate a new Ethereum wallet address
        do {
            $ec = EC::createKey('secp256k1'); // Generate key pair
            $privateKey = $ec->toString('PKCS8'); // Private Key in PEM format
            $publicKey = $ec->getPublicKey()->toString('PKCS8'); // Public Key in PEM format

            // Remove the "-----BEGIN PUBLIC KEY-----" and "-----END PUBLIC KEY-----" headers and footers
            $publicKeyString = trim($publicKey);
            $publicKeyString = substr($publicKeyString, 27, -25); // Remove headers and footers

            // Ensure public key string is in hexadecimal format
            // Remove non-hexadecimal characters (in case of any extra formatting)
            $publicKeyString = preg_replace('/[^a-fA-F0-9]/', '', $publicKeyString);

            // Generate the Ethereum wallet address
            // Now it should be in a valid hexadecimal format
            $hashedPublicKey = Keccak::hash(hex2bin($publicKeyString), 256);
            $walletAddress = '0x' . substr($hashedPublicKey, -40); // Take the last 40 characters

            // Check if the wallet address already exists in the database
            $checkAddressQuery = "SELECT * FROM users WHERE wallet_address = ?";
            $stmt = $con->prepare($checkAddressQuery);
            $stmt->bind_param("s", $walletAddress);
            $stmt->execute();
            $result = $stmt->get_result();
        } while ($result->num_rows > 0); // Repeat the process if the address exists

        // Insert into database, including the private key
        $insertQuery = "INSERT INTO users (username, email, password, phone, wallet_address, private_key) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $con->prepare($insertQuery);
        $stmt->bind_param("ssssss", $username, $email, $hashedPassword, $phone, $walletAddress, $privateKey);

        if ($stmt->execute()) {
            echo "Registration successful. You can now login.";
            echo "<br>Wallet Address: " . $walletAddress; // For testing (Remove in production)
            header("Location: index.php");
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}
?>
