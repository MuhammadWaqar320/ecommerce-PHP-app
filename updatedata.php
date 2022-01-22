<?php
   
   include('dbcon.php');
   $proname=$_POST['pname'];
   $proprice=$_POST['pprice'];
   $pid=$_POST['pid'];
   $procategory=$_POST['pcategory'];
   $qry="UPDATE `product` SET `pro_name` = '$proname', `pro_price` = '$proprice', `pro_category` = '$procategory' WHERE  `pro_id` = '$pid'";
   $run=mysqli_query($con,$qry)
   ;
   if($run==true){
       ?>
       <script>
            </script>
            <?php

            header('location: message16.html');
            ?>
             <script>
        //    window.open('updateform.php?pid=<?php 
        // //    echo $pid;
        //    ?>','_self');
       </script>
<?php
   }
?>