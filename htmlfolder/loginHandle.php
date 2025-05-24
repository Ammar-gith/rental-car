<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "rentalcar_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $query = "SELECT email, password FROM users WHERE email='$email' && password='$pass'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);
    if ($row == 1) {

        $_SESSION['user_email'] = $email;
        // echo session_id();
        $sql = "SELECT id from `users` where `email`='" . $email . "'";
        $result = mysqli_query($conn, $sql);
        $getid = mysqli_fetch_array($result);

        $_SESSION['user_id'] = $getid['id'];

        header("location:/templatepractice/rentalcar/htmlfolder/vehical.php");
        // echo "login successfull";


    } else {


        header("location:/templatepractice/rentalcar/index.php");

        echo "Register yourself first";


    }
}
?>