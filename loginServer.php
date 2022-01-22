<?php
session_start();
// initializing variables
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'alibaba');
// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['uname']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM customer WHERE cus_Name='$username' AND password='$password'";
  $result = mysqli_query($db, $user_check_query);
  $row= mysqli_fetch_assoc($result);
$id=$row['cus_id'];
  if(mysqli_num_rows($result)>0)
  {
    header('location: orderNow.php');
    $_SESSION['cus_id']=$id;
  }
  else
  {
    header('location: message5.html');
  }
}