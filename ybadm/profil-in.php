<?php
  if($_POST){

     $ID=$_POST["ID"];
     $pass=$_POST["pass"];
     $pass1=$_POST["pass1"];

     if($pass==$pass1){

        echo $pass;
     }else{

       echo "<script>window.alert('Lütfen Aynı Şifre Giriniz (Şifreler Uyuşmuyor)');history.back();</script>";
     }

  }

?>
