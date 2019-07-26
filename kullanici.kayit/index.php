<?php
include("db.php");

if (isset( $_POST["adisoyadi"] )) {  // Form POST edilmiş...

  // Önce EKLEME için SQL hazırlayalım...
  $SQL = sprintf("
      INSERT INTO
        kullanicilar
      SET
        adisoyadi = '%s',
        parola    = '%s',
        tur       = '%s'  ",
  $_POST["adisoyadi"], $_POST["parola"], $_POST["tur"]);

  // SQL komutunu MySQL veritabanı üzerinde çalıştır!
  $rows  = mysqli_query($db, $SQL);

  echo "<h4>Kayıt eklendi...</h4>";

}  // Form POST edilmiş...

?>


<h1>Üye Ekleme</h1>

<form method="post">
  Adı Soyadı:<input type="text" name="adisoyadi">
  <br /><br />
  Parola:<input type="password" name="parola">
  <br /><br />
  Tür:<select name='tur'>
    <option value="">SEÇİNİZ</option>
    <option value="M">Müşteri</option>
    <option value="E">Esnaf</option>
  </select>
  <br /><br />
  <input type="submit" name="" value="Üye Ekle (insert)">
</form>
