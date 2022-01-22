<?php
session_start();
// initializing variables
$username = "";
$email    = "";
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'alibaba');
// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['ComPassword']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $phone = mysqli_real_escape_string($db, $_POST['Phone']);
  $country = mysqli_real_escape_string($db, $_POST['country']);
  $gender = mysqli_real_escape_string($db, $_POST['Gender']);
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM customer WHERE cus_Name='$username'";
  $user_check_query1 = "SELECT * FROM customer WHERE cus_mail='$email'";
  $result = mysqli_query($db, $user_check_query);
  $result1 = mysqli_query($db, $user_check_query1);
  $user = mysqli_fetch_assoc($result);
  $user1 = mysqli_fetch_assoc($result1);
  $check=0;
  $Name=$user['cus_Name'];
  $mail=$user1['cus_mail'];
    if ($user||$user1) 
    { // if user exists
      if(($Name==$username)&&($mail==$email))
      {
        header('location: message8.html');
        $check=1;
      }
      if($check==0)
      {
        if ($user['cus_Name']==$username) {
            header('location: message1.html');
            $check=1;
          }
         if ($user1['cus_mail']==$email) 
           {
            header('location: message2.html');
            $check=1;
           } 
      }
     
    }
    if($check==0)
    {
      $query = "INSERT INTO customer(cus_Name,cus_mail, password,cus_Address,cus_phoneNo,cus_country,gender) 
  	 VALUES('$username','$email','$password_1','$address','$phone',' $country','$gender')";
  	mysqli_query($db, $query);
  	$_SESSION['cus_Name'] = $username;
  	header('location: message4.html');

     }

  // Finally, register user if there are no errors in the form
  	
 
}