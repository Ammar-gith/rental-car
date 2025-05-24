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


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div> -->
    <!-- </div> -->


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Rental Car Dashboard</h1>
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
    <!-- /.card -->
    <?php
    // echo "<h3>Data is successfully deleted</h3>";
    
    $alert = true;

    ?>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">



                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Registered Users Lists</h3>
                            <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#Addmodal"
                            class="btn btn-primary btn-sm float-right">Add user</a> -->


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Address</th>
                                        <th>Phone Number</th>
                                        <th>Action</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM users";
                                    $result = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($result) > 0) {

                                        while ($row = mysqli_fetch_assoc($result)) {

                                            ?>
                                    <tr>
                                        <td>
                                            <?php echo
                                                        $row['id']; ?>
                                        </td>
                                        <td>
                                            <?php

                                                    $query1 = "SELECT * FROM rental_cars
                                    where users_id='" . $row['id'] . "'";
                                                    $result1 = mysqli_query($conn, $query1);
                                                    $img = mysqli_fetch_array($result1);
                                                    // $image=$img['users_image'];
                                            

                                                    ?>
                                            <img style="border-radius: 50px;"
                                                src="../../../assets/images/<?php echo $img["users_image"] ?>" alt=""
                                                width="50px" height="50px">
                                        </td>

                                        <td>
                                            <?php echo $row['f_name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['email']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['password']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['address']; ?>
                                        </td>
                                        <td>

                                            <?php echo $row['phone_number']; ?>
                                        </td>
                                        <td>
                                            <a style="text-decoration:none;"
                                                href="registered-edit.php?user_id=  <?php echo $row['id']; ?>"
                                                type="button" class="btn btn-sm
                                            btn-success" name="submit"><i
                                                    class="fa-light fa-pen-to-square"></i>Edit</a>|<a
                                                href="delete_user.php?user_id= <?php echo $row['id']; ?>" type=" button"
                                                class="btn btn-sm btn-danger" name="submit"><i
                                                    class="fa-solid fa-trash-can"></i>Delete</a>
                                        </td>
                                        <td>
                                            <button type="button" name="submit"
                                                class="btn btn-info btn-sm">Enable</button>|
                                            <button type="button" name="submit"
                                                class="btn btn-secondary btn-sm">Disable</button>

                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    } else {
                                        ?>
                                    <tr>
                                        <td>No record found</td>
                                    </tr>
                                    <?php

                                    }




                                    ?>


                                </tbody>
                            </table>

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