
<?php
session_start();
                        include('dbcon.php');
                        $qry="select * from product";
                        $run=mysqli_query($con,$qry);
                        $count=0;
                        if(mysqli_num_rows($run)<1){
                              echo "<tr><td colspan='5' style='border:1px solid black;padding:10px;text-align:center;'>No Product Found<td></tr>";        
                        }
                        else{
                            while($data=mysqli_fetch_assoc($run)){
                                 
                                 $count++;  
                            }
                        }
                  ?>
<html>
<head>
   <title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dashstyle.css">
	<!-- Fav icon -->
	<link rel="shortcut icon" type="text/css" href="bgImage/logoH.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
   .Hinput
   {
     border:1px solid red;
   }
   .example_b
   {
     background-color:white;
   }
   .example_b:hover
   {
     background-color:peru;
   }
   .one
   {
    background-color:red;
    color:white;
   }
   .one:hover
   {
      background-color:black;
      color:white;
   }
   .time
   {
    height:70px;
    width:882px;
    background:red;
    margin-left:162px;
    color:white;
    text-align:center;
    border:1px solid white;
    margin-top:40px;
    font-size:45px;
    font-family:bold;
   }
   .time:hover
   {
    background-color:black;
    color:white;
   }
  </style>
</head>
<body class="bgimg" onload="Time()">
     <div class="main">
     
            <!-----------Navigation Bar------------->
           
            <nav class="navbar navbar-danger " style="background-color:yellowgreen">
             <form class="form-inline" style="margin-top:15px;" method="post" action="dbSearch.php">
               <a class="navbar-brand" href="admindash.php"><img src="bgimage/1234.png" style="height:55px;width:170px"> </a>
               <input class="form-control mr-sm-2 Hinput" style="width:500px;" type="search" placeholder="Search product,customer,order" aria-label="Search" name="pname">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style="background-color:red;border-radius:8px;" name="submit">Search</button> 
                <a class="btn btn-outline-light" style="margin-left:680px;background-color:red;border-radius:8px;" href="Logout.php" role="button" >Logout</a>
                </form>
              </nav>
              <div>
              </div>
              
       <div class="row rowsty" style="margin-top:0px; height:560px;">
            <div class="col-sm-3 sm4style" style="background-color:red;height:1100px;">
        <center>    <img src="bgImage/ali.jpg" alt="" style="width:200px;height:200px;border-radius:50%;margin-top:20px"><h3 style="color:white;padding-top:10px;">My Profile</h3></center>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:65px;width:250px; padding-left:45px;margin-top:20px;" href="admindash.php" target="_blank" rel="nofollow noopener">Admin DashBoard</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:65px;width:250px; padding-left:45px;" href="profile.php" target="_blank" rel="nofollow noopener">Change Profile</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:65px;width:250px; padding-left:75px;" href="Allcutomer.php" target="_blank" rel="nofollow noopener">All Customer</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:65px;width:250px; padding-left:90px;" href="allord.php" target="_blank" rel="nofollow noopener">All Order</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:65px;width:250px; padding-left:60px;" href="aboutOrder.php" target="_blank" rel="nofollow noopener">About Order</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:65px;width:250px; padding-left:60px;" href="searchOrder.php" target="_blank" rel="nofollow noopener">Search Order</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:65px;width:250px; padding-left:60px;" href="Allproducts.php" target="_blank" rel="nofollow noopener">All Products</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:65px;width:250px; padding-left:45px;" href="Insertion.php" target="_blank" rel="nofollow noopener">Add New Product</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:65px;width:250px; padding-left:50px;" href="Update.php" target="_blank" rel="nofollow noopener">Update Product</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:65px;width:250px; padding-left:60px;" href="delete.php" target="_blank" rel="nofollow noopener">Delete Product</a>
              </div>
              
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:65px;width:250px; padding-left:60px;" href="progress.php" target="_blank" rel="nofollow noopener">All Progress</a>
              </div>     
      
            </div>

            <div class="col-sm-8 sm4style">
                 <div class="row">
                 <?php
                  $db = mysqli_connect('localhost', 'root', '', 'alibaba');
                   $pro=0;
                   $productQuery="SELECT * From product";
                   $result1=mysqli_query($db,$productQuery);
                   while($data1=mysqli_fetch_assoc($result1))
                   {
      
                     $pro=$data1['pro_quantity']+$pro;   
                   }
                 ?>    

              &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <div class="col-sm-3 one" style="border:1px solid white;margin-top:38px;margin-right:38px;margin-left:70px;">
                        <h3 style="margin-top:40px;padding-top:10px;padding-left:30px;">Total Products</h3>
                        <p style="margin-left:65px;padding-bottom:10px;font-weight:bold;font-size:25px;padding-top:30px;padding-left:40px;"><?php echo $pro;?></p>
               </div>
               <div class="col-sm-3 one" style="margin-top:38px;border:1px solid white;">
              <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
               <?php
               $db = mysqli_connect('localhost', 'root', '', 'alibaba');
               $query="SELECT * From ordertable";
               $result=mysqli_query($db,$query);
               $check=mysqli_num_rows($result);
               $quan=0;
               $pro=0;
               $productQuery="SELECT * From product";
               $result1=mysqli_query($db,$productQuery);
               while($data1=mysqli_fetch_assoc($result1))
               {
  
                 $pro=$data1['pro_quantity']+$pro;   
               }
               while($data=mysqli_fetch_assoc($result))
               {     
                    $quan=$data['order_quan']+$quan;   
               }
               $Remaining=$pro-$quan;
               ?>
                  <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
               <h3 style="margin-top:40px;padding-top:10px;padding-left:30px;">Sold Products</h3>
              <p style="margin-left:65px;padding-bottom:10px;font-weight:bold;font-size:25px;padding-top:30px;padding-left:40px;"><?php echo $quan ?></p>
               </div>
                 
               <div class="col-sm-3 one" style="margin-top:38px;margin-left:38px;border:1px solid white;">
                        <h3 style="margin-top:40px;padding-top:10px;padding-left:50px;">Remaining Products</h3>
                        <p style="margin-left:90px;padding-bottom:10px;padding-left:10px;font-weight:bold;font-size:25px;"><?php echo $Remaining ?></p>
               </div>
               <div class="time">
       <div id="txt">
          
       </div>
     </div>
                   <!---------------slider--------------------->
                   <div id="carouselExampleIndicators" class="carousel slide" data-interval="3000" data-ride="carousel" style="margin-left:60px;margin-top:30px;margin-bottom:30px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bgImage/slider456.webp" class="d-block" alt="..." width="1080px" height="735px">
    </div>
    <div class="carousel-item">
      <img src="bgImage/img50.webp" class="d-block" alt="..." width="1080px" height="735px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                 </div>
            </div>
       </div>
       <script>
function Time()
{
  var today=new Date();
  var h=today.getHours();
  var m=today.getMinutes();
  var s=today.getSeconds();
  h=checkTime(h);
  m=checkTime(m);
  s=checkTime(s);
  document.getElementById('txt').innerHTML=h+":"+m+":"+s;
  setTimeout(function(){Time()});
}

function checkTime(num)
{
  if(num<10)
  {
    num="0"+num;
  }
  return num;
} 
</script>
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>