<?php
// Connect to the FTP server
$ftp_server = 'your_ftp_server';
$ftp_username = 'your_ftp_username';
$ftp_password = 'your_ftp_password';

// Connect to FTP server
$conn_id = ftp_connect($ftp_server);
$login_result = ftp_login($conn_id, $ftp_username, $ftp_password);

// Check connection
if (!$conn_id || !$login_result) {
    echo "FTP connection has failed!";
    exit();
}

// Get the uploaded file and its name
$file = $_FILES['file']['tmp_name'];
$filename = $_FILES['file']['name'];

// Define the remote file path on the FTP server
$remote_file = "/path/on/ftp/server/" . $filename;

// Upload the file to the FTP server
if (ftp_put($conn_id, $remote_file, $file, FTP_BINARY)) {
    echo "File uploaded successfully.";
} else {
    echo "There was a problem uploading the file.";
}

// Close the FTP connection
ftp_close($conn_id);
?>
