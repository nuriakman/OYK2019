<?php
  @session_start();

  if( $_SESSION["GirisBasarili"] == 1 ) {
    // Kullanıcı login olmuş (giriş yapmış)

    if( $_SESSION["YetkiSeviyesi"] == 1 ) {
      // Yetki Seviyesi 1 olan kişinin göreceği ekran
      header("location: menu1.php");
      die();
    }
    if( $_SESSION["YetkiSeviyesi"] == 2 ) {
      // Yetki Seviyesi 2 olan kişinin göreceği ekran
      header("location: menu2.php");
      die();
    }

  } else {
    // Kullanıcı login olmamış (giriş yapmamış)
    header("location: login.php"); // login.php sayfasına git
    die(); // Stop
  }

// BURAYA ASLA GELEMEYİZ!!!

?>
