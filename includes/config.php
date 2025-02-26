<?php

// Database Connection
$host = "localhost";
$user = "root";  
$password = "";  
$database = "blog"; 

$conn = new mysqli($host, $user, $password, $database);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define Global Constants
define("SITE_URL", "http://localhost/php-blog");  
define("SITE_NAME", "PHP Blog");

// Set Default Timezone
date_default_timezone_set("Asia/Kolkata"); 

?>
