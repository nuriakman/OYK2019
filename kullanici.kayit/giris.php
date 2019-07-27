<?php
require("db.php");
include("sabitler.php");

$PAROLA = md5( $_POST["parola"] . $TUZ );

$SQL = "SELECT
          *
        FROM
          kullanicilar
        WHERE
          adisoyadi = '{$_POST["adisoyadi"]}' AND
          parola = '$PAROLA'
        ";
  $rows  = mysqli_query($db, $SQL);

  $KayitSayisi = mysqli_num_rows($rows);
  if ($KayitSayisi == 1) {
    echo "Giriş Başarılı !";
  } else {
    echo "Kullanıcı adı veya parola hatalı!";
  }



?>
<h1>Kullanıcı Girişi</h1>
<form method="post">
  Adı Soyadı:<input required type="text" name="adisoyadi" value="<?php echo $_POST["adisoyadi"];?>">
  <br /><br />
  Parola:<input required type="password" name="parola" value="<?php echo $_POST["parola"];?>">
  <br /><br />
  <input type="submit" name="" value="Giriş Yap">
</form>
