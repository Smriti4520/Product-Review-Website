<?php
  echo"<h2>ENTER THE PRODUCT REVIEW</h2>";
  include_once('prdDBConnect.php');
   $qry1="select * from tbUsr order by usrNam";
   $qry2="select * from tbPrd order by prdNam";
    $result1=mysqli_query($conn,$qry1);
    $result2=mysqli_query($conn,$qry2);
    echo"<form method='post' action='Review.php'>";
    echo"SELECT NAME: ";
    echo"<SELECT name='usrCod'>";
     while($row1=mysqli_fetch_array($result1))
      {
        echo"<option  value=".$row1["usrCod"].">".$row1["usrNam"]."</option>";
      }
    echo"</SELECT>";

    echo"<br><br>";

    echo"SELECT PRODUCT: ";
    echo"<SELECT name='prdCod' >";
     while($row2=mysqli_fetch_array($result2))
      {
        echo"<option value=".$row2["prdCod"].">".$row2["prdNam"]."</option>";
      }
    echo"</SELECT>";

    echo"<br><br>";
    
    echo"RATE THE PRODUCT:";echo"<br>";
    echo"1<input type='radio' value=1 name='rate'><br>";
    echo"2<input type='radio' value=2 name='rate'><br>";
    echo"3<input type='radio' value=3 name='rate'><br>";
    echo"4<input type='radio' value=4 name='rate'><br>";
    echo"5<input type='radio' value=5 name='rate'>";

   echo"<br><br>";
   
    echo"REVIEW: <br>";
    echo"<textarea rows=10 cols=50 name='rev'></textarea>";

    echo"<br><br>";
    echo"<input type=submit>";

   echo"</form>";

   mysqli_commit($conn);
   mysqli_close($conn);
   
?>