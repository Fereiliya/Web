<?php
session_start(); // Start the session

// Sample hardcoded credentials (in real-world applications, credentials should be stored in a database)
$valid_username = "user";
$valid_password = "Pas123";

// Pastikan $_SERVER['REQUEST_METHOD'] didefinisikan sebelum digunakan
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve and trim inputs to remove any leading/trailing spaces
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Check if the username and password match the hardcoded credentials
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;  // Store username in session

        // Perform the redirect with a success message
        echo "<script>
                alert('Login sukses!');
                window.location.href = 'home.php';
              </script>";
        exit;
    } else {
        // Return error with a client-side alert and redirect back to login
        echo "<script>
                alert('Username atau password salah!');
                window.location.href = 'index.php';
              </script>";
        exit;
    }
} else {
    echo "Invalid request method.";
    exit;
}