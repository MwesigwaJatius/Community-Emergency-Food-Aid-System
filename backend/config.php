<?php

// Database configuration
$host = 'localhost'; // Database host
$username = 'db_user'; // Database username
$password = 'db_password'; // Database password
$database = 'db_name'; // Database name

// Create database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Application settings
define('APP_NAME', 'Community Emergency Food Aid System');
define('APP_VERSION', '1.0.0');

?>