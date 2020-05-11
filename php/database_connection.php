<?php
//Third party server-side debugging - https://github.com/ccampbell/chromephp
include 'ChromePhp.php';

$servername = "localhost";
$username = "root";
$password ="";
$dbname = "games";

// Create connection
$conn = new mysqli($servername, $username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  ChromePhp::log("Connection failed");
}
ChromePhp::log("Connection success");


?>
