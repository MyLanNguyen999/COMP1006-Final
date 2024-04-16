<?php
session_start();

include('include/auth.php');

$title = 'Save New Logo';
require 'include/header.php';


// * initiate new var for new logo saves status
$newLogoSaved = false;

// * process logo
if(($_FILES['logo']['size'] > 0)) {
    $logoName = $_FILES['logo']['name'];
    $finalName = session_id(). '-' . $logoName;
    echo $finalName .' <br/>';

    // * temp location on server
    $tmp_name = $_FILES['logo']['tmp_name'];

    // * file type
    $type = mime_content_type($tmp_name);

    // * check if the file is png
    if ($type != 'image/png') {
        echo 'Logo must be.png';
    }
    else {
        // * save the new logo under folder "img"
        // move_uploaded_file($tmp_name, 'img/uploads/' . $finalName);
        if(move_uploaded_file($_FILES['logo']['tmp_name'], 'img/' . $finalName)) {
        $newLogoSaved = true;

        // * store $finalName in a session var
        $_SESSION['finalName'] = $finalName;

        // $newLogo = '<img src="./img/uploads/'.$finalName.'" alt="logo" id="logo">';
        // echo $newLogo;
        }
    }
}

// * capture the form input from upload-logo.php
$logo = $_FILES['logo'];


    // * connect db
    include('include/db.php');

    // * set up query
    $sql = "INSERT INTO examLogos (logo) VALUES (:logo)";
    $cmd = $db->prepare($sql);
    $cmd->bindParam(':logo', $finalName, PDO::PARAM_STR, 100);
    $cmd->execute();

    // * disconnect db
    $db = null;

    // * message on screen
    echo '<p> New Logo Saved </p>';


?>
