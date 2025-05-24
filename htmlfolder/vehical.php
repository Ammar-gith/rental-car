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
    <title>Vehicle Models</title>
    <link rel="stylesheet" href="../css/vehical.css" />
    <link rel="stylesheet" href="../css/nav.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
    function load_car_field() {
        var cf = document.getElementById("car_btn");
        if (cf.name == "car") {
            document.getElementById("car_field").style.display = "block";

            document.getElementById("property_field").style.display = "none";
            document.getElementById("car_btn").style.background =
                " linear-gradient(to left, red 0%, rgb(194, 58, 24) 100%)";
            document.getElementById("property_btn").style.background =
                "rgb(240, 237, 237)";
            document.getElementById("car_btn").style.color = "white";
            document.getElementById("property_btn").style.color = "black";
        }
    }

    function load_property_field() {
        pf = document.getElementById("property_btn");
        if (pf.name == "property")
            document.getElementById("car_field").style.display = "none";
        document.getElementById("property_field").style.display = "block";
        document.getElementById("property_btn").style.background =
            " linear-gradient(to left, red 0%, rgb(194, 58, 24) 100%)";
        document.getElementById("car_btn").style.background =
            "rgb(240, 237, 237)";
        document.getElementById("car_btn").style.color = "black";
        document.getElementById("property_btn").style.color = "white";
    }

    function load_booking_form() {
        // document.getElementById("book_me");
        console.log("button was clicked");
        // document.getElementById("load_booking").style.display = "block";
        // document.getElementById("book_me").innerText = "hide booking";
        // document.getElementById("load_booking").styel.display = "none";

        var x = document.getElementById("load_booking");
        if (x.style.display == "none") {
            x.style.display = "block";
            document.getElementById("book_me").innerText = "hide booking";
        } else {
            x.style.display = "none";
            document.getElementById("book_me").innerText = "make a booking";
        }
    }

    function load_modal_page() {
        document.getElementById("card_btn");
        document.getElementById("exampleModal").modal("show");

    }
    </script>
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
                            <a href="vehical.php"> Rental</a>
                        </li>

                        <li>
                            <a href="../htmlfolder/mypost.php"> My Post</a>
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

        <!--------------------------------------------------booking section start here----------------------------->

        <section class="booking_section">
            <div class="booking_div">
                <div class="booking_btn">
                    <h5>Make a booking</h5>
                    <button type="button" name="booking" id="book_me" onclick="load_booking_form()">
                        make a booking
                    </button>
                </div>

                <!--------------------------------------car categoray form div start --------------------------------------------------->

                <div class="categoray_form" id="load_booking">
                    <div class="sub_categoray_form">
                        <form>
                            <div class="select_categoray_div">
                                <button type="button" name="car" id="car_btn" onclick="load_car_field()">
                                    CAR
                                </button>

                                <button type="button" name="property" id="property_btn" onclick="load_property_field()">
                                    PROPERTY
                                </button>
                            </div>

                            <!----------------------------------------------------------------------------------->
                            <div class="car_categoray_form" id="car_field">
                                <div class="categoray_head">
                                    <h2>BOOK A CAR</h2>
                                </div>

                                <div class="form_input_field">
                                    <div>
                                        <div class="car_type_label">
                                            <span><i class="fa fa-car"></i><label>Select Your Car Type</label>
                                            </span>
                                        </div>
                                        <div class="car_type_input">
                                            <select name="" id="car_type">
                                                <option value="Select your car type">
                                                    Select your car type
                                                </option>
                                                <option value=""></option>
                                                <option value="">Mercedes 35</option>
                                                <option value="">Mercedes</option>
                                                <option value="">VM PassatCC</option>
                                                <option value="">BMW 320</option>
                                                <option value="">Toyota camry</option>
                                                <option value="">Lexus city</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="car_type_label">
                                            <span><i class="fa fa-map-marker"></i><label>Pick_Up</label>
                                            </span>
                                        </div>
                                        <div class="car_type_input">
                                            <select name="" id="car_type">
                                                <option value="">
                                                    Santa Monica - 2102 Lincoln Blvd
                                                </option>
                                                <option value="">
                                                    Los Angeles - 5711 W Century Blvd
                                                </option>

                                                <option value="">
                                                    Las Vegas - 6401 Centennial Center Blvd
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="car_type_label">
                                            <span><i class="fa fa-map-marker"></i><label>Drop-of</label>
                                            </span>
                                        </div>
                                        <div class="car_type_input">
                                            <select name="" id="car_type">
                                                <option value="">
                                                    3669 Oliver Street Wedgwood Texas
                                                </option>
                                                <option value="">
                                                    330 Hornor Avenue Kiefer Oklahoma
                                                </option>
                                                <option value="">
                                                    3240 Timbercrest Road SAN PEDRO California
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!------------------------------------------------------------------------------------------------------------------------->
                                <div class="form_input_field">
                                    <div>
                                        <div class="car_type_label">
                                            <span><i class="fa fa-calendar"></i><label>Pick-Up</label>
                                            </span>
                                        </div>
                                        <div class="car_date_input">
                                            <input type="date" name="car_pickup_date" id="" />
                                        </div>
                                    </div>

                                    <div>
                                        <div class="car_pickup_time">
                                            <select name="" id="Pick_Up_date">
                                                <option value="">12:00 AM</option>
                                                <option value="">01:00 AM</option>
                                                <option value="">02:00 AM</option>
                                                <option value="">03:00 AM</option>
                                                <option value="">04:00 AM</option>
                                                <option value="">05:00 AM</option>
                                                <option value="">06:00 AM</option>
                                                <option value="">07:00 AM</option>
                                                <option value="">08:00 AM</option>
                                                <option value="">09:00 AM</option>
                                                <option value="">010:00 AM</option>
                                                <option value="">011:00 AM</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="drop_0f_time_div">
                                        <div class="car_type_label">
                                            <span><i class="fa fa-calendar"></i><label>Drop-of</label>
                                            </span>
                                        </div>
                                        <div class="car_date_input">
                                            <input type="date" name="car_dropof_date" id="drop_of_time" />
                                        </div>
                                    </div>

                                    <div>
                                        <div class="car_drop0f_time">
                                            <select name="" id="car_drop0f_time">
                                                <option value="">12:00 AM</option>
                                                <option value="">01:00 AM</option>
                                                <option value="">02:00 AM</option>
                                                <option value="">03:00 AM</option>
                                                <option value="">04:00 AM</option>
                                                <option value="">05:00 AM</option>
                                                <option value="">06:00 AM</option>
                                                <option value="">07:00 AM</option>
                                                <option value="">08:00 AM</option>
                                                <option value="">09:00 AM</option>
                                                <option value="">010:00 AM</option>
                                                <option value="">011:00 AM</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="car_form_button">
                                            <button type="submit">
                                                <i class="fa-solid fa-magnifying-glass"></i>Search
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form_input_field">
                    <div>
                      <div class="car_type_label">
                        <span
                          ><i class="fa fa-calendar"></i><label>Pick_Up</label>
                        </span>
                      </div>
                      <div class="car_type_input">
                        <input type="date" name="Pick_Up_date" id="" />
                      </div>
                    </div>
                    <div class="time_selection_div">
                      <div class="time_select">
                        <select name="" id="car_type">
                          <option value="">12:00 AM</option>
                          <option value="">01:00 AM</option>
                          <option value="">02:00 AM</option>
                          <option value="">03:00 AM</option>
                          <option value="">04:00 AM</option>
                          <option value="">05:00 AM</option>
                          <option value="">06:00 AM</option>
                          <option value="">07:00 AM</option>
                          <option value="">08:00 AM</option>
                          <option value="">09:00 AM</option>
                          <option value="">010:00 AM</option>
                          <option value="">011:00 AM</option>
                        </select>
                      </div>
                    </div>
                    <div class="dumy">
                      <div>
                        <div class="car_type_label">
                          <span
                            ><i class="fa fa-calendar"></i><label>Pick_Up</label>
                          </span>
                        </div>
                        <div class="car_date_input">
                          <input type="date" name="Pick_Up_date" id="" />
                        </div>
                      </div>
                      <div class="time_selection_div">
                        <div class="time_select">
                          <select name="" id="car_type">
                            <option value="">12:00 AM</option>
                            <option value="">01:00 AM</option>
                            <option value="">02:00 AM</option>
                            <option value="">03:00 AM</option>
                            <option value="">04:00 AM</option>
                            <option value="">05:00 AM</option>
                            <option value="">06:00 AM</option>
                            <option value="">07:00 AM</option>
                            <option value="">08:00 AM</option>
                            <option value="">09:00 AM</option>
                            <option value="">010:00 AM</option>
                            <option value="">011:00 AM</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div> -->
                            </div>
                        </form>

                        <!-------------------------------------- car categoray form div end --------------------------------------------------->
                        <!--------------------------------------propetty categoray form div end --------------------------------------------------->
                        <form>
                            <div class="car_categoray_form" id="property_field">
                                <!-- <div class="select_categoray_div"> -->
                                <!-- <span>CHOOSE YOUR CATEGORAY</span>
                    <div class="radio_btn_div">
                      <input
                        type="radio"
                        name="radio_btn"
                        value="car"
                        id="select_car"
                        onchange="load_car_field()"
                      /><span>Car</span>
  
                      <input
                        type="radio"
                        name="radio_btn"
                        value="car"
                        class="select_property"
                        onchange="load_prperty_field()"
                      /><span>Property</span>
                    </div>
                  -->
                                <!-- <select name="" id="select_property" onchange="laod_change()">
                      <option value="">select your categoray</option>
                      <option value="car">CAR</option>
                      <option value="property">PROPERTY</option>
                    </select> -->
                                <!-- </div> -->

                                <div class="categoray_head">
                                    <h2>BOOK A PROPERTY</h2>
                                </div>

                                <div class="form_input_field">
                                    <div>
                                        <div class="car_type_label">
                                            <span><i class="fa fa-map-marker"></i><label>City</label>
                                            </span>
                                        </div>
                                        <div class="car_type_input">
                                            <select name="" id="car_type">
                                                <option value="">Karachi</option>
                                                <option value="">Islamabad</option>

                                                <option value="">Peshawar</option>
                                                <option value="">Lahore</option>
                                                <option value="">Sawabi</option>
                                                <option value="">Quetta</option>
                                                <option value="">abbotabad</option>
                                                <option value="">Murree</option>
                                                <option value="">MUltan</option>
                                                <option value="">Haripur</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="car_type_label">
                                            <span><i class="fa fa-map-marker"></i><label>Location</label>
                                            </span>
                                        </div>
                                        <div class="car_type_input">
                                            <select name="" id="car_type">
                                                <option value="">
                                                    3669 Oliver Street Wedgwood Texas
                                                </option>
                                                <option value="">
                                                    330 Hornor Avenue Kiefer Oklahoma
                                                </option>
                                                <option value="">
                                                    3240 Timbercrest Road SAN PEDRO California
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="car_type_label">
                                            <span>
                                                <i class="fa-solid fa-house"></i>
                                                <label>Select Your Property Type</label>
                                            </span>
                                        </div>
                                        <div class="car_type_input">
                                            <select name="" id="car_type">
                                                <option value="Select your car type">
                                                    Select your Property type
                                                </option>
                                                <option value=""></option>
                                                <option value="">Houses</option>
                                                <option value="">Appartments</option>
                                                <option value="">Floors</option>
                                                <option value="">Portions</option>
                                                <option value="">Roommates</option>
                                                <option value="">Guests Houses</option>

                                                <option value="">&</option>
                                                <option value="">Shops</option>
                                                <option value="">Offices-</option>

                                                <option value="">& paying Guests</option>
                                                <option value="">Rooms</option>
                                                <option value="">Lands & Plots</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!------------------------------------------------------------------------------------------------------------------------->
                                <div class="form_input_field">
                                    <div class="min_size_div">
                                        <div class="car_type_label">
                                            <span><i class="fa fa-calendar"></i><label>Area Size</label>
                                            </span>
                                        </div>
                                        <div class="min_size_input">
                                            <input type="number" name="car_pickup_date" id="" placeholder="Min" />
                                        </div>
                                    </div>

                                    <div class="max_size_div">
                                        <!-- <div class="car_type_label">
                        <span>
                          <i class="fa fa-calendar"></i
                           ><label>Drop-of</label>  
                        </span>
                      </div> -->
                                        <div class="max_size_input">
                                            <input type="number" name="car_dropof_date" id="drop_of_time"
                                                placeholder="Max" />
                                        </div>
                                    </div>

                                    <div>
                                        <div class="area_size_div">
                                            <select name="" id="car_drop0f_time">
                                                <option value="">Marla</option>
                                                <option value="">Squre Feet</option>
                                                <option value="">Squre yards</option>
                                                <option value="">Squre Meters</option>
                                                <option value="">Kanal</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="price_label_div">
                                            <span><label>Price</label> </span>
                                        </div>
                                        <div class="price_input">
                                            <input type="number" name="price" id="" placeholder="Price" />
                                        </div>
                                    </div>

                                    <div>
                                        <div class="property_form_button">
                                            <button type="submit">
                                                <i class="fa-solid fa-magnifying-glass"></i>Search
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--------------------------------------property categoray form div end ---------------------------------------->
            </div>
        </section>

        <!---------------------------------------------------booking section start here----------------------------->
        <!---------------------------------------------------contanier section start here----------------------------->


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
            // echo "I am working";
            $userposts = $_SESSION['user_email'];
        } else {
            $query = "SELECT *,rental_cars.id as p_id FROM rental_cars INNER JOIN users on users.id=rental_cars.users_id";
        }


        $result = mysqli_query($conn, $query);
        // $num = mysqli_num_rows($result);

        ?>

        <section class="cards_section">
            <div class="container">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    # code...
                    $first_name = $row["f_name"];
                    $phone = $row["phone_number"];
                    $email = $row["email"];
                    $addr = $row["address"];
                    $id = $row['p_id'];
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
                                per day
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
                                    <div style="" class="row m-4 text-center">
                                        <div style=" background-color:#f5f6f8; padding: 10px;  border-radius:10px;;"
                                            class="col-md-8">
                                            <span>
                                                <img src="../assets/images/<?php echo $row["image"] ?>" alt=""
                                                    width="500px" height="300px" />
                                            </span>
                                            <div class="row  m-0 ">
                                                <div style="" class="col-md-12 carimgs">
                                                    <span>
                                                        <img style="margin-left:20px;"
                                                            src="../assets/images/<?php echo $row["image"] ?>" alt=""
                                                            width="120px" height="100px" />
                                                        <img style="margin-left:20px;"
                                                            src="../assets/images/<?php echo $row["image"] ?>" alt=""
                                                            width="120px" height="100px" />
                                                        <img style="margin-left:20px; "
                                                            src="../assets/images/<?php echo $row["image"] ?>" alt=""
                                                            width="120px" height="100px" />
                                                        <img style="margin-left:20px;"
                                                            src="../assets/images/<?php echo $row["image"] ?>" alt=""
                                                            width="120px" height="100px" />
                                                    </span>

                                                </div>
                                                <!-- 
                                            <div style="border:1px solid lightgray;" class="col-md-4 m-0">
                                            </div> -->
                                            </div>

                                        </div>
                                        <div style=" background-color: #eaeef5; border-radius:10px; padding: 10px; padding-top:50px"
                                            class=" col-md-4 ">

                                            <span>
                                                <img style="border-radius: 50px;"
                                                    src="../assets/images/<?php echo $row["users_image"] ?>" alt=""
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

                                                    <tr>
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

                                                    </tr>
                                                </tbody>
                                            </table>


                                            <button style="padding-left:100px;padding-right:100px;" type="submit"
                                                class="btn  btn-secondary mt-5 ">see more adds</button>
                                        </div>


                                    </div>
                                    <div style="background-color:#f5f6f8; border-radius: 10px; padding: 10px; "
                                        class="row m-4">
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
                                        <div style="" class="col-md-8">
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