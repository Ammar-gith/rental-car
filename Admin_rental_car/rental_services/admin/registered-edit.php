<?php
// include("htmlfolder/db_connection.php");
$conn = mysqli_connect("localhost", "root", "", "rentalcar_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
include("includes/header.php");
include("includes/topbar.php");
include("includes/sidebar.php");
?>

<?php
if (isset($_GET['user_id'])) {

    $user_id = $_GET['user_id'];
    // echo $user_id;
    $query = "SELECT * FROM `users` WHERE id = $user_id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);

        $name = $row["f_name"];
        $email = $row["email"];
        $pas = $row["password"];
        $addr = $row["address"];
        $phone = $row["phone_number"];

    } else {
        echo "<h2>No record found</h2>";
    }

}
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/templatepractice/rentalcar/index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Registered users</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- /.content-header -->
    <!-- /.card -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">



                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit registered Users</h3>
                            <a href="registered_user.php" class="btn btn-danger btn-sm float-right">Back</a>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="update_user.php" method="POST">
                                        <div class="formbody">


                                            <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>"
                                                class="form-control" placeholder="Full name" />

                                            <div class="mb-3">
                                                <label for="" class="form-label">Full name </label>
                                                <input type="text" name="f_name" value="<?php echo $name; ?>"
                                                    class="form-control" placeholder="Full name">
                                            </div>



                                            <div class="mb-3">
                                                <label for="" class="form-label">Email</label>
                                                <input type="email" name="email" value="<?php echo $email; ?>"
                                                    class="form-control" placeholder="Email">
                                            </div>



                                            <div class="mb-3">
                                                <label for="" class="form-label">Password</label>
                                                <input type="password" name="password" value="<?php echo $pas; ?>"
                                                    class="form-control" id="pass1" placeholder="Password">
                                            </div>


                                            <div class="mb-3">
                                                <label for="" class="form-label">Address</label>
                                                <input type="text" name="address" value="<?php echo $addr; ?>"
                                                    class="form-control" placeholder="Address" />
                                            </div>



                                            <div class="mb-3">
                                                <label for="" class="form-label">Cell number</label>
                                                <input type="number" name="phone_number" value="<?php echo $phone; ?>"
                                                    class="form-control" placeholder="Phone number" />
                                            </div>


                                            <div class="mb-3">
                                                <button type="submit" name="update_user" class="btn btn-info"
                                                    id="reg_btn">
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa-light fa-pen-to-square"></i>

                                </div>


                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>


</div>

<?php
include("includes/footer.php");
?>