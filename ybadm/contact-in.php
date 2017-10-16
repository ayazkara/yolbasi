<?php

  if ($_POST){
       $phone=$_POST["phone"];
       $mail=$_POST["mail"];
       $adres=$_POST["adres"];
       $maps=$_POST["maps"];

       include("db.php");

       mysql_query("UPDATE contact SET phone='$phone', mail='$mail', adres='$adres', maps='$maps' where ID='1' ");
       echo '<script>window.alert("İletişim Bilgileri Güncellenmiştir");history.back();</script>';
  }
?>
