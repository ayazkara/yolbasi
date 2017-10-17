<?php
  $islem=$_GET["islem"];
  include("db.php");
  if($islem=="insert"){
     $name=$_POST["name"];
     $category=$_POST["category"];
     $content=$_POST["content"];
    mysql_query("INSERT INTO products (title,content,images,category) VALUES ('$name','$content','resimyok.jpg','$category')");
    echo '<script>alert("Ürün Başarıyla Eklenmiştir");window.location.href = "products.php";</script>';
  }
  elseif ($islem=="Del"){
    $ID=$_GET["ID"];
    mysql_query("Delete From products where ID='".$ID."'");
    header("Location:products.php");
  }
  elseif($islem=="img"){
    $ds          = DIRECTORY_SEPARATOR;  //1

    $storeFolder = '../images/shop/';   //2
    if (!empty($_FILES)) {

    	$tempFile = $_FILES['file']['tmp_name'];          //3

    	$targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4

    	$targetFile =  $targetPath. $_FILES['file']['name'];  //5
    	$img_name=$_FILES['file']['name'];
      $ID=$_GET["ID"];

      move_uploaded_file($tempFile,$targetFile); //6
        mysql_query("UPDATE products SET images='' where ID='$ID'");
        mysql_query("INSERT INTO products_img (products_ID,images) VALUES ('$ID','$img_name')");
  }

}
else if($islem=="update"){
   $name=$_POST["name"];
   $category=$_POST["category"];
   $content=$_POST["content"];
   $ID=$_POST["ID"];
   mysql_query("UPDATE products SET title='$name', category='$category', content='$content' where ID='$ID' ");
  echo '<script>alert("Ürün Başarıyla Güncellenmiştir");window.location.href = "products.php";</script>';
}
elseif ($islem=="imgdel"){
  $ID=$_GET["ID"];
  $products_ID=$_GET["pID"];
  mysql_query("Delete From products_img where ID='$ID'");
  $img=mysql_query("Select * from products_img where products_ID='$products_ID'");
  $img_row=mysql_fetch_array($img);
  if($img_row[0]!="1"){
    mysql_query("UPDATE products SET images='resimyok.jpg' where ID='$products_ID' ");
  }
  header("Location:products-detail.php?ID=$products_ID");
}
?>
