
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
            <table align="center" style="margin-top:10px;width:70%;">
            <tr>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Order Id</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Order Type</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Order Description</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Order Quantity</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Customer FK</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Order Date</th>
            </tr>
            <?php
             $db = mysqli_connect('localhost', 'root', '', 'alibaba');
             $query="SELECT * From ordertable";
             $result=mysqli_query($db,$query);
             $check=mysqli_num_rows($result);
             $total=0;
             $quan=0;
            //  for maximum no of order
             $max=0;
 $MaxQuery="SELECT cus_fk,COUNT(DISTINCT order_id) FROM ordertable GROUP BY cus_fk ORDER BY 2 desc";
 $Execute=mysqli_query($db, $MaxQuery);
while($Array=mysqli_fetch_assoc($Execute))
{
  if($max==0)
  {
    $max=1;
    $maxOrder=$Array['cus_fk'];
  }
}
$getCustomer = "SELECT * FROM customer where cus_id='$maxOrder'";
$new3=mysqli_query($db,$getCustomer);
$Array3=mysqli_fetch_assoc($new3);
$maxCus=$Array3['cus_Name'];
// end for maximum no of order

 //  for minimum no of order
 $min=0;
 $MinQuery="SELECT cus_fk,COUNT(DISTINCT order_id) FROM ordertable GROUP BY cus_fk ORDER BY 2 asc";
 $Execute1=mysqli_query($db, $MinQuery);
while($Array11=mysqli_fetch_assoc($Execute1))
{
  if($min==0)
  {
    $min=1;
    $minOrder=$Array11['cus_fk'];
  }
}
$getCustomer1 = "SELECT * FROM customer where cus_id='$minOrder'";
$new4=mysqli_query($db,$getCustomer1);
$Array4=mysqli_fetch_assoc($new4);
$minCus=$Array4['cus_Name'];
// end for minimum no of order
             if($check<=0)
             {
                 echo "<tr><td colspan='6' style='border:1px solid black;padding:10px;text-align:center;background-color:skyblue;'>No order found</td></td>";
             }
             else
             {
                while($data=mysqli_fetch_assoc($result))
                {
                    $total++;
                  $quan=$data['order_quan']+$quan;
                    ?>
                <tr>
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['order_id'] ?></td>
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['order_type'] ?></td>
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['order_desc'] ?></td>
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['order_quan'] ?></td>
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['cus_fk'] ?></td>
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['orderDate'] ?></td>
                </tr>
              
                <?php
             }
             
            ?>
             <tr><td style="font-weight:bold;padding:10px;font-size:25px;">Total order :<?php echo $total ?></td></tr>
             <tr><td style="font-weight:bold;padding:10px;font-size:25px">Total product sold :<?php echo $quan ?></td></tr>
             <tr><td colspan="6" style="font-weight:bold;padding:10px;font-size:25px">Maximum No of Order is done by: <?php echo $maxCus ?></td></tr>
             <tr><td colspan="6" style="font-weight:bold;padding:10px;font-size:25px">Minimum No of Order is done by : <?php echo $minCus ?></td></tr>
            <?php
            }
           
            ?>        
            </table>
</body>
</html>