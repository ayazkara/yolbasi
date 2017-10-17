<?php
  if(isset($_POST)){

  echo $ID=$_POST["ID"];
     $pass=$_POST["pass"];
     $pass1=$_POST["pass1"];

     if($pass==$pass1){
        include("db.php");
        $pass=md5($pass);
        mysql_query(" UPDATE user SET pass='$pass' where ID='".$ID."' ");
          echo '<script>alert("Şifre Başarıyla Değiştirilmiştir");window.location.href = "profil.php";</script>';
     }else{

       echo "<script>window.alert('Lütfen Aynı Şifre Giriniz (Şifreler Uyuşmuyor)');history.back();</script>";
     }

  }

?>
