<?php
$db = mysqli_connect('localhost', 'root', '', 'alibaba');
$cus = "SELECT * FROM customer";
$pro = "SELECT * FROM product";
$ord = "SELECT * FROM ordertable";
$customer = mysqli_query($db, $cus);
$product= mysqli_query($db, $pro);
$Order= mysqli_query($db, $ord);
$c=0;
$price=0;
while($userC = mysqli_fetch_assoc($customer))
{
 $c++;
}
$o=0;
while($userO=mysqli_fetch_assoc($Order))
{
    $o++;
       $desc=$userO['order_desc'];
    $new = "SELECT * FROM product where pro_name='$desc'";
   $new1=mysqli_query($db, $new);
  $totalAm=mysqli_fetch_assoc($new1);
  $price=$price+$totalAm['pro_price'];
}
 $p=0;
while($userP = mysqli_fetch_assoc($product))
 {
     $p=$p+$userP['pro_quantity'];
      
 }

?>
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
   .Hinput
   {
     border:1px solid red;
   }
  </style>
</head>
<body style="background-color:pink">

            <!-----------Navigation Bar------------->
            <nav class="navbar navbar-danger " style="background-color:yellowgreen">
             <form class="form-inline" style="margin-top:0px;">
               <a class="navbar-brand" href="admindash.php"><img src="bgimage/1234.png" style="height:70px;width:180px"> </a>
               <input class="form-control mr-sm-2 Hinput" style="width:500px;" type="search" placeholder="Search" aria-label="Search" >
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style="background-color:red;border-radius:8px;">Search</button> 
                <a class="btn btn-outline-light" style="margin-left:680px;background-color:red;border-radius:8px;" href="Logout.php" role="button" >Logout</a>
                </form>
              </nav>
              <center> <h1 style="margin-top:70px;font-size:60px;font-family:initial;font-weight:bold">Progress</h1> </center>
 <div class="row" style=";margin-left:130px;margin-right:130px;">
      <div class="col-sm-3" style="background-color:yellow;height:250px;border:3px solid black;">
       <h1 style="padding-top:125px;padding-left:5px;">Total  Customers </h1>
       <?php
       echo "<h1 style='text-align:center'>$c</h1>"; 
       ?>
      </div>
      <div class="col-sm-3" style="background-color:skyblue;height:250px;border-right:3px solid black;border-bottom:3px solid black;border-top:3px solid black;">
       <h1 style="padding-top:125px;padding-left:40px;">Total Orders </h1>
       <?php
     echo "<h1 style='text-align:center'>$o</h1>";
       ?>
      </div>
      <div class="col-sm-3" style="background-color:orange;height:250px;border-right:3px solid black;border-bottom:3px solid black;border-top:3px solid black;">
       <h1 style="padding-top:125px;padding-left:20px;">Total Products </h1>
       <?php
        echo "<h1 style='text-align:center'>$p</h1>";
       ?>
      </div>
      <div class="col-sm-3" style="background-color:yellowgreen;height:250px;border-right:3px solid black;border-bottom:3px solid black;border-top:3px solid black;">
       <h1 style="padding-top:125px;padding-left:20px;">Product Types </h1>
       <?php
       $cat=5;
        echo "<h1 style='text-align:center'>$cat</h1>";
       ?>
      </div>
       <!--//////////////////////////////////////  -->
      <div class="col-sm-6" style="background-color:whitesmoke;height:250px;border-bottom:3px solid black;border-left:3px solid black;border-right:3px solid black;">
       <h1 style="padding-top:60px;padding-left:200px;">Total Amount </h1>
       <?php
        echo "<h1 style='text-align:center'>$price$</h1>";
       ?>
      </div>

      <div class="col-sm-6" style="background-color:pink;height:250px;border-right:3px solid black;border-bottom:3px solid black;">
       <h1 style="padding-top:60px;padding-left:265px;">Profit<?php
        $profit=($price*5)/100;
       
        echo "<h1 style='text-align:center'>$profit$</h1>";
       ?></h1>
       
      </div>
       <!--//////////////////////////////////////  -->
 </div>     
</body>
</html>