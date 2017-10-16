<?php
    $islem=$_GET["islem"];
    include("db.php");
    if ($islem=="insert"){
      $category=$_POST["category"];
      mysql_query("INSERT INTO category (category) VALUES ('$category')");
        echo '<script>alert("Kategori Başarıyla Eklenmiştir");window.location.href = "category.php";</script>';
    }
    elseif ($islem=="Del"){
      $ID=$_GET["ID"];
    	mysql_query("Delete From category where ID='".$ID."'");
    	header("Location:category.php");
    }
?>
