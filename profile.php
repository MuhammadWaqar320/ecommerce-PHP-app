
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Registration.css">
  <link rel="stylesheet" type="text/css" href="cssExternal.csss">
	<link rel="stylesheet" type="text/css" href="dashstyle.css">
 	<!-- Fav icon -->
   <link rel="shortcut icon" type="text/css" href="bgImage/logoH.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .pro
  {
    border:1px solid black;
    width:280px;
    padding-left:10px;
    border-radius:5px;
    height:35px;
  }
  .send
  {
    width:190px;
    border:1px solid black;
    border-radius:5px;
    height:4opx;
    margin-left:70px;
    background-color:black;
    color:white;
    font-size:22px;
    margin-left:10px;
  }
  .send:hover
  {
    background-color:yellow;
    color:black;
  }
  </style>
</head>

<body class="Regis" style="background-color:pink;">


            <!-----------Navigation Bar------------->
            <nav class="navbar navbar-danger " style="background-color:yellowgreen">
             <form class="form-inline" style="top-bottom:15px;">
               <a class="navbar-brand" href="admindash.php"><img src="bgimage/1234.png" style="height:70px;width:180px"> </a>
               <input class="form-control mr-sm-2 Hinput" style="width:500px;" type="search" placeholder="Search" aria-label="Search" >
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style="background-color:red;border-radius:8px;">Search</button> 
                <a class="btn btn-outline-light" style="margin-left:680px;background-color:red;border-radius:8px;" href="Logout.php" role="button" >Logout</a>
                </form>
              </nav>

             <!--------------Form------------>
     <center>      <div style="background-color:coral;width:320px;height:490px;margin-top:30px;border-radius:8px;border:1px solid white">
              <div>
                  <img src="bgImage/ali.jpg" alt="" style="width:140px;height:140px;border-radius:50%;margin-top:20px"> 
              </div>
             <form method="post" action="profile.php" enctype="multipart/form-data" nam>
                  
                  <h4>Name</h4>
                  <input type="text" name="name" placeholder="Enter Name" class="pro" required>
                  <h4>Password</h4>
                  <input type="password" name="password" placeholder="Enter password" class="pro" required>
                  <h4>Email</h4>
                  <input type="email" name="mail" placeholder="Enter email" class="pro" required>

                  <br><br><br>
                <input type="submit" name="submit" value="submit" class="send">
             </form>     
             </div></center>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        include('dbcon.php');
        $name=$_POST['name'];
        $pass=$_POST['password'];
        $email=$_POST['mail'];
        $qry="update admintable set admin_name='$name',admin_password='$pass',email='$email' where admin_id=2";
        $run=mysqli_query($con,$qry);
        if($run==true){
          header('location: message11.html');
        }
    }
?>