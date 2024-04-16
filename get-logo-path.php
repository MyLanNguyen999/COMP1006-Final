<?php
session_start();

// * add auth.php
include('include/auth.php');


$title = 'Get Logo Path';
// $logoSrcDefault = './img/logo.png';
$default = '<a class="navbar-brand" href="index.php">PHP GAMING</a>';

// $imgTag1 = '<img src="';
// $imgTag2 = '" alt="logo" id="logo"/>';
$imgTag1;
$imgTag2;

// * retrieve $finalName from the session var
if (isset($_SESSION['finalName'])) {
    $finalName = $_SESSION['finalName'];
    $logoSrc = './img/'.$finalName;
    $imgTag1 = '<img src="';
    $imgTag2 = '" alt="logo" id="logo"/>';
    $logoSrcDefault = $imgTag1.$logoSrc.$imgTag2;
  
}
  echo $default;


?>