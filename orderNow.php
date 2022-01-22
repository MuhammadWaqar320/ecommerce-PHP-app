
<?php
session_start();

$id= $_SESSION['cus_id'];
$Date=date('yy-m-d');
$db = mysqli_connect('localhost', 'root', '', 'alibaba');   
      if (isset($_POST['submit'])) {
        // receive all input values from the form
        $Type = mysqli_real_escape_string($db, $_POST['Type']);
        $Desc = mysqli_real_escape_string($db, $_POST['Desc']);
        $Quantity = mysqli_real_escape_string($db, $_POST['Quan']);
        $user_check_query = "SELECT * FROM product WHERE pro_name='$Desc'";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        $q=$user['pro_quantity'];
        if($Quantity<=$q)
         {
            $query = "INSERT INTO ordertable(order_type,order_desc,order_quan,cus_fk,orderDate) 
             VALUES('$Type','$Desc','$Quantity','$id','$Date')";
           mysqli_query($db, $query);
           $bill=($user['pro_price'])*( $Quantity );
           $_SESSION['bill']=$bill;
           header('location: message6.php');
        }
         else
         {
            header('location: message7.html');
         }
        }
      

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Registration form</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="RegisNo.css">
  <link rel="stylesheet" type="text/css" href="cssExternal.csss">
  <!-- Fav icon -->
  <link rel="shortcut icon" type="text/css" href="icon/WAQAR.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color:pink;">
<a href="cusLogout.php" style="text-decoration: none;margin-left:1450px;font-weight: bold;font-size: 22px;">Logout</a>
  <center>

    <div class="RegisDiv" style="height:500px;margin-top:50px;border:1px solid white;background:orange;">
      <div class="regis">
        <h1 class="Heading">Order Now</h1>
      </div>
      <form class="forms" onsubmit="return validation()" id="login"  method="post">
        <h6>Order Type:</h6>
        <p> <input type="text" name="Type" size="58px" placeholder="Enter type of order" class="input Hinput" onclick="ONClICK(this)"
            onmouseleave="onMouseLeave(this)" required> <span id="message1" style="background:yellow;border-radius:5px;"></span> <br></p>
        <h6>Order Desc:</h6>
        <p> <input type="text" id="desc" name="Desc" size="58px" placeholder="Enter name of product" class="input Hinput" onclick="ONClICK(this)"
            onmouseleave="onMouseLeave(this)" required><span id="message2" style="background:yellow;border-radius:5px;"></span><br>
        </p>
        <h6>Prodcut Quantity:</h6>
        <p> <input type="number" id="num" name="Quan"  placeholder="Product quantity " class="input Hinput" onclick="ONClICK(this)"
            onmouseleave="onMouseLeave(this)" required><span id="message3" style="background:yellow;border-radius:5px;"></span><br>
        </p>
   <p style="margin-top:50px;">     <center> <input type="submit" name="submit" value="Submit" class="input" id="RBtn">&nbsp &nbsp<input
            type="reset" name="reset" value="Clear" class="input" id="RBtn"></center> </p><br>

      </form>
    </div>>
  </center>
  <!-------------------------------------------------Javascript implementation--------------------------------------->
  <script type="text/javascript">
    function ONClICK(ele) {
      ele.style.background = "yellow";
      ele.style.color = "black";
    }
    function onMouseLeave(ele) {
      ele.style.background = "palegreen";
    }

    function validation() {
      var letter = /^[A-Za-z ]+$/;
      var Num = /^\[0-9]+$/;
      var type = document.forms["login"]["type"].value;
      var desc = document.forms["login"]["Desc"].value;
      var m=0;
     
      if ((type.length >= 30) || (type.length <= 4)) {
        if ((type.length) >= 30) {
          document.getElementById('message1').innerHTML=" **Sorry Order Type is to large";
          m=1;
        } else {
          document.getElementById('message1').innerHTML=" **Sorry Order Type is very samll";
          m=1;
        }
      }
      if (!(type.match(letter))) {
    
        document.getElementById('message1').innerHTML=" **Order Type must have alphabet only";
        m=1;
      }

      if ((desc.length >= 30) || (desc.length <= 4)) {
        if ((desc.length) >= 30) {
          document.getElementById('message1').innerHTML=" **Sorry Order description is to large";
          m=1;
        } else {
          document.getElementById('message1').innerHTML=" **Sorry Order description is very samll";
          m=1;
        }
      }
      if (!(desc.match(letter))) {
    
        document.getElementById('message1').innerHTML=" **Order description must have alphabet only";
        m=1;
      }
      if(true)
      {
        if(m==1)
        {
          return false;
        }
        else{
          return true;
        }
      }
    }
  </script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>