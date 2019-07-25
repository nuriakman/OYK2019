<h1>Eğitmen Girişi</h1>
<form method="post">
  Kullanıcı Adınız: <input type="text" name="user" value="">
  <br /><br />
  Parolanız: <input type="password" name="pass" value="">
  <br /><br />
  <input type="submit" value="GİRİŞ YAP">
</form>

<?php
  if( isset( $_POST["user"] )) {
    if( $_POST["user"] == "linux" and $_POST["pass"] == "sudo" ) {
      include("sorular.php");
    } else {
      echo "Giriş hatalı!";
    }
  }
?>
