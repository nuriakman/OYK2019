<?php
  @session_start();
  if( $_SESSION["GirisBasarili"] <> 1 ) {
    require("yetkili.degilsiniz.php");
    die();
  }
  if( $_SESSION["YetkiSeviyesi"] <> 2 ) {
    require("yetkili.degilsiniz.php");
    die();
  }
?>
<p>Hoşgeldin <?php echo $_SESSION["KullaniciAdi"];?>!</p>
<h1>BURASI MENU-2 EKRANIDIR</h1>
<h1>BURASI MENU-2 EKRANIDIR</h1>

<a href="oturumu.kapat.php">Oturumu kapat</a>
