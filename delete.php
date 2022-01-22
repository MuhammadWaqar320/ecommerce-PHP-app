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
</head>
<body style="background:pink">

            <!-----------Navigation Bar------------->
            <nav class="navbar navbar-danger " style="background-color:yellowgreen">
             <form class="form-inline" style="margin-top:0px;" method="post" action="delete.php">
               <a class="navbar-brand" href="admindash.php"><img src="bgimage/1234.png" style="height:70px;width:170px"> </a>
               <input class="form-control mr-sm-2 Hinput" style="width:500px;" type="search" placeholder="Search" aria-label="Search" name="pname">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style="background-color:red;border-radius:8px;" name="submit">Search</button> 
                <a class="btn btn-outline-light" style="margin-left:680px;background-color:red;border-radius:8px;" href="Logout.php" role="button" >Logout</a>
                </form>
              </nav>
            <table align="center" style="margin-top:10px;width:80%;">
            <tr>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Product Id</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Product Name</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Product Price</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Product Category</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Product Quantity</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Delete</th>
            </tr>
                  <?php
                      if(isset($_POST['submit'])){
                        include('dbcon.php');
                        $NAME=$_POST['pname'];
                        $qry="select * from product where pro_name LIKE '%$NAME%'";
                        $run=mysqli_query($con,$qry);
                        if(mysqli_num_rows($run)<1){
                            echo "<tr><td colspan='6' style='border:1px solid black;padding:10px;text-align:center;background-color:skyblue;'>No Product Found<td></tr>";
                        }
                        else{
                            while($data=mysqli_fetch_assoc($run)){
                              ?>
                              <tr>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['pro_id']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['pro_name']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['pro_price']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['pro_category']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['pro_quantity']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><a href="deletedata.php?pid=<?php echo $data['pro_id']?>">Delete</a></td>
                              </tr>
                              <?php
                            }
                        }

                      }

                  ?>
            </table>
</body>
</html>