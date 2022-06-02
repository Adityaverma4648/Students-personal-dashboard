<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, 'student-dashboard');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  // echo "connection done";
?>