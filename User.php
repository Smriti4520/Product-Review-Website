<?php
   include_once('prdDBConnect.php');
   $code=$_POST["userCod"];
   $name=$_POST["userNam"];
   $loc=$_POST["userLoc"];
   $age=$_POST["userAge"];
   $usrCod="u".$code;
  
   $qry="INSERT INTO tbUsr VALUES ('$usrCod','$name','$loc',$age)";
    if(mysqli_query($conn,$qry)==true)
     {
       echo"<script> alert('You are successfully logged in');</script>";
       header("refresh:0;url=ProductReview.html");
     }
    else
     {
        echo"<script> alert('Error! Try Again');</script>";
       header("refresh:0;url=ProductReview.html");
     }

   mysqli_commit($conn);
   mysqli_close($conn);
?>