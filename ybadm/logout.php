<?php
session_start();
echo "<script>window.alert('Çıkış Yaptınız.Anasayfaya Yönlendiriliyorsunuz.');window.location.href='index.php';</script>";
session_destroy();

?>
