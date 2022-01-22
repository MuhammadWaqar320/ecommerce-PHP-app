<?php
  //  include_once("dbcon.php");
  //  session_start();
  //  if($_SESSION['uid'])
  //  {

  //  }
  //  else{
  //      header('location: ../Login.php');
  //  }
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
  .pro
  {
    border:1px solid black;
    width:260px;
    padding-left:10px;
    border-radius:5px;
    height:35px;
  }
  .send
  {
    width:120px;
    border:1px solid black;
    border-radius:5px;
    height:35px;
    margin-left:70px;
    background-color:black;
    color:white;
  }
  .send:hover
  {
    background-color:yellow;
    color:black;
  }
  </style>
</head>

<body class="Regis" style="background:pink">


            <!-----------Navigation Bar------------->
            <nav class="navbar navbar-danger " style="background-color:yellowgreen">
             <form class="form-inline" style="margin-top:0px;">
               <a class="navbar-brand" href="admindash.php"><img src="bgimage/1234.png" style="height:70px;width:180px"> </a>
               <input class="form-control mr-sm-2 Hinput" style="width:500px;" type="search" placeholder="Search" aria-label="Search" >
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style="background-color:red;border-radius:8px;">Search</button> 
                <a class="btn btn-outline-light" style="margin-left:680px;background-color:red;border-radius:8px;" href="Logout.php" role="button" >Logout</a>
                </form>
              </nav>

             <!--------------Form------------>
     <center>      <div style="background-color:coral;width:300px;height:460px;margin-top:30px;border-radius:8px;border:1px solid white">
              <div>
                <h2 style="background-color:black;height:68px;border-radius:8px;color:white;padding-top:15px;">Add Prodcut</h2>
              </div>
             <form method="post" action="Insertion.php" enctype="multipart/form-data">
                  <h4>Product Name</h4>
                  <input type="text" name="pname" placeholder="Enter Product Name" class="pro" required>
                  <h4>Product Price</h4>
                  <input type="text" name="pprice" placeholder="Enter Product Price" class="pro" required>
                  <h4>Product Category</h4>
                  <input type="text" name="pcategory" placeholder="Enter Product Category" class="pro" required>
                  <h4>Product quantity</h4>
                  <input type="number" name="quan" class="pro" required>
             
                  <br><br>
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
        $proname=$_POST['pname'];
        $proprice=$_POST['pprice'];
        $procategory=$_POST['pcategory'];
        $quan=$_POST['quan'];
        $DAS=$_POST['des'];
        $qry="INSERT INTO product(pro_name, pro_price, pro_category,pro_quantity) VALUES ('$proname','$proprice','$procategory','$quan')";
        $run=mysqli_query($con,$qry);
        if($run==true){
          header('location: message10.html');
        }
    }
?>