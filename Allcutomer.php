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

            <table align="center" style="margin-top:10px;width:80%;">
            <tr>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Customer Id</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Customer Name</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Customer Address</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Customer Mail</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Customer PhoneNumber</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Customer Country</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Customer Entry</th>
            </tr>
                  <?php
                        include('dbcon.php');
                        $qry="select * from customer";
                        $run=mysqli_query($con,$qry);
                        if(mysqli_num_rows($run)<1){
                            echo "<tr><td colspan='6' style='border:1px solid black;padding:10px;text-align:center;background-color:skyblue;'>No Product Found<td></tr>";
                        }
                        else{
                            while($data=mysqli_fetch_assoc($run)){
                              ?>
                              <tr>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['cus_id']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['cus_Name']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['cus_Address']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['cus_mail']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['cus_phoneNo']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['cus_country']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['gender']; ?></td>
                              </tr>
                              <?php
                            }
                        }

        

                  ?>
            </table>
</body>
</html>