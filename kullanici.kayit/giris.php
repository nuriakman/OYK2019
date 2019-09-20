<?php
require("db.php");
include("sabitler.php");

if(isset($_POST["adisoyadi"])){ // dosyayı çalıştırdığımızda çıkan error message post edilme şartına bağlandı.
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

} // end of if

?>
<h1>Kullanıcı Girişi</h1>
<form method="post">
  Adı Soyadı:<input required type="text" name="adisoyadi" value="<?php echo $_POST["adisoyadi"];?>">
  <br /><br />
  Parola:<input required type="password" name="parola" value="<?php echo $_POST["parola"];?>">
  <br /><br />
  <input type="submit" name="" value="Giriş Yap">
</form>
