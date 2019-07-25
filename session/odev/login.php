<?php
  @session_start();
  if( $_SESSION["GirisBasarili"] == 1 ) {
    // Kullanızı zaten login olmuş! Bu sayfada işi yok...
    header("location: index.php"); // index sayfasına yönlenelim.
    die();
  }

  if( isset( $_POST["user"] )) { // Giriş formu doldurulmuş ve gönderilmiş...
    if( $_POST["user"] == "ahmet" and $_POST["pass"] == "123") {
      // AHMET giriş yapmıştır
      $_SESSION["GirisBasarili"] = 1;
      $_SESSION["YetkiSeviyesi"] = 1;
      $_SESSION["KullaniciAdi"]  = "Ahmet Yıldız";
      // index sayfasına program akışını yönelendirelim
      header("location: index.php");
      die();
    }
    if( $_POST["user"] == "mehmet" and $_POST["pass"] == "789") {
      // MEHMET giriş yapmıştır
      $_SESSION["GirisBasarili"] = 1;
      $_SESSION["YetkiSeviyesi"] = 2;
      $_SESSION["KullaniciAdi"]  = "Mehmet Yılmaz";
      // index sayfasına program akışını yönelendirelim
      header("location: index.php");
      die();
    }
    // Buraya geliyorsa, giriş bilgileri yanlıştır
    $HataMesaji = "Kullanıcı adı veya parolası hatalı";
  }
?>
<h1>Giriş Sayfası</h1>

<form method="post">
  Kullanıcı Adınız: <input type="text" name="user" value="">
  <br /><br />
  Parolanız: <input type="password" name="pass" value="">
  <br /><br />
  <input type="submit" value="GİRİŞ YAP">
</form>

<?php
  if(isset($HataMesaji)) {
    echo "<h2 style='color:red'>$HataMesaji</h2>";
  }
?>
