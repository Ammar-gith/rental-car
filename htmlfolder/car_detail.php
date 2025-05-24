<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rental Car and Property</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/style.css" />

    <!-- <link rel="stylesheet" href="../css/nav.css" /> -->
    <link rel="stylesheet" href="../css/car_detail.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
    <div class="main_container">
        <div class="container-fluid">

            <!---------------------------------------------------------navbar section start here----------------------------->
            <div class="row">
                <div class="col-md-12">
                    <section class="navbar">
                        <div class="nav_div">
                            <div class="logo_img"></div>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="../rentalcar/index.php"> Home </a>
                                    </li>

                                    <li>
                                        <a href="vehical.php"> Rental</a>
                                    </li>

                                    <li>
                                        <a href="../htmlfolder/mypost.php"> My Post</a>
                                    </li>

                                    <li>
                                        <a href="../index.php#about_us"> About Us</a>
                                    </li>

                                    <li>
                                        <a href="../htmlfolder/contact.php"> Contact</a>
                                    </li>
                                    <li>
                                        <a href="../htmlfolder/login.php"> login</a>
                                    </li>

                                    <li class="nav_btn">
                                        <a href="../htmlfolder/rental_form.php">
                                            <i class="fa-solid fa-plus"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </section>
                </div>
            </div>
            <!---------------------------------------------------------navbar section end here----------------------------->


            <div class="row mt-4">
                <div class="col-md-8">
                    <!---------------------------------------------------card section start here----------------------------->

                    <?php


                    // Create connection
                    $conn = mysqli_connect("localhost", "root", "", "rentalcar_db");
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }


                    // echo "Connected successfully";
                    if (isset($_GET['type'])) {
                        $type = $_GET['type'];
                        // $query = "SELECT * FROM rental_cars Where type="";
                        echo "I am working";
                    } else {
                        $query = "SELECT * FROM rental_cars";
                    }


                    $result = mysqli_query($conn, $query);
                    // $num = mysqli_num_rows($result);

                    ?>

                    <section class="imagesection">



                        <div class="container">
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                # code...
                                $id = $row['id'];
                                $compnay = $row['car_name'];
                                $model = $row['car_type'];
                                $transmition = $row['car_transmition'];
                                $document = $row['car_document'];
                                $car_assembly = $row['assembly'];
                                $condition = $row['car_condition'];
                                $car_title = $row['title'];
                                $car_description = $row['description'];
                                $year = $row['car_year'];
                                $driven = $row['car_driven'];
                                $registration = $row['car_registration_city'];
                                $car_price = $row['price'];
                                $add_location = $row['location'];
                                $add_city = $row['city'];
                                $add_neighbourhood = $row['Neighbourhood'];




                            ?>
                                <!----------------------------slider start-------------------------------->

                                <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="../assets/images/<?php echo $row["image"] ?>" alt="" />

                                    </div>
                                    <div class="carousel-item">
                                        <img src="../assets/images/<?php echo $row["image"] ?>" alt="" />

                                    </div>
                                    <div class="carousel-item">
                                        <img src="../assets/images/<?php echo $row["image"] ?>" alt="" />

                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div> -->

                                <!------------------------slider end------------------------------------>

                                <div class="card">


                                </div>

                            <?php } ?>
                        </div>

                    </section>

                    <!---------------------------------------------------card section start here----------------------------->

                </div>
                <div class="col-md-4">

                    <span>
                        <img src="../assets/images/<?php echo $row["users_image"] ?>" alt="" />
                    </span>

                    <?php
                    $query = "SELECT * FROM users";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {

                    ?>


                            <!-- 
                    <p>User ID :
                        <?php echo $row['id']; ?>
                    </p>
                    <p>Name :
                        <?php echo $row['f_name']; ?>
                    </p>
                    <p>Emai :
                        <?php echo $row['email']; ?>
                    </p>
                    <p>Mobile No. :
                        <?php echo $row['phone_number']; ?>
                    </p>

                    <p>Address :
                        <?php echo $row['address']; ?>
                    </p> -->


                    <?php
                        }
                    }
                    ?>
                </div>

            </div>

            <div style="border:1px solid lightgray; padding: 10px; " class="row m-4">
                <div class="col-md-12">
                    <table>
                        <!-- <tbody>
                            <tr>
                                <th>CAR DETAILS</th>

                            </tr>
                            <tr>
                                <th>Car Name :</th>
                                <td>
                                    <?php echo $compnay ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Model :</th>
                                <td>
                                    <?php echo $model ?>
                                </td>
                            </tr>
                            <tr>
                                <th> Rent Price :</th>
                                <td>
                                    <?php echo $car_price ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Transmition :</th>
                                <td>
                                    <?php echo $transmition ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Documents :</th>
                                <td>
                                    <?php echo $document ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Assembly :</th>
                                <td>
                                    <?php echo $car_assembly ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Condition :</th>
                                <td>
                                    <?php echo $condition ?>
                                </td>
                            </tr>
                            <tr>
                                <th> Title :
                                </th>
                                <td>
                                    <?php echo $car_title ?>
                                </td>
                            </tr>
                            <tr>
                                <th> Description :</th>
                                <td>
                                    <?php echo $car_description ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Car year :


                                </th>
                                <td>
                                    <?php echo $year ?>

                                </td>
                            </tr>
                            <tr>
                                <th> KM's Driven :</th>
                                <td>
                                    <?php echo $driven ?>
                                </td>
                            </tr>
                            <tr>
                                <th> Registration city :</th>
                                <td>
                                    <?php echo $registration ?>
                                </td>
                            </tr>

                            <tr>
                                <th> Add location :


                                </th>
                                <td>

                                    <?php echo $add_location ?>
                                </td>
                            </tr>
                            <tr>
                                <th> City :</th>
                                <td>
                                    <?php echo $add_city ?>
                                </td>
                            </tr>
                            <tr>
                                <th> Neighbouhood :</th>
                                <td>
                                    <?php echo $add_neighbourhood ?>
                                </td>
                            </tr>


                        </tbody> -->
                    </table>
                    <!--------------------------------------------------------->




                </div>
            </div>












        </div>



        <!-------------------------------------footer div start here--------------------------------------------->

        <div class="footer_div">
            <div class="car_rental_div">
                <div class="cr_head">
                    <h2><span>Car</span>Rental</h2>
                </div>
                <div class="cr_para">
                    <p>
                        Use securing confined his shutters. Delightful as he it acceptance
                        an solicitude discretion.
                    </p>
                </div>
                <div class="cr_number">
                    <ul>
                        <li>
                            <a href=""><span><i class="fa-solid fa-phone-volume"></i></span><span>(123) 498-4600
                                </span></a>
                        </li>
                        <li>
                            <a href=""><span><i class="fa-solid fa-envelope"></i></span><span>
                                    example@carrental.com</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="company_div">
                <div class="company_head">
                    <h2>COMPANY</h2>
                </div>
                <div class="comnay_head_link">
                    <a href=""><span>New York</span></a>
                </div>
                <div class="comnay_head_link">
                    <a href=""><span>Career</span></a>
                </div>
                <div class="comnay_head_link">
                    <a href=""><span>Mobile</span></a>
                </div>
                <div class="comnay_head_link">
                    <a href=""><span>Blog</span></a>
                </div>
                <div class="comnay_head_link">
                    <a href=""><span>How we work</span></a>
                </div>
            </div>
            <div class="working_div">
                <div class="work_head">
                    <h2>WORKING HOURS</h2>
                </div>
                <div class="work_time">
                    <h2><span>Mon - Fri:</span> 09:00AM - 09:00PM</h2>
                </div>
                <div class="work_time">
                    <h2><span>Sat:</span> 09:00AM - 07:00PM</h2>
                </div>
                <div class="work_time">
                    <h2><span>Sun:</span> Closed</h2>
                </div>
            </div>
            <div class="subscription_div">
                <div class="subcription_head">
                    <h2>SUBSCRIPTION</h2>
                </div>
                <div class="subsription_para">
                    <p>Subscribe your Email address for latest news & updates.</p>
                </div>
                <div class="input_form">
                    <form action="">
                        <input type="text" placeholder="Enter Email Address" />
                        <button>Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-------------------------------------footer div end  here--------------------------------------------->

    </div>

    <script src="https://kit.fontawesome.com/6bb3f85045.js" crossorigin="anonymous"></script>
</body>

</html>