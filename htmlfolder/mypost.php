<?php
session_start();
if (isset($_SESSION['user_email'])) {
    // echo "Welcom " . $_SESSION['user_email'];
} else {
    // echo "error_message";
    header("location:/rentalcar/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My posts</title>
    <link rel="stylesheet" href="../css/vehical.css" />
    <link rel="stylesheet" href="../css/nav.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>

    <div class="main_container">

        <!---------------------------------------------------------navbar section start here----------------------------->
        <section class="navbar_section">
            <div class="nav_div">
                <div class="logo_img"></div>

                <nav>
                    <ul>
                        <li>
                            <a href="../rentalcar/index.php"> Home </a>
                        </li>

                        <li>
                            <a href="../htmlfolder/vehical.php"> Rental</a>
                        </li>

                        <li>
                            <a href="mypost.php"> My Post</a>
                        </li>

                        <li>
                            <a href="../index.php#about_us"> About Us</a>
                        </li>
                        <!-- <li>
                <a href="../loginpage/index.html"> Testimonials</a>
              </li> -->
                        <li>
                            <a href="../htmlfolder/contact.php"> Contact</a>
                        </li>
                        <li>
                            <a href="../htmlfolder/login.php"> login</a>
                        </li>

                        <li>
                            <a href="../htmlfolder/logout.php"> logout</a>
                        </li>
                        <!-- <li>
                <a href="../signup page/index.html"> Sign Up</a>
              </li> -->
                        <li class="nav_btn">
                            <a href="../htmlfolder/rental_form.php">
                                <i class="fa-solid fa-plus"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <!---------------------------------------------------------navbar section start here----------------------------->


        <!---------------------------------------------------contanier section start here----------------------------->

        <?php
        // Create connection
        $conn = mysqli_connect("localhost", "root", "", "rentalcar_db");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // $query = "SELECT * FROM rental_cars Where type="";
        // echo "I am working";
        $userposts = $_SESSION['user_email'];
        // $uesrid = $_SESSION['user_id'];
        $getid = $_SESSION['user_id'];
        // echo $getid;
        // echo $userposts;

        // echo "Connected successfully";
        if (isset($_GET['type'])) {
            $type = $_GET['type'];
        } else {
            // $query = "SELECT *,rental_cars.id as p_id FROM rental_cars INNER JOIN users on users.id=rental_cars.users_id";

            $mypost = "SELECT * FROM `rental_cars` WHERE `users_id`='" . $getid . "'";
            $result = mysqli_query($conn, $mypost);






            // $query = "SELECT *,rental_cars.id as p_id FROM rental_cars INNER JOIN users on users.id=rental_cars.users_id";


        }


        // $num = mysqli_num_rows($result);

        ?>

        <section class="cards_section">
            <h4 style=" margin-left:30px; margin-top:20px">My Own Cars</h4>
            <!-- <p>44 Vehicals available</p> -->


            <div class="container">
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    # code...
                    // $first_name = $row["f_name"];
                    // $phone = $row["phone_number"];
                    // $email = $row["email"];
                    // $addr = $row["address"];

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
                    $per_day_mon = $row["per_day_mon"];
                    $add_location = $row['location'];
                    $add_city = $row['city'];
                    $add_neighbourhood = $row['Neighbourhood'];




                ?>
                    <div class="card">
                        <img src="../assets/images/<?php echo $row["image"] ?>" alt="" />
                        <div class=" card_head">
                            <h3>
                                <?php echo $compnay ?>
                            </h3>

                            <?php echo "<h5> $model </h5>" ?>

                        </div>
                        <div class="card_feature">
                            <span>
                                <p>
                                    <?php echo $transmition ?>
                                    transmition
                                </p>
                            </span>
                            <span>
                                <p>
                                    <?php echo $document ?>
                                    document
                                </p>
                            </span>
                            <span>
                                <p>
                                    <?php echo $car_assembly ?>
                                    assembly
                                </p>
                            </span>
                            <span id="">
                                <P>
                                    <?php echo $condition ?>
                                    condition
                                </P>
                            </span>
                            <span id="">
                                <P style="font-weight: 700;">
                                    PKR
                                    <?php echo $car_price ?>
                                    <?php echo $per_day_mon ?>
                                </P>
                            </span>
                            <span id="">
                                <input
                                    style="color:red; background: white; width:130px; font-weight:400; font-size: 16px;  margin-top:0px; border:none;"
                                    id="card_btn" type="button" value="More Details" name="btn_name" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal<?php echo $id; ?>">
                                <i style=" color:red; margin-left:-16px; margin-top:10px"
                                    class="fa-solid fa-circle-info"></i>

                            </span>

                        </div>

                    </div>
                    <!----------------------------------------modals applying ----------------------------->



                    <!-- Modal -->
                    <div class="modal fade scrollable" id="exampleModal<?php echo $id; ?>" tabindex=" -1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">MORE DETAILS</h4>
                                    <button style="background-color:red;border-radius:0px;color:white;" type="button"
                                        class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="contanier-fluid">
                                        <div class="row m-4 ">
                                            <div style="border:1px solid lightgray; padding: 10px;" class="col-md-6">
                                                <img src="../assets/images/<?php echo $row["image"] ?>" alt="" width="500px"
                                                    height="300px" />

                                            </div>
                                            <div style="border:1px solid lightgray; padding: 10px;"
                                                class=" col-md-6 text-center">

                                                <span>
                                                    <img src="../assets/images/<?php echo $row["users_image"] ?>" alt=""
                                                        width="100px" height="100px">
                                                </span>

                                                <table width="300" height="150">
                                                    <tbody>
                                                        <tr>
                                                            <th>User ID :</th>
                                                            <td>
                                                                <?php echo $row['id']; ?>
                                                            </td>

                                                        </tr>

                                                        <!-- <tr>
                                                        <th>Name :</th>
                                                        <td>
                                                            <?php echo $row['f_name']; ?>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th>Email :</th>
                                                        <td>
                                                            <?php echo $row['email']; ?>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th><i class="fa-brands fa-whatsapp"></i>Mobile:</th>
                                                        <td>
                                                            <?php echo $row['phone_number']; ?>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th>Address :</th>
                                                        <td>
                                                            <?php echo $row['address']; ?>
                                                        </td>

                                                    </tr> -->
                                                    </tbody>
                                                </table>



                                                <button style="" type="submit" class="btn btn-success">Book
                                                    Now</button>
                                            </div>


                                        </div>
                                        <div style="border:1px solid lightgray; padding: 10px; " class="row m-4">
                                            <div class="col-md-4">
                                                <table>
                                                    <thead>


                                                        <tr>
                                                            <th>
                                                                <h3>CAR DETAILS</h3>
                                                            </th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
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
                                                            <th>Car Rent :</th>
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
                                                            <th>Documents :
                                                            </th>
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
                                                            <th> Description :
                                                            </th>
                                                            <td>
                                                                <?php echo $car_description ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th> Car year :</th>
                                                            <td>
                                                                <?php echo $year ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th> KM' s Driven :</th>
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
                                                            <th> Add location :</th>
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
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!----------------------------------------->
                                            <div class="col-md-8">
                                                <h2 class="text-center">More similar adds</h2>

                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <!-- <div class=" modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                <button
                                    style="padding: 7px 15px;  background: linear-gradient(to left, red 0%, rgb(194, 58, 24) 100%); color: white; border: 1px solid red; font-weight: 700;"
                                    type="button" name="Book_btn">Book Now</button>
                            </div> -->

                            </div>

                        </div>


                    </div>




                <?php } ?>
            </div>

        </section>


        <!---------------------------------------------------contaniner section start here----------------------------->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/6bb3f85045.js" crossorigin="anonymous"></script>
</body>

</html>