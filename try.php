<?php
$servername   = "db4free.net:3306";
$database = "buson_bd";
$username = "root_buson";
$password = "rootroot";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";
?>