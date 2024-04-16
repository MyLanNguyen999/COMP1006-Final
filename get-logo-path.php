<?php
session_start();

// * add auth.php
include('include/auth.php');


$title = 'Get Logo Path';
// $logoSrcDefault = './img/logo.png';
$default = 'PHP GAMING';

// $imgTag1 = '<img src="';
// $imgTag2 = '" alt="logo" id="logo"/>';
$imgTag1;
$imgTag2;

// * retrieve $finalName from the session var
if (isset($_SESSION['finalName'])) {
    $finalName = $_SESSION['finalName'];
    $logoSrc = './img/'.$finalName;
    // echo $logoSrc;
    $imgTag1 = '<img src="';
    $imgTag2 = '" alt="logo" id="logo"/>';
    $default= $imgTag1.$logoSrc.$imgTag2;
    // echo $newLogo;
  
}
  echo $default;


?>