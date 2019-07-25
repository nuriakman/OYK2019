<?php
include("db.php");

if (isset( $_POST["adi"] )) {  // Form POST edilmiş...

  // Önce EKLEME için SQL hazırlayalım...
  $SQL = sprintf("
      INSERT INTO
        db_deneme_rehber
      SET
        adi    = '%s',
        soyadi = '%s',
        sehir  = '%s'  ",
  $_POST["adi"], $_POST["soyadi"], $_POST["sehir"]);

  // SQL komutunu MySQL veritabanı üzerinde çalıştır!
  $rows  = mysqli_query($db, $SQL);

  echo "<h4>Kayıt eklendi...</h4>";

}  // Form POST edilmiş...

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
