<?php

  if ($_POST){
       $about=$_POST["about"];


       include("db.php");

       mysql_query("UPDATE about SET about='$about' where ID='1' ");
       echo '<script>alert("Hakkımızda Güncellenmiştir");window.location.href = "about.php";</script>';
  }
?>
