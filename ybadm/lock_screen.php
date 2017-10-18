<?php 
if ($_POST){


			
			include('db.php'); 
			session_start();
			$ID=$_SESSION["ID"];
			$user=mysql_query("Select * from user where ID='".$ID."'");
			$user_row=mysql_fetch_array($user);
			$username=$user_row["user"];
			$pass=$_POST["pwd"];
			
			
				$query=mysql_query("Select * from user where user='".$username."' AND pass='".$pass."' AND durum='aktif' ");
				$row=mysql_fetch_array($query);
				
				if($row>0){
				
					$ID=$row["ID"];
					session_start();
					$_SESSION["ID"]=$ID;
					$_SESSION["login"]=true;
					header("Location:products.php");
				}else{
					echo '<script>window.alert("Þifre Yanlýþ");</script>';
					header("Location:lock_screenn.php");
				}
			
}

?>