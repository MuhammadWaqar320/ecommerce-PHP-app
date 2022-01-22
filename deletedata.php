<?php
   
   include('dbcon.php');
   $pid=$_GET['pid'];
   $qry="DELETE FROM `product` WHERE  `pro_id`='$pid'";
   $run=mysqli_query($con,$qry);
   if($run==true){
       ?>
       <script>
           <?php

            header('location: message15.html');
            ?>
        //    window.open('delete.php?pid=<?php 
        // echo $pid;
        ?>','_self');
       </script>
<?php
   }
?>