<?php
session_start();

if (isset($_SESSION['user_email'])) {
    echo "Welcom " . $_SESSION['user_email'];
} else {
    // echo "error_message";

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rental Car and Property</title>
    <link rel="stylesheet" href="../rentalcar/css/style.css" />
    <link rel="stylesheet" href="../rentalcar/css/nav.css" />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
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
    </script>
    <script>
    // var x = document.getElementById("login_form");
    // var y = document.getElementById("register_form");
    // var z = document.getElementById("btn");

    function register() {
        document.getElementById("login_form").style.left = "-400px";
        document.getElementById("register_form").style.left = "40px";
        document.getElementById("btn").style.left = "110px";
        document.getElementById("reg_btn").style.color = "white";
        document.getElementById("log_btn").style.color = "black";
    }

    function login() {
        document.getElementById("login_form").style.left = "40px";
        document.getElementById("register_form").style.left = "600px";
        document.getElementById("btn").style.left = "0px";
        document.getElementById("reg_btn").style.color = "black";
        document.getElementById("log_btn").style.color = "white";
    }
    </script>
</head>

<body>
    <div class="main_container">
        <div class="container">
            <div class="nav_div">
                <div class="logo_img"></div>
                <!-- <?php
                        // require_once('htmlfolder/nav.php');
                        ?> -->
                <nav>
                    <ul>
                        <li>
                            <a href="#"> Home </a>
                        </li>

                        <li>
                            <a href="../rentalcar/htmlfolder/vehical.php"> Rental</a>
                        </li>

                        <li>
                            <a href="../rentalcar/htmlfolder/mypost.php"> My Post</a>
                        </li>

                        <li>
                            <a href="index.php#about_us"> About Us</a>
                        </li>
                        <!-- <li>
                <a href="../loginpage/index.html"> Testimonials</a>
              </li> -->
                        <li>
                            <a href="../rentalcar/htmlfolder/contact.php"> Contact</a>
                        </li>
                        <li>
                            <a href="../rentalcar/htmlfolder/login.php"> login</a>
                        </li>

                        <li>
                            <a href="../rentalcar/htmlfolder/logout.php"> logout</a>
                        </li>
                        <!-- <li>
                <a href="../signup page/index.html"> Sign Up</a>
              </li> -->
                        <li class="nav_btn">
                            <a href="../rentalcar/htmlfolder/rental_form.php">
                                <i class="fa-solid fa-plus"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!--------------------------------------container text div --------------------------------------------------->
            <div class="cont_text_div">
                <div class="homelogin_form_container" id="homelogin_form">
                    <!-- <div class="right_corner"></div> -->

                    <div class="button_box">
                        <div id="btn"></div>
                        <button type="button" class="toggle_btn" id="log_btn" onclick="login()">
                            Log In
                        </button>
                        <button type="button" class="toggle_btn" id="reg_btn" onclick="register()">
                            Register
                        </button>
                    </div>
                    <div class="social_icon">
                        <span><a href=""><i class="fa-brands fa-facebook"></i></a></span>
                        <span><a href="http://"><i class="fa-brands fa-google-plus"></i></a></span>
                        <span><a href="http://"><i class="fa-brands fa-twitter"></i></a></span>
                    </div>
                    <?php

                    include 'htmlfolder/validation.php';
                    include 'htmlfolder/registration.php';
                    // include 'phppractice/popup.php';


                    ?>

                    <!-- <form action="/templatepractice/validation.php" method="POST" id="login_form"
                        class="input_group_form">
                        <div class="homelogin_input_feild">
                            <i class="fa fa-envelope"></i>

                            <input type="email" name="email" class="txt-input" placeholder="Email" required />
                        </div>

                        <div class="homelogin_input_feild">
                            <i class="fa fa-lock"></i>

                            <input type="password" name="password" class="txt-input" placeholder="Password" required />
                        </div>

                        <div class="homelogin_input_feild">
                            <input type="checkbox" name="check_box" class="check-btn" />
                            <span>
                                <p>Remember Me</p>
                            </span>
                        </div>

                        <div class="homelogin_btn">
                            <button type="submit" name="submit">Log In</button>
                        </div>
                    </form> -->

                    <!-- <form action="/templatepractice/registration.php" method="POST" id="register_form"
                        class="input_group_form">
                        <div class="homelogin_input_feild">
                            <i class="fa fa-user"></i>

                            <input type="text" name="f_name" class="txt-input" placeholder="First name" />
                        </div>

                        <div class="homelogin_input_feild">
                            <i class="fa fa-user"></i>

                            <input type="text" name="l_name" class="txt-input" placeholder="Last name" />
                        </div>

                        <div class="homelogin_input_feild">
                            <i class="fa fa-envelope"></i>

                            <input type="email" name="email" class="txt-input" placeholder="Email" required />
                        </div>

                        <div class="homelogin_input_feild">
                            <i class="fa fa-lock"></i>

                            <input type="password" name="password" class="txt-input" placeholder="Password" required />
                        </div>

                        <div class="homelogin_input_feild">
                            <i class="fa fa-lock"></i>

                            <input type="password" name="conpassword" class="txt-input" placeholder="Confirm Password"
                                required />
                        </div>

                        <div class="homelogin_input_feild">
                            <input type="checkbox" name="check_box" class="check-btn" />
                            <span>
                                <p>I agree to terms & conditoins</p>
                            </span>
                        </div>

                        <div class="homelogin_btn">
                            <button type="submit" name="submit" id="reg_btn">
                                Register
                            </button>
                        </div>
                    </form> -->
                </div>
                <!-- <p>Plan your trip now</p>
          <h1>Save <span> big</span> with our car rental</h1>
          <p>
            To contribute to positive change and achieve our sustainability
            goals with many extraordinary
          </p>
          <div class="text_btn_div">
            <div class="logbtn">
              <a href="../rentalcar/htmlfolder/rental_form.html">
                <input
                  type="submit"
                  name="login"
                  value="Post an Ads"
                  id="login_btn"
                />
              </a>
            </div>
            <div class="regbtn">
              <input
                type="button"
                name="signup"
                value="Learn More"
                id="signup_btn"
              />
            </div>
          </div> -->
            </div>

            <!--------------------------------------container text div --------------------------------------------------->
            <!--------------------------------------container img  div start --------------------------------------------------->
            <div class="cont_img"></div>
            <div class="slider_div">
                <figure>
                    <div class="car_img">
                        <img src="../rentalcar/assets/images/banner_car.png" alt="" />
                    </div>
                    <div class="car_img">
                        <img src="../rentalcar/assets/images/bannercar2.png" alt="" />
                    </div>
                    <div class="car_img">
                        <img src="../rentalcar/assets/images/rental car.png" alt="" />
                    </div>
                    <div class="car_img">
                        <img src="../rentalcar/assets/images/banner_car.png" alt="" />
                    </div>
                </figure>
            </div>
            <!--------------------------------------container img div end --------------------------------------------------->

            <!--------------------------------------car categoray form div start --------------------------------------------------->

            <div class="categoray_form">
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
                                        <select name="select" id="car_type">
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
            <!--------------------------------------property categoray form div end --------------------------------------------------->

            <!-------------------------------------plan trip page start here---------------------------------------------------->
            <div class="Plan_trip_div">
                <h3>Plan Your Trip now</h3>
                <h1>Quick & easy car rental</h1>
            </div>

            <div class="Plan_trip_div_cards">
                <div class="car_div">
                    <div class="card_car_img"></div>
                    <div class="card_text">
                        <h2>Select Car</h2>
                        <h3>
                            To contribute to positive change and achieve our sustainability
                            goals with many extraordinary
                        </h3>
                    </div>
                </div>
                <div class="car_div">
                    <div class="card_operator_img"></div>
                    <div class="card_text">
                        <h2>Contact Person</h2>
                        <h3>
                            To contribute to positive change and achieve our sustainability
                            goals with many extraordinary
                        </h3>
                    </div>
                </div>
                <div class="car_div">
                    <div class="card_drive_img"></div>
                    <div class="card_text">
                        <h2>Let's Drive</h2>
                        <h3>
                            To contribute to positive change and achieve our sustainability
                            goals with many extraordinary
                        </h3>
                    </div>
                </div>
            </div>
            <!-------------------------------------plan trip page end here---------------------------------------------------->

            <!------------------------------------our rental feet div start here--------------------------------------------->
            <div class="rentalfeet_div">
                <h3>Vehicle Models</h3>
                <h1>Our rental fleet</h1>
                <h5>
                    To contribute to positive change and achieve our sustainability<br />
                    goals with many extraordinary
                </h5>
            </div>
            <!-------------------------------------our rental feet div  end here--------------------------------------------->

            <!-------------------------------------about company div start here--------------------------------------------->
            <div class="about_company_div" id="about_us">
                <div class="about_company_img"></div>
                <div class="about_company_text">
                    <h2>About Company</h2>
                    <h1>You start the engine and your adventure begins</h1>
                    <p>
                        Certain but she but shyness why cottage. Guy the put instrument
                        sir entreaties affronting. Pretended exquisite see cordially the
                        you. Weeks quiet do vexed or whose. Motionless if no to affronting
                        imprudence no precaution. My indulged as disposal strongly
                        attended.
                    </p>
                </div>
            </div>
            <!-------------------------------------about company div  end here--------------------------------------------->

            <!-------------------------------------save big div  start here--------------------------------------------->

            <div class="save_big_div">
                <div class="savebig_text">
                    <h1>Save big with our cheap car rental!</h1>
                    <p>Top Airports. Local Suppliers. 24/7 Support.</p>
                    <p></p>
                </div>

                <div class="save_big_btn">
                    <input type="button" name="login" value="Book Ride" id="login_btn" onclick="load_login_form()" />
                </div>
            </div>

            <!-------------------------------------save big  div  end here--------------------------------------------->

            <!-------------------------------------jeep rood div start here--------------------------------------------->

            <div class="jeep_img_div">
                <img src="../rentalcar/assets/images/jeep_img.png" alt="jee car img" />

                <div class="find_deals_div">
                    <div class="find_deals_text">
                        <h3>Why Choose Us</h3>
                        <h1>Best valued deals you will ever find</h1>
                        <p>
                            Thrown shy denote ten ladies though ask saw. Or by to he going
                            think order event music. Incommode so intention defective at
                            convinced. Led income months itself and houses you.
                        </p>

                        <input type="button" name="login" value="Find Deals" id="login_btn"
                            onclick="load_login_form()" />
                    </div>
                    <div class="find_deals_text_2">
                        <div class="sub_find_deals_text_2">
                            <div class="sub_find_deals_img">
                                <img src="../rentalcar/assets/images/drive.png" alt="" />
                            </div>
                            <div class="sub_find_deals_img_text">
                                <h3>Cross Country Drive</h3>
                                <p>
                                    Speedily say has suitable disposal add boy. On forth doubt
                                    miles of child. Exercise joy man children rejoiced.
                                </p>
                            </div>
                        </div>
                        <div class="sub_find_deals_text_2">
                            <div class="sub_find_deals_img">
                                <img src="../rentalcar/assets/images/charge.png" alt="" />
                            </div>
                            <div class="sub_find_deals_img_text">
                                <h3>All Inclusive Pricing</h3>
                                <p>
                                    Yet uncommonly his ten who diminution astonished. Demesne
                                    new manners savings staying had,
                                </p>
                            </div>
                        </div>
                        <div class="sub_find_deals_text_2">
                            <div class="sub_find_deals_img">
                                <img src="../rentalcar/assets/images/price.png" alt="" />
                            </div>
                            <div class="sub_find_deals_img_text">
                                <h3>No Hidden Charges</h3>
                                <p>
                                    Under folly balls death own point now men. Match way these
                                    she avoid see. She whose drift their fat off.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-------------------------------------jeep rood  div end div start here----------------------------------------->

            <!-------------------------------------client testi div end div start here-------------------------------------->
            <div class="client_testi_div">
                <div class="client_testi_head">
                    <h3>Reviewed by People</h3>
                    <h2>Clients' Testimonials</h2>
                    <div class="client_testi_para">
                        <p>
                            Certain but she but shyness why cottage. Guy the put instrument
                            sir entreaties affronting. Pretended exquisite see cordially the
                            you. Weeks quiet do vexed.
                        </p>
                    </div>
                </div>

                <div class="client_testi_card_div">
                    <div class="cliend_testi_card">
                        <div class="cliend_testi_card_text">
                            <p>
                                "The rem value is the same as the vem value display above.
                                Both units are scalable."
                            </p>
                        </div>
                        <div class="client_testi_card_img_div">
                            <div class="testi_img">
                                <img src="../rentalcar/assets/images/user.png" alt="" />
                            </div>
                            <div class="testi_img_text">
                                <strong>Kimberly Garcia</strong>
                                <span>Boston Area</span>
                            </div>
                            <div class="testi_icon">
                                <i class="fa-sharp fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="cliend_testi_card">
                        <div class="cliend_testi_card_text">
                            <p>
                                The rem value is the same as the vem value display above. Both
                                units are scalable.
                            </p>
                        </div>
                        <div class="client_testi_card_img_div">
                            <div class="testi_img">
                                <img src="../rentalcar/assets/images/user.png" alt="" />
                            </div>
                            <div class="testi_img_text">
                                <strong>Kimberly Garcia</strong>
                                <span>Boston Area</span>
                            </div>
                            <div class="testi_icon">
                                <i class="fa-sharp fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-------------------------------------client testi div end  here--------------------------------------------->

            <!-------------------------------------mobile app div start  here--------------------------------------------->

            <div class="mobile_app_div"></div>
            <div class="mobile_app_text_div">
                <div class="mobile_app_head">
                    <h2>Download our app to get most out of it</h2>
                </div>

                <div class="mobile_app_description">
                    <p>
                        Thrown shy denote ten ladies though ask saw. Or by to he going
                        think order event music. Incommode so intention defective at
                        convinced. Led income months itself and houses you.
                    </p>
                </div>
                <div class="mobile_app_img_icon">
                    <img src="../rentalcar/assets/images/get_from_google.png" alt="google img" />
                    <img src="../rentalcar/assets/images/get_from_apple.png" alt="apple img" />
                </div>
            </div>

            <!-------------------------------------mobile app div end  here------------------------------------------>

            <!-------------------------------------footer div start here--------------------------------------------->

            <div class="footer_div">
                <div class="car_rental_div">
                    <div class="cr_head">
                        <h2><span>Car</span>Rental</h2>
                    </div>
                    <div class="cr_para">
                        <p>
                            Use securing confined his shutters. Delightful as he it
                            acceptance an solicitude discretion.
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
                            <input type="text" name="text" placeholder="Enter Email Address" />
                            <button>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-------------------------------------footer div end  here--------------------------------------------->
            <!-- <div class="categoray_form">
          <div class="sub_categoray_form"></div>
        </div> -->
        </div>
    </div>

    <script src="https://kit.fontawesome.com/6bb3f85045.js" crossorigin="anonymous"></script>
</body>

</html>