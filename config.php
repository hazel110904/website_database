<?php
// config.php
// Database configuration for XAMPP/InfinityFree

// XAMPP local settings (default)
$db_host = 'localhost';
$db_name = 'login_database';
$db_user = 'root';
$db_pass = '';

// Uncomment and modify these for InfinityFree hosting:
$db_host = 'sql311.infinityfree.com'; // Your InfinityFree MySQL hostname
$db_name = 'if0_41146695_login'; // Your database name
$db_user = 'if0_41146695'; // Your database username
$db_pass = 'yZ0x8eWKg7goOk'; // Your database password

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die(json_encode([
        'success' => false,
        'message' => 'Database connection failed: ' . $conn->connect_error
    ]));
}

// Set charset to utf8
$conn->set_charset("utf8");
?>
