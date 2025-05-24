<?php include('config.php');
?>
<nav>
    <ul>
        <li>
            <a href="<?php $rootUrl; ?>"> Home </a>
        </li>

        <li>
            <a href="<?php $rootUrl; ?>vehical.php"> Rental</a>
        </li>

        <li>
            <a href="<?php $rootUrl; ?>vehical.php"> My Post</a>
        </li>

        <li>
            <a href="<?php $assetUrl; ?>#about_us"> About Us</a>
        </li>
        <!-- <li>
                <a href="../loginpage/index.html"> Testimonials</a>
              </li> -->
        <li>
            <a href="<?php $rootUrl; ?>contact.php"> Contact</a>
        </li>
        <li>
            <a href="<?php $rootUrl; ?>login.php"> login</a>
        </li>
        <!-- <li>
                <a href="../signup page/index.html"> Sign Up</a>
              </li> -->
        <li class="nav_btn">
            <a href="<?php $rootUrl; ?>rental_form.php">
                <i class="fa-solid fa-plus"></i></a>
        </li>
    </ul>
</nav>