<?php
   $conn = mysqli_connect('localhost','root','');
   if(!$conn)
     {
        die('Could not Connect: '.mysqli_connect_error());
     }
  //echo'Connected Successfully <br><br>';
  mysqli_select_db($conn,'dbPrd');
?>