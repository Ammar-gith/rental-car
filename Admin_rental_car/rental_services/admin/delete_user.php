<?php
$alert = false;
$conn = mysqli_connect("localhost", "root", "", "rentalcar_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userid = $_GET['user_id'];
// $userid = user_id;

$query = "DELETE FROM users WHERE id = '$userid' ";
$result = mysqli_query($conn, $query);

if ($result) {
    // echo "<h3>Data is successfully deleted</h3>";
    $alert = true;
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Data deleted successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
    // echo "<script>alert('Data deleted successfully');</script>";
    header("location: registered_user.php");
} else {
    echo "<h3>Data deletion failed</h3>";
    header("location: registered_user.php");

}









?>