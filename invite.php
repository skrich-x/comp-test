<?php


  if (isset($_POST["request"])){
      $email = $_POST["email"];
    }

  else{
    //Check if email is entered and valid
    if (!$_POST["email"] || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $errorEmail = "Please Enter a Valid Email Address";
    }

  // If Email is present and Valid Send Request
  if (!$errorEmail) {
  	if (mail ($to, $subject, $body, $from)) {
  		$result='<div class="alert alert-success">Thank you interest in Mattr. We will be in touch soon!</div>';
  	}
  else{
      $dbhost = 'localhost:8888';
      $dbuser = 'root';
      $dbpass = 'rootpassword';
      $conn = mysql_connect($dbhost, $dbuser, $dbpass);
      if(! $conn )
      {
        die('Could not connect: ' . mysql_error());
      }
      // $sql = 'INSERT INTO request '.
      //        '(email) '.
      //        'VALUES ( "email");
      //
      // mysql_select_db('test_db');
      // $retval = mysql_query( $sql, $conn );
      // if(! $retval )
      // {
      //   die('Could not enter data: ' . mysql_error());
      // }
      echo "Entered data successfully\n";
      mysql_close($conn);
    }
?>
