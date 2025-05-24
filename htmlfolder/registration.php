<form action="/templatepractice/rentalcar/htmlfolder/registrationhandle.php" method="POST" id="register_form"
    class="input_group_form">
    <?php
    if (isset($success)) {
        echo "<div>" . $success . "</div>";
    }
    ?>
    <div class="homelogin_input_feild">
        <i class="fa fa-user"></i>

        <input type="text" name="f_name" class="txt-input" placeholder="First name" />
    </div>



    <div class="homelogin_input_feild">
        <i class="fa fa-envelope"></i>

        <input type="email" name="email" class="txt-input" placeholder="Email" required />
    </div>

    <div class="homelogin_input_feild">
        <!-- <i class="fa fa-user"></i> -->
        <i class="fa-solid fa-phone-volume"></i>

        <input type="text" name="phone_number" class="txt-input" placeholder="Phone number" />
    </div>

    <div class="homelogin_input_feild">
        <!-- <i class="fa fa-user"></i> -->
        <i class="fa-solid fa-location-dot"></i>
        <input type="text" name="address" class="txt-input" placeholder="Address" />
    </div>
    <div class="passinput-group">
        <div class="homelogin_input_feild">
            <i class="fa fa-lock"></i>

            <input type="password" name="password" class="txt-input" id="pass1" placeholder="Password" required />
        </div>

        <div class="homelogin_input_feild">
            <i class="fa fa-lock " id="passicon"></i>

            <input type="password" name="conpassword" class="txt-input" id="pass2" placeholder="Confirm Password"
                required />
        </div>
    </div>

    <div class="homelogin_input_feild">
        <input type="checkbox" name="check_box" class="check-btn" />
        <span>
            <p>I agree to terms & conditoins</p>
        </span>
    </div>

    <div class="homelogin_btn">
        <button type="submit" name="register" id="reg_btn">
            Register
        </button>
    </div>
</form>