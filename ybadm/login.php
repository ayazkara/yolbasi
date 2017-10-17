<?php
  
  if ($_POST){

     $username=$_POST["username"];
     $pass=$_POST["pass"];

      if ($username=="" OR $pass==""){
        echo '<script>alert("Lütfen Gerekli Alanları Boş Bırakmayınız");window.location.href = "index.php";</script>';
      }else{
        include("db.php");
        $pass=md5($pass);
        $query=mysql_query("Select * from user where user='$username' and pass='$pass'");
        $row=mysql_fetch_array($query);

        if($row>0){

            session_start();
            $_SESSION["ID"]=$row["ID"];
            $_SESSION["login"]=true;
            header("Location:products.php");
        }else{
          echo '<script>alert("Lütfen Kullanıcı Adı ve Şifreyi Doğru Giriniz");window.location.href = "index.php";</script>';
        }
      }
  }//post end
?>
