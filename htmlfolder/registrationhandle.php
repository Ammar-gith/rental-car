<?php


$conn = mysqli_connect("localhost", "root", "", "rentalcar_db");


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST["register"])) {
    $user_id = $_POST["id"];
    $first_name = $_POST["f_name"];
    $phone = $_POST["phone_number"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $addr = $_POST["address"];

    $conpass = $_POST["conpassword"];

    $query = "SELECT id f_name, phone_number, email, password, address FROM users WHERE email='$email' && password='$pass'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);
    if ($row > 0) {
        // echo '<script>alert("Data Already Exist")</script>';
        $success = "Data Already Exist";
        header("location: /templatepractice/rentalcar/index.php");

    } else {
        $qry = "INSERT INTO users (id, f_name,phone_number,email,password,address) VALUES ('$user_id','$first_name','$phone','$email','$pass','$addr')";
        $res = mysqli_query($conn, $qry);
        echo "Data inserted successfully";
        header("location: /templatepractice/rentalcar/index.php");

    }
}
?>