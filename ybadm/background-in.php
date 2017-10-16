<?php

	 	  $islem=$_GET["islem"];
include("db.php");
			if ($islem=="images"){
$ds          = DIRECTORY_SEPARATOR;  //1

$storeFolder = '../images/slider/rev/main/';   //2

if (!empty($_FILES)) {

	$tempFile = $_FILES['file']['tmp_name'];          //3

	$targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4

	$targetFile =  $targetPath. $_FILES['file']['name'];  //5
	$img_name=$_FILES['file']['name'];

	 mysql_query("INSERT INTO background (images,title) VALUES ('$img_name','')");
    move_uploaded_file($tempFile,$targetFile); //6
}
}else if($islem=="title"){

 $title=$_POST["title"];
 $ID=$_POST["ID"];
 mysql_query("UPDATE background SET title='$title' where ID='$ID' ");
  echo '<script>alert("Arka Plan Başlık Güncellenmiştir");window.location.href = "background.php";</script>';

}
else if($islem=="Del"){
	$ID=$_GET["ID"];
	$del=mysql_query("Select * from background where ID='$ID'");
	$del_row=mysql_fetch_array($del);
	mysql_query("Delete From background where ID='".$ID."'");
	$img="../images/slider/rev/main/".$del_row["images"];
	unlink($img);
	header("Location:background.php");
}

?>
