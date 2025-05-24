<?php
session_start();
if (isset($_SESSION['user_email'])) {
    // echo "Welcom " . $_SESSION['user_email'];
} else {
    // echo "error_message";
    header("location:/rentalcar/index.php");
}
$conn = mysqli_connect("localhost", "root", "", "rentalcar_db");


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userpost = $_SESSION['user_email'];
if ($userpost = true) {
} else {
    header("location:/templatepractice/rentalcar/index.php");
}
$email = $_SESSION['user_email'];
$uesrid = $_SESSION['user_id'];

// echo $uesrid;
// $sql = "select id from `users` where `email`='" . $email . "'";
// $result = mysqli_query($conn, $sql);
// $getid = mysqli_fetch_array($result);

// $mypost = "select * from `rental_cars` where `users_id`='" . $getid . "'";




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $car_name = $_POST["car_name"];
    $car_type = $_POST["car_type"];
    // $car_seats = $_POST["car_seats"];
    $car_transmition = $_POST["car_transmition"];
    // $car_facility = $_POST["car_facility"];
    // $image = $_POST["image"];
    // $image_tmp_name = $_POST["image"]['tmp_name'];

    $imgname = date('ymdghsi') . "-" . $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $dir = "../assets/images";
    $users_id = $uesrid;
    $uploaded_file = move_uploaded_file($tmp_name, $dir . "/" . $imgname);

    // $des = $_POST["des"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $type = $_POST["type"];
    $car_year = $_POST["car_year"];
    $car_driven = $_POST["car_driven"];
    $car_registration_city = $_POST["car_registration_city"];
    $car_document = $_POST["car_document"];
    $assembly = $_POST["assembly"];
    $car_condition = $_POST["car_condition"];
    // echo $car_condition;
    $price = $_POST["price"];
    $per_day_mon = $_POST["per_day_mon"];
    $location = $_POST["location"];
    $city = $_POST["city"];
    $Neighbourhood = $_POST["Neighbourhood"];

    $userprofileimg = date('ymdghsi') . "-" . $_FILES['users_image']['name'];
    $tmp_name = $_FILES['users_image']['tmp_name'];
    $dir = "../assets/images";
    $uploaded_file = move_uploaded_file($tmp_name, $dir . "/" . $userprofileimg);







    $sql = "INSERT INTO `rental_cars` (`users_id`,`car_name`, `car_type`, `car_transmition`, `image`, `title`, `description`, `type`, `car_year`, `car_driven`, `car_registration_city`, `car_document`, `assembly`, `car_condition`, `price`, `per_day_mon`, `location`, `city`, `Neighbourhood`, `users_image`)
 VALUES ( '$users_id','$car_name', '$car_type','$car_transmition', '$imgname', 
  '$title' , '$description', '$type',
 '$car_year', '$car_driven', '$car_registration_city','$car_document','$assembly','$car_condition ',
  '$price', '$per_day_mon', '$location', '$city', '$Neighbourhood', '$userprofileimg')";


    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "data inserted successfully";
        header("location: /templatepractice/rentalcar/htmlfolder/vehical.php");
    } else {
        echo "data insertion failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form page</title>
    <link rel="stylesheet" href="../css/rental_form.css" />
    <link rel="stylesheet" href="../css/nav.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


</head>

<body>
    <div class="container">
        <!-- <div class="nav-div">
        <div class="logo"><h1>bayut</h1></div>
      </div> -->
        <div class="nav_div">
            <div class="logo_img"></div>
            <!-- <?php
                    // require_once('nav.php');

                    ?> -->
            <nav>
                <ul>
                    <li>
                        <a href="../rentalcar/index.php"> Home </a>
                    </li>

                    <li>
                        <a href="vehical.php"> Rental</a>
                    </li>

                    <li>
                        <a href="../rentalcar/htmlfolder/mypost.php"> My Post</a>
                    </li>

                    <li>
                        <a href="../rentalcar/index.php#about_us"> About Us</a>
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

                </ul>
            </nav>
        </div>

        <div class="header">
            <h2>POST YOUR AD</h2>
        </div>
        <div class="main-container">
            <form action="rental_form.php" method="post" enctype="multipart/form-data">
                <div class="main-div">
                    <!-- <div class="sub-div">
              <h3 class="sub-head">
                SELECTED CATEGORY <span>Vehicles / car</span>
              </h3>
             </div> -->
                    <div class="sub-head-2">
                        <span class="span-1">INCLUDE SOME DETAILS</span>
                    </div>
                    <div class="input-div">
                        <label for="" class="label-1">Ad title</label>
                        <input type="text" name="title" id="txt-1" required>
                    </div>

                    <div class="text-div">
                        <label for="textarea-1" class="label-1">Description</label>
                        <textarea name="description" id="textarea-1" cols="115" rows="8" required></textarea>
                    </div>

                    <div class="select-div">
                        <label for="" class="label-1">Select your Category</label>
                        <select name="type" class="select-1" id="Category" onchange="selectcategory()" required>
                            <option value="">--select your category--</option>

                            <option value="car">CAR</option>
                            <option value="property">PROPERTY</option>
                        </select>
                    </div>

                    <!-- <div id="carfeild"> -->

                    <div class="select-div">
                        <label for="" class="label-1" id="labelmake">Make</label>
                        <select name="car_name" class="select-1" id="makefield" onchange="selectmake()" required>
                            <option value="" selected></option>
                            <option value="Toyota">Toyota</option>
                            <option value="Honda">Honda</option>
                            <option value="Suzuki">Suzuki</option>
                            <option value="Daihatsu">Daihatsu</option>
                            <option value="Nissan">Nissan</option>
                            <option value="Audi">Audi</option>
                            <option value="BMW">BMW</option>
                            <option value="Hino">Hino</option>
                            <option value="Land Rover">Land Rover</option>
                            <option value="KIA">KIA</option>
                            <option value="Hyundai">Hyundai</option>
                            <option value="Range Rover">Range Rover</option>
                            <option value="others">others</option>
                        </select>
                    </div>
                    <div id="modelfield">
                        <div class="select-div" onchange="selectmodel()">
                            <label for="" class="label-1">Model</label>
                            <select name="car_type" class="select-1" required>
                                <option value=""></option>
                                <option value="Cultus VXR">Cultus VXR</option>
                                <option value="Mehran VX">Mehran VX</option>
                                <option value="Mehran VXR">Mehran VXR</option>
                                <option value="Auris">Auris</option>
                                <option value="Corolla 2.0 D">Corolla 2.0 D</option>
                                <option value="Aqua">Aqua</option>
                                <option value="Corolla GLI">Corolla GLI</option>
                                <option value="Corolla XLI">Corolla XLI</option>
                                <option value="Corolla Fielder">Corolla Fielder</option>
                                <option value="Toyo Ace">Toyo Ace</option>
                                <option value="Crown">Crown</option>
                                <option value="Hilux">Hilux</option>
                                <option value="others">others</option>
                            </select>
                        </div>

                        <div class="input-div">
                            <label for="" class="label-1">Year</label>
                            <input type="number" name="car_year" id="txt-1" required>
                        </div>

                        <div class="input-div" id="modelinput-2">
                            <label for="" class="label-1">KM's driven</label>
                            <input type="number" name="car_driven" id="txt-1" required>
                        </div>

                        <div class="flex-div">
                            <span class="flex-span">Fuel</span>

                            <div class="subflex-div">

                                <!-- <div class="flex">
                                    <label for="Fuel">Fuel</label> -->
                                <!-- <input type="checkbox" name="check" id="Fuel">

                                </div> -->
                                <div class="flex">
                                    <!-- <span class="flex-span">Petrol</span> -->
                                    <label for="Petrol">Petrol</label>
                                    <input type="checkbox" name="check" id="Petrol">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Diesel</span> -->
                                    <label for="Diesel">Diesel</label>
                                    <input type="checkbox" name="check" id="Diesel">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">LPG</span> -->
                                    <label for="LPG">LPG</label>
                                    <input type="checkbox" name="check" id="LPG">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">CNG</span> -->
                                    <label for="CNG">CNG</label>
                                    <input type="checkbox" name="check" id="CNG">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Hybrid</span> -->
                                    <label for="Hybrid">Hybrid</label>
                                    <input type="checkbox" name="check" id="Hybrid">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Electric</span> -->
                                    <label for="Electric">Electric</label>
                                    <input type="checkbox" name="check" id="Electric">
                                </div>
                            </div>
                        </div>
                        <div class="select-div">
                            <label for="" class="label-1">Registration City</label>
                            <select name="car_registration_city" class="select-1" required required>
                                <option value=""></option>
                                <option value="Karachi">Karachi</option>
                                <option value="Islamabad">Islamabad</option>
                                <option value="Lahore">Lahore</option>
                                <option value="Peshawar">Peshawar</option>
                                <option value="Multan">Multan</option>
                                <option value="Quetta">Quetta</option>
                                <option value="Mardan">Mardan</option>
                                <option value="Sawabi">Sawabi</option>
                                <option value="Gujranwala">Gujranwala</option>
                                <option value="Faisalabad">Faisalabad</option>
                                <option value="Mianwali">Mianwali</option>
                                <option value="Gujrat">Gujrat</option>
                                <option value="others">others</option>
                            </select>
                        </div>

                        <div class="flex-div">
                            <span class="flex-span">Car documents</span>
                            <div class="subflex-div">
                                <div class="flex">
                                    <!-- <span class="flex-span">Orignal</span> -->
                                    <label for="orignal">Orignal</label>
                                    <input type="radio" name="car_document" value="Orignal" id="orignal">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Duplicate</span> -->
                                    <label for="Dupli">Duplicate</label>
                                    <input type="radio" name="car_document" value="Duplicate" id="Dupli">
                                </div>
                            </div>
                        </div>

                        <div class="flex-div">
                            <span class="flex-span">Assembly</span>
                            <div class="subflex-div">
                                <div class="flex">
                                    <!-- <span class="flex-span">Local</span> -->
                                    <label for="local">Local</label>
                                    <input type="radio" name="assembly" value="Local" id="local">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Imported</span> -->
                                    <label for="imported">Imported</label>
                                    <input type="radio" name="assembly" value="Imported" id="imported">
                                </div>
                            </div>
                        </div>

                        <div class="flex-div">
                            <span class="flex-span"> Transmission</span>
                            <div class="subflex-div">
                                <div class="flex">
                                    <!-- <span class="flex-span">Automatic</span> -->
                                    <label for="auto">Automatic</label>
                                    <input type="radio" name="car_transmition" value="Automatic" id="auto">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Manual</span> -->
                                    <label for="manual">Manual</label>
                                    <input type="radio" name="car_transmition" value="Manual" id="manual">
                                </div>
                            </div>
                        </div>

                        <div class="flex-div">
                            <span class="flex-span"> Features</span>
                            <div class="subflex-div">
                                <div class="flex">
                                    <!-- <span class="flex-span">Front Camera</span> -->
                                    <label for="f_camera">Front Camera</label>
                                    <input type="checkbox" name="check" id="f_camera">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Alloy Rims </span> -->
                                    <label for="rims">Alloy Rims</label>
                                    <input type="checkbox" name="check" id="rims">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">CD Player</span> -->
                                    <label for="CD_player">CD Player</label>
                                    <input type="checkbox" name="check" id="CD_player">

                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Rear AC Vents</span> -->
                                    <label for="Rear_AC">Rear AC Vents</label>
                                    <input type="checkbox" name="check" id="Rear_AC">
                                </div>

                                <div class="flex">
                                    <!-- <span class="flex-span"> Air Bags</span> -->
                                    <label for="Air_Bags">Air Bags</label>
                                    <input type="checkbox" name="check" id="Air_Bags">
                                </div>

                                <div class="flex">
                                    <!-- <span class="flex-span">Rear AC Vents</span> -->
                                    <label for="Rear_AC_Vents">Rear AC Vents</label>
                                    <input type="checkbox" name="check" id="Rear_AC_Vents">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">USB and Auxillary Cable</span> -->
                                    <label for="usb">USB and Auxillary Cable</label>
                                    <input type="checkbox" name="check" id="usb">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">DVD Player</span> -->
                                    <label for="DVD_Player">DVD Player</label>
                                    <input type="checkbox" name="check" id="DVD_Player">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Heated Seats</span> -->
                                    <label for="Heated_Seats">Heated Seats</label>
                                    <input type="checkbox" name="check" id="Heated_Seats">
                                </div>

                                <div class="flex">
                                    <!-- <span class="flex-span">Front Speakers</span> -->
                                    <label for="Speakers">Front Speakers</label>
                                    <input type="checkbox" name="check" id="Speakers">
                                </div>
                                <div class="flex">
                                    <span class="flex-span">AM/FM Radio</span>
                                    <label for="Radio">AM/FM Radio</label>
                                    <input type="checkbox" name="check" id="Radio">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">CD Player </span> -->
                                    <label for="CD">CD Player</label>
                                    <input type="checkbox" name="check" id="CD">
                                </div>
                            </div>
                        </div>

                        <div class="flex-div">
                            <span class="flex-span">Condition</span>
                            <div class="subflex-div">
                                <div class="flex">
                                    <!-- <span class="flex-span">New</span> -->
                                    <label for="New">New</label>
                                    <input type="radio" name="car_condition" value="New" id="New">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">used</span> -->
                                    <label for="used">used</label>
                                    <input type="radio" name="car_condition" value="Used" id="used">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------------------property form start------------------------------------------------------->

                    <div id="propertyfield">
                        <div class="flex-div">
                            <span class="flex-span"> Furnished</span>
                            <div class="subflex-div">
                                <div class="flex">
                                    <!-- <span class="flex-span">Unfurnished</span> -->
                                    <label for="Unfurnished">Unfurnished</label>
                                    <input type="radio" name="fur" id="Unfurnished">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Furnished</span> -->
                                    <label for="Furnished">Furnished</label>
                                    <input type="radio" name="fur" id="Furnished">
                                </div>
                            </div>
                        </div>

                        <div class="select-div">
                            <label for="" class="label-1">Bedrooms</label>
                            <select name="select" class="select-1">
                                <option value=""></option>
                                <option value="1">1</option>

                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6+</option>
                            </select>
                        </div>

                        <div class="select-div">
                            <label for="" class="label-1">Bathrooms</label>
                            <select name="select" class="select-1">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7+</option>
                            </select>
                        </div>

                        <div class="flex-div">
                            <span class="flex-span">Construction State</span>
                            <div class="subflex-div">
                                <div class="flex">
                                    <!-- <span class="flex-span">Grey Sturcture</span> -->
                                    <label for="Grey">Grey Sturcture</label>
                                    <input type="radio" name="const" id="Grey">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Finished </span> -->
                                    <label for="Finished">Finished</label>
                                    <input type="radio" name="const" id="Finished">
                                </div>
                            </div>
                        </div>

                        <div class="flex-div">
                            <span class="flex-span"> Features</span>
                            <div class="subflex-div">
                                <div class="flex">
                                    <!-- <span class="flex-span"> Drawing Room</span> -->
                                    <label for="Drawing">Drawing Room</label>
                                    <input type="checkbox" name="check" id="Drawing">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span"> Servant Quarters</span> -->
                                    <label for="Servant">Servant Quarters</label>
                                    <input type="checkbox" name="check" id="Servant">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Dining Room </span> -->
                                    <label for="Dining">Dining Room</label>
                                    <input type="checkbox" name="check" id="Dining">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span"> Kitchen</span> -->
                                    <label for="Kitchen">Kitchen</label>
                                    <input type="checkbox" name="check" id="Kitchen">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Study Room</span> -->
                                    <label for="Study">Study Room</label>
                                    <input type="checkbox" name="check" id="Study">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Prayer Room</span> -->
                                    <label for="Prayer">Prayer Room</label>
                                    <input type="checkbox" name="check" id="Prayer">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Powder Room</span> -->
                                    <label for="Powder">Powder Room</label>
                                    <input type="checkbox" name="check" id="Powder">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Gym</span> -->
                                    <label for="Gym">Gym</label>
                                    <input type="checkbox" name="check" id="Gym">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Store Room</span> -->
                                    <label for="Store_Room">Store Room</label>
                                    <input type="checkbox" name="check" id="Store_Room">
                                </div>

                                <div class="flex">
                                    <!-- <span class="flex-span">Steam Room</span> -->
                                    <label for="Steam">Steam Room</label>
                                    <input type="checkbox" name="check" id="Steam">
                                </div>
                                <div class="flex">
                                    <span class="flex-span">Lounge or Sitting Room</span>
                                    <label for="Lounge">Lounge or Sitting Room</label>
                                    <input type="checkbox" name="check" id="Lounge">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Laundry Room </span> -->
                                    <label for="Laundry">Laundry Room</label>
                                    <input type="checkbox" name="check" id="Laundry">
                                </div>
                            </div>
                        </div>

                        <div class="flex-div">
                            <span class="flex-span"> Area Unit</span>
                            <div class="subflex-div">
                                <div class="flex">
                                    <!-- <span class="flex-span">Kanal</span> -->
                                    <label for="Kanal">Kanal</label>
                                    <input type="radio" name="Area" id="Kanal">
                                </div>

                                <div class="flex">
                                    <!-- <span class="flex-span">Marla</span> -->
                                    <label for="Marla">Marla</label>
                                    <input type="radio" name="Area" id="Marla">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Squre Feet</span> -->
                                    <label for="Squre_Feet">Squre Feet</label>
                                    <input type="radio" name="Area" id="Squre_Feet">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Squre Meter </span> -->
                                    <label for="Squre_Meter">Squre Meter</label>
                                    <input type="radio" name="Area" id="Squre_Meter">
                                </div>
                                <div class="flex">
                                    <!-- <span class="flex-span">Squre Yards </span> -->
                                    <label for="Squre_Yards">Squre Yards</label>
                                    <input type="radio" name="Area" id="Squre_Yards">
                                </div>
                            </div>
                        </div>

                        <div class="input-div">
                            <label for="" class="label-1">Area</label>
                            <input type="number" name="text" id="txt-1">
                        </div>
                    </div>

                    <!-----------------------------------property form end-------------------------------------------------------->
                </div>

                <div class="main-div">
                    <div class="sub-head-2">
                        <span class="span-1">SET A PRICE</span>
                    </div>
                    <div class="input-div">
                        <label for="" class="label-1">Rent Price</label>
                        <input type="text" name="price" id="txt-1" required>

                    </div>
                    <div class="price_radio_btn">
                        <input type="radio" name="per_day_mon" id="day" required>
                        <label for="day">per day</label>
                        <input style="margin-left:20px;" type="radio" name="per_day_mon" id="month">
                        <label for="month">per month</label>
                    </div>
                    <div class="Ads-loc-div">
                        <div class="select-div">
                            <div class="sub-head-2">
                                <span class="span-1">YOUR AD'S LOCATION</span>
                            </div>
                            <label for="" class="label-1">location</label>
                            <select name="location" class="select-1" id="location" onchange="selectlocation()" required>
                                <option value=""></option>
                                <option value="punjab">
                                    Punjab, Pakistan
                                </option>
                                <option value=" Islamabad Capital Territory, Pakistan">
                                    Islamabad Capital Territory, Pakistan
                                </option>
                                <option value="Balochistan, Pakistan">Balochistan, Pakistan</option>
                                <option value="Northern Areas, Pakistan">Northern Areas, Pakistan</option>
                                <option value="Azad Kashmir, Pakistan">Azad Kashmir, Pakistan</option>
                                <option value="Sindh, Pakistan">Sindh, Pakistan</option>
                                <option value="Sawabi">Sawabi</option>
                            </select>
                        </div>

                        <div class="select-div" id="cityfield">
                            <label for="" class="label-1">City</label>
                            <select name="city" class="select-1" required>
                                <option value=""></option>
                                <option value="Karachi">Karachi</option>
                                <option value="Islamabad">Islamabad</option>
                                <option value="Lahore">Lahore</option>
                                <option value="Peshawar">Peshawar</option>
                                <option value="Multan">Multan</option>
                                <option value="Quetta">Quetta</option>
                                <option value="Mardan">Mardan</option>
                                <option value="Sawabi">Sawabi</option>
                                <option value="Gujranwala">Gujranwala</option>
                                <option value="Faisalabad">Faisalabad</option>
                                <option value="Mianwali">Mianwali</option>
                                <option value="Gujrat">Gujrat</option>
                                <option value="others">others</option>

                            </select>

                            <div class="input-div-neighbr">
                                <label for="" class="label-1">Neighbourhood</label>
                                <input type="text" name="Neighbourhood" id="txt-1" required>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="main-div">

                    <div class="input-div">
                        <div class="sub-head-2">
                            <span class="span-1">UPLOAD CAR PICTURE</span>
                        </div>
                        <!-- <label for="" class="label-1">Upload Picture</label> -->
                        <input type="file" name="image" id="txt-1" required>

                    </div>


                </div>


                <div class="main-div">
                    <div class="sub-head-2">
                        <span class="span-1">UPLOAD YOUR PROFILE PICTURE</span>
                    </div>
                    <div class="input-div">
                        <label for="" class="label-1"></label>
                        <input type="file" name="users_image" id="txt-1" required>
                    </div>
                    <div class="contact-div">
                        <span class="contact">Your phone number</span>
                        <span class="contact">+923339524460</span>
                    </div>

                    <div class="contact-div">
                        <span class="contact-2">Show your phone number</span>
                        <span class="contact-2">Yes / NO</span>
                    </div>

                    <div class="button-div">
                        <button type="submit" name="submit" value="Post Now">
                            Post now
                        </button>
                    </div>
                </div>
                <!-- </div> -->
            </form>
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


    <!------------------------------------------------------------------------------------------------------------------>
    <script>
    function selectcategory() {
        var sc = document.getElementById("Category");
        if (sc.value == "property") {
            console.log(sc.value);

            document.getElementById("propertyfield").style.display = "block";
            document.getElementById("makefield").style.display = "none";
            document.getElementById("labelmake").style.display = "none";
            document.getElementById("modelfield").style.display = "none";
        }
        if (sc.value == "car") {
            // console.log(sc.value);

            document.getElementById("propertyfield").style.display = "none";
            document.getElementById("makefield").style.display = "block";
            document.getElementById("labelmake").style.display = "block";
            // document.getElementById("modelfield").style.display = "block";
        }
    }

    function selectmake() {
        var sm = document.getElementById("makefield");
        // console.log(sm);
        if (sm.value == "Toyota") {
            document.getElementById("modelfield").style.display = "block";
        }
        if (sm.value == "Honda") {
            document.getElementById("modelfield").style.display = "block";
        }
        if (sm.value == "Suzuki") {
            document.getElementById("modelfield").style.display = "block";
        }
        if (sm.value == "Daihatsu") {
            document.getElementById("modelfield").style.display = "block";
        }
        if (sm.value == "Nissan") {
            document.getElementById("modelfield").style.display = "block";
        }
        if (sm.value == "Audi") {
            document.getElementById("modelfield").style.display = "block";
        }
        if (sm.value == "BMW") {
            document.getElementById("modelfield").style.display = "block";
        }
        if (sm.value == "Hino") {
            document.getElementById("modelfield").style.display = "block";
        }
        if (sm.value == "Land Rover") {
            document.getElementById("modelfield").style.display = "block";
        }
        if (sm.value == "KIA") {
            document.getElementById("modelfield").style.display = "block";
        }
        if (sm.value == "Hyundai") {
            document.getElementById("modelfield").style.display = "block";
        }
        if (sm.value == "Range Rover") {
            document.getElementById("modelfield").style.display = "block";
        }
    }

    function selectlocation() {
        var sl = document.getElementById("location");
        console.log(sl);
        if (sl.value == "punjab") {
            document.getElementById("cityfield").style.display = "block";
        }
    }

    // function selectcity() {
    //   var sc = document.getElementById("cityfield");
    //   if (sc.value == "Karachi") {
    //     document.getElementById("subcityfield").style.display = "block";
    //   }
    // }
    </script>
</body>

</html>