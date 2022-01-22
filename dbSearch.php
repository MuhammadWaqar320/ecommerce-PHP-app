
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
            <table align="center" style="margin-top:10px;width:80%;">
           
                 <?php 
                       if(isset($_POST['submit'])){
                        include('dbcon.php');
                        $NAME=$_POST['pname'];
                        $o=1;
                        $c=1;
                        $p=1;
                        if(true)
                        {
                          $qry="select * from product where pro_name='$NAME'";
                          $run=mysqli_query($con,$qry);
                          if(mysqli_num_rows($run)>=1){
                            ?>
                            <tr>
                            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Product Id</th>
                            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Product Name</th>
                            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Product Price</th>
                            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Product Category</th>
                            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;">Product Quantity</th>
                            </tr>  
                            <?php
                            while($data=mysqli_fetch_assoc($run)){
                                ?>
                              
                                <tr>
                                   <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['pro_id']; ?></td>
                                   <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['pro_name']; ?></td>
                                   <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['pro_price']; ?></td>
                                   <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['pro_category']; ?></td>
                                   <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['pro_quantity']; ?></td>
                                </tr>
                                <?php
                                $o=0;
                                $c=0;
                                $p=0;
                              }
                          }
                        }
                         if($c==1)
                         {
                          $qry="select * from customer where cus_Name='$NAME'";
                          $run=mysqli_query($con,$qry);
                          if(mysqli_num_rows($run)>=1){
                            ?>
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
                                 $o=0;
                                 $c=0;
                              }
                          }
                            
                        }
                        if($o==1)
                         {
                          $qry="select * from ordertable where order_type='$NAME'";
                          $run=mysqli_query($con,$qry);
                          if(mysqli_num_rows($run)>=1){
                            ?>
                            <tr>
                            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Order Id</th>
                            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Order Type</th>
                            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Order Description</th>
                            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Order Quantity</th>
                            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Customer FK</th>
                            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Order Date</th>
                            </tr>
                            <tr>
                            <?php
                              while($data=mysqli_fetch_assoc($run)){
                                ?>
            
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['order_id'] ?></td>
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['order_type'] ?></td>
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['order_desc'] ?></td>
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['order_quan'] ?></td>
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['cus_fk'] ?></td>
                    <td style="border:1px solid black;background-color:skyblue;padding:10px;text-align:center;"><?php echo $data['orderDate'] ?></td>
                </tr>
                                <?php
                                 $o=0;
                              }
                          }
                        }
                        if($c==1&&$o==1&&$p==1)
                         {
                          echo "<tr><td colspan='6' style='border:1px solid black;padding:10px;text-align:center;background-color:skyblue;'>No Data Found<td></tr>";
                        }







                       

                       }

                  ?>
            </table>
</body>
</html>