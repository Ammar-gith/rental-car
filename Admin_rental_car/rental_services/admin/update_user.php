<?php

$conn = mysqli_connect("localhost", "root", "", "rentalcar_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['update_user'])) {
    $user_id = $_POST["user_id"];
    $name = $_POST["f_name"];
    $email = $_POST["email"];
    $pas = $_POST["password"];
    $addr = $_POST["address"];
    $phone = $_POST["phone_number"];

    $query = "UPDATE users SET f_name='$name', email='$email', password=' $pas', address='$addr', phone_number='$phone'WHERE id ='$user_id'  ";
    $res = mysqli_query($conn, $query);
    if ($res) {
        header("location: registered_user.php");
        echo "data updated";
    } else {
        echo "data failed to update";
    }
}
?>