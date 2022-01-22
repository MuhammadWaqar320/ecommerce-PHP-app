<html>

<head>


</head>

<body>
    
    <?php
    session_start();
    $bill=$_SESSION['bill'];
    ?>
    <a href="RegisNew.php" style="text-decoration: none;color: black;border: 1px solid black;padding: 3px;border-radius: 8px;margin-top: 15px;background-color: black;color: white;">Go back</a>
    <a href="cusLogout.php" style="text-decoration: none;margin-left:1450px;font-weight: bold;font-size: 22px;">Logout</a>
    <center>
        <div
            style="width: 500px;height:auto;background-color: rgb(236, 163, 136);margin-top: 280px;padding: 20px;border:1px solid black;">
           <h2>Your order is submitted you will receive your product soon.</h2>
           <?php echo "<div style='border:1px solid black;width:220px;height:70px;padding-top:50px;background-color:yellow;font-weight:bold;font-size:25px'>Total bill = $bill$</div>" ?>
       </div></center>
    </body>
</html>