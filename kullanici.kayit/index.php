<?php
include("db.php");

if (isset( $_POST["adisoyadi"] )) {  // Form POST edilmiş...

  if($_POST["tur"] == "" ) {
    // TÜR seçilmemiş :(
    $HataMesaji[] = "Tür seçimi yapılmamış !";
  }

  if($_POST["parola"] == "" ) {
    // Parola yazılmamış
    $HataMesaji[] = "Parola girilmemiş !";
  }

  if($_POST["adisoyadi"] == "" ) {
    // İsim yazılmamış
    $HataMesaji[] = "Ad soyad girilmemiş !";
  }

  if( !isset($HataMesaji) ) {
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
  }

}  // Form POST edilmiş...

?>


<h1>Üye Ekleme</h1>

<h3 style="color:red">
  <?php

    for ($i=0; $i < count($HataMesaji); $i++) {
      echo $HataMesaji[$i] . "<br />";
    }

  ?>
</h3>

<form method="post">
  Adı Soyadı:<input required type="text" name="adisoyadi" value="<?php echo $_POST["adisoyadi"];?>">
  <br /><br />
  Parola:<input required type="password" name="parola" value="<?php echo $_POST["parola"];?>">
  <br /><br />
  Tür:<select required name='tur'>
    <option value="">SEÇİNİZ</option>
    <option value="M" <?php if($_POST["tur"]== "M") echo "selected"; ?>>Müşteri</option>
    <option value="E" <?php if($_POST["tur"]== "E") echo "selected"; ?>>Esnaf</option>
  </select>
  <br /><br />
  <input type="submit" name="" value="Üye Ekle (insert)">
</form>
