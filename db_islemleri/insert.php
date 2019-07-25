<?php
$servername = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "bilgiler";

// Veritabanı bağlantısının oluşturulması
$db = mysqli_connect($servername, $username, $password, $dbname);
// Varsa, bağlantı hatasının ekrana yazdırılarak programın sonlandırılması
if (!$db) { die("Hata oluştu: " . mysqli_connect_error()); }
//echo "Bağlantı tamam!";


if (isset( $_POST["adi"] )) {
  // Form POST edilmiş...

  // Önce EKLEME için SQL hazırlayalım...
  $SQL = sprintf("
      INSERT INTO
        db_deneme_rehber
      SET
        adi    = '%s',
        soyadi = '%s',
        sehir  = '%s'  ",
  $_POST["adi"], $_POST["soyadi"], $_POST["sehir"]);

  $rows  = mysqli_query($db, $SQL);

  echo "<h4>Kayıt eklendi...</h4>";
}

?>


<h1>Kayıt Ekleme</h1>

<form method="post">
  Adı:<input type="text" name="adi">
  <br /><br />
  Soyadı:<input type="text" name="soyadi">
  <br /><br />
  Şehir:<input type="text" name="sehir">
  <br /><br />
  <input type="submit" name="" value="Kayıt Ekle (insert)">
</form>
