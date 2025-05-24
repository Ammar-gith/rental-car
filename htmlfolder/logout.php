<?php
session_start();


session_unset();
session_destroy();
header("location:/rentalcar/index.php");
