<?php


  if (isset($_POST["request"])){
      $email = $_POST["email"];
    }

    //Check if email is entered and valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }

?>
