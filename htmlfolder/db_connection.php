<?php
$conn = mysqli_connect("localhost", "root", "", "rentalcar_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>