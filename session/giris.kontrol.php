<?php
  @session_start();
  if($_SESSION["GirisBasarili"] <> 1) die("Yetkili değilsiniz... <a href='index.php'>Giriş yap</a>");
?>
<a href="sorular.php">Geri dön</a> -
<a href="oturumu.kapat.php">Oturumu Kapat</a>
