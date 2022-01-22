
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

            <table align="center" style="margin-top:10px;width:80%;">
            <tr>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Order Id</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Order Type</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Order Description</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Customer Id</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Customer Name</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Order Date</th>
            </tr>
            <?php
             $db = mysqli_connect('localhost', 'root', '', 'alibaba');
             $query="SELECT order_id,order_type,order_desc,cus_id,cus_Name,orderDate from ordertable INNER JOIN customer ON ordertable.cus_fk=customer.cus_id";
             $result=mysqli_query($db,$query);
             $check=mysqli_num_rows($result);
             $total=0;
             $quan=0;
             if($check<=0)
             {
                 echo "<tr><td colspan='6' style='border:1px solid black;padding:10px;text-align:center;background-color:skyblue;'>No order found</td></td>";
             }
             else
             {
                while($data=mysqli_fetch_assoc($result))
                {
                
                    ?>
                <tr>
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['order_id'] ?></td>
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['order_type'] ?></td>
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['order_desc'] ?></td>
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['cus_id'] ?></td>
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['cus_Name'] ?></td>
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['orderDate'] ?></td>
                </tr>
              
                <?php
             }
            ?>
             
            <?php
            }

            ?>        
            </table>
</body>
</html>