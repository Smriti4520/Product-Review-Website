<?php
  include_once('prdDBConnect.php');
  $usrCod=$_POST["usrCod"];
  $prdCod=$_POST["prdCod"];
  $prdRat=$_POST["rate"];
  $prdRev=$_POST["rev"];

   $qry="INSERT INTO tbPrdRev VALUES ('$usrCod','$prdCod',$prdRat,'$prdRev')";
   if(mysqli_query($conn,$qry)==true)
     {
       echo"<script> alert('Thank you for reviewing');</script>";
       header("refresh:0;url=ProductReview.html");
     }
    else
     {
        echo"<script> alert('Error');</script>";
       header("refresh:0;url=ProductReview.html");
     }

   mysqli_commit($conn);
   mysqli_close($conn);
?>