<?php

$servername = "localhost";

$username = "voffid";

$password = "5B1[a#%xQs7Qfs";

$dbname = "voffid_buy_now";



// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);



// Check connection

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}

?>