<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login page</title>
    <link rel="stylesheet" href="/rentalcar/css/login.css" />
    <!-- <link rel="stylesheet" href="../homepage/css/style.css" /> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="../signup page/signup.css" /> -->
    <script>
        function load_login_form() {
            // var ca = document.getElementById("login_btn");
            //if (ca.name == "login") {
            document.getElementById("login-form").style.display = "block";
            document.getElementById("signup-form").style.display = "none";
            //}
        }

        function load_register_form() {
            // var ca = document.getElementById("signup_btn");
            //if (ca.name == "signup") {
            document.getElementById("signup-form").style.display = "block";
            document.getElementById("login-form").style.display = "none";
            //}
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="textlogin-div">
            <!-- <div class="logo-div">
          <h2>bayut</h2>
        </div> -->
            <div class="nav_div">
                <a href="/rentalcar/index.php">
                    <div class="logo_img"></div>
                </a>
                <!-- <nav>
            <ul>
              <li>
                <a href="/templatepractice/rentalcar/index.html"> Home </a>
              </li>
              <li>
                <a href="/templatepractice/loginpage/index.html">
                  Vehicle Models</a
                >
              </li>
              <li>
                <a href="/templatepractice/loginpage/index.html"> About Us</a>
              </li>
              <li>
                <a href="../loginpage/index.html"> Testimonials</a>
              </li>
              <li>
                <a href="../loginpage/index.html"> Contact</a>
              </li>
              <li>
                <a href="../loginpage/index.html"> login</a>
              </li>
              <li>
                <a href="../signup page/index.html"> Sign Up</a>
              </li>
              <li class="nav_btn">
                <a href="../homepage/html folder/form.html"> Register</a>
              </li>
            </ul>
          </nav> -->
            </div>
            <!-----------------------------------nav div end here-------------------------------------------------->
            <div class="imgtxt-div">
                <p>Plan your trip now</p>
                <h1>Save <span>big</span> with our car rental</h1>
                <p>
                    To contribute to positive change and achieve our sustainability
                    goals with many extraordinary
                </p>
                <div class="img-btn-div">
                    <div class="logbtn">
                        <input type="button" name="login" value="Login" id="login_btn" onclick="load_login_form()" />
                    </div>
                    <div class="regbtn">
                        <input type="button" name="signup" value="register" id="signup_btn"
                            onclick="load_register_form()" />
                    </div>
                </div>
            </div>
            <div class="imgform-div"></div>
        </div>
        <div class="img-div">
            <img src="/rentalcar/assets/images/pic/texture4.avif " alt="" />
        </div>
        <div class="main_container" id="login-form">
            <form action="action-form">
                <div class="ptxt_div">Account Login</div>
                <div class="text_div">
                    <div class="eicon_div">
                        <i class="fa-sharp fa-solid fa-envelope" id="input_icon1"></i>
                    </div>
                    <input type="email" name="email" id="email" placeholder="Email" />
                </div>

                <div class="eicon_div">
                    <i class="fa-sharp fa-solid fa-lock" id="input_icon2"></i>
                </div>
                <div class="text_div">
                    <input type="password" name="password" id="password" placeholder="Password" />
                </div>
                <div class="check_div">
                    <input type="checkbox" name="check" id="check" />
                </div>
                <div class="checktxt">
                    <label for="check"><b> Remember Me</b></label>
                </div>
                <div class="check_btn">
                    <button type="submit" name="submit">Sign In</button>
                </div>
                <div class="login-ptag">
                    <p>-OR-</p>
                </div>
                <div class="btn_div_1">
                    <button type="submit" name="submit">
                        <span class="icon_fab"><i class="fab fa fa-facebook"></i></span>Sign in using Facebook
                    </button>
                </div>
                <div class="btn_div_2">
                    <button type="submit" name="submit">
                        <span class="icon_gle"><i class="fab fa fa-google-plus"></i></span>
                        Sign in using Google+
                    </button>
                </div>
                <div class="footer_div">
                    <div>
                        <a href="#">I for got my password</a>
                    </div>
                    <div>
                        <a href="signup-form">Register a new membership</a>
                    </div>
                </div>
            </form>
        </div>

        <!---------------------------------registration page start-------------------------------------------------------->
        <div class="form_container" id="signup-form">
            <span class="head">
                <h5>Create your account!</h5>
            </span>
            <form>
                <div class="input_feild">
                    <i class="fa fa-user"></i>

                    <input type="text" name="name" class="txt-input" placeholder="First name" />
                </div>

                <div class="input_feild">
                    <i class="fa fa-user"></i>

                    <input type="text" name="name" class="txt-input" placeholder="Last name" />
                </div>

                <div class="input_feild">
                    <i class="fa fa-envelope"></i>

                    <input type="email" name="email" class="txt-input" placeholder="Email" />
                </div>

                <div class="input_feild">
                    <i class="fa fa-lock"></i>

                    <input type="password" name="password" class="txt-input" placeholder="Password" />
                </div>

                <div class="input_feild">
                    <i class="fa fa-lock"></i>

                    <input type="password" name="password" class="txt-input" placeholder="Retype password" />
                </div>

                <div class="check_button">
                    <input type="checkbox" name="checkbox" />
                    <label for="checkbox">I agree to the<a class="terms" href="#">terms</a></label>
                </div>

                <div class="btn">
                    <button type="submit" name="submit">Register</button>
                </div>

                <div class="ptag">
                    <span>-OR-</span>
                </div>

                <div class="btn_class">
                    <i class="fab fa fa-facebook fbi"></i>
                    <button class="btn1" type="submit" name="submit">
                        Sign up using facebook
                    </button>
                    <i class="fab fa fa-google-plus glei"></i>
                    <button class="btn2" type="submit" name="submit">
                        Sign up using google+
                    </button>
                </div>

                <div class="footer">
                    <a href="">I already have a membership</a>
                </div>
            </form>
        </div>
        <!---------------------------------registration page end---------------------------------------------------------->
    </div>
    <script src="https://kit.fontawesome.com/6bb3f85045.js" crossorigin="anonymous"></script>
</body>

</html>