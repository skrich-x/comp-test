<?php


  if (isset($_POST["request"])){
      $email = $_POST["email"];
    }

    //Check if email is entered and valid
    if (!$_POST["email"] || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $errorEmail = "Please Enter a Valid Email Address";
    }

  // If Email is present and Valid Send Request
  if (!$errorEmail) {
  	if (mail ($to, $subject, $body, $from)) {
  		$result='<div class="alert alert-success">Thank you interest in Mattr. We will be in touch soon!</div>';
  	}

?>
