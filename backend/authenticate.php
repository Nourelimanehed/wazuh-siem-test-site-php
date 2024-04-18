<?php
// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// FTP server details
$ftp_server = "ftp.example.com";  // Replace with your FTP server address

// Connect to FTP server
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to FTP server.");

// Try to log in
if (ftp_login($ftp_conn, $username, $password)) {
    echo "Login successful!";
    header('Location: content.html');
    // Perform further actions such as listing directories or managing files
    // Make sure to close the connection when done
    
} else {
    echo "Login failed. Please check your username and password.";
}
?>

