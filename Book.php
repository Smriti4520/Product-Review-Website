<?php
 include_once('prdDBConnect.php');

  $qry="Select * from tbPrd Where prdCat='Book'";
  $result=mysqli_query($conn,$qry);

  while($row=mysqli_fetch_array($result))
   {
     $img=$row['prdPth'];
     $nam=$row['prdNam'];
     $cod=$row['prdCod'];
      $sum=0;
      $avg=0;

      $qry1="Select * from tbPrdRev where prdCod='$cod'";
      $result1=mysqli_query($conn,$qry1);
   
      $num=mysqli_affected_rows($conn);

     echo"<h2>$nam</h2>";   
     echo"<br>";
       
     echo"<img src='$img' height=380 width=300>";
     echo"<br>"; 

     echo"<table border=1>";
      
     while($row1=mysqli_fetch_array($result1))
       { 
         $rat=$row1["prdRat"];
         $sum=$sum+$rat;
         $avg=$sum/$num;
        echo"<tr>";
          echo"<td>";
           echo $row1["prdRev"]; 
           echo"</td>";
          echo"<td>";
           echo $row1["prdRat"]; 
           echo"</td>";
        echo"</tr>";
       }
      echo"</table>";
       echo"<h3>Average Rating : $avg</h3>";
    
   }
    
  
  mysqli_free_result($result);
   mysqli_close($conn);
?>