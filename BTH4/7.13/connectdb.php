<?php 
  $servername = "localhost";
  $username = "admin";
  $password = "hahieu1212";
  $dbname = "DB_local";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>