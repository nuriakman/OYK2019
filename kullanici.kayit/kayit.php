<?php
include("db.php");
include("sabitler.php");

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

  if($_POST["eposta"] == "" ) {
    // ePosta yazılmamış
    $HataMesaji[] = "ePosta girilmemiş !";
  }

  if( $_POST["parola"] <> $_POST["parola1"]) {
    // Parola tekrarı aynı değil!
    $HataMesaji[] = "Parola tekrarı aynı değil !";
  }

  if( strlen($_POST["parola"]) < 8 ) {
    // Parola 8 karakterden küçük girilmiş
    $HataMesaji[] = "Parola en az 8 karakter olmalıdır !";
  }

  // Daha önce bu ePosta ile yapılmış kayıt var mı?
  $SQL = "SELECT * FROM kullanicilar WHERE eposta = '{$_POST["eposta"]}' ";
  $rows  = mysqli_query($db, $SQL);

  // Eğer, bu SQL için cevap alıyorsak, bu eposta daha önce kullanılmıştır
  $KayitSayisi = mysqli_num_rows($rows);
  if ($KayitSayisi <> 0) {
    // Bu ePosta daha önce kullanılmış
    $HataMesaji[] = "Bu ePosta daha önce kullanılmış! (Bu ePosta zaten kayıtlı!)";
  }

  if( !isset($HataMesaji) ) {
    // Önce EKLEME için SQL hazırlayalım...
    $SQL = sprintf("
        INSERT INTO
          kullanicilar
        SET
          eposta     = '%s',
          adisoyadi = '%s',
          parola    = '%s',
          tur       = '%s'  ",
    $_POST["eposta"], $_POST["adisoyadi"], md5($_POST["parola"] . $TUZ), $_POST["tur"]);

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

<form method="post" autocomplete="off">
  ePosta:<input required type="text" name="eposta" value="<?php echo $_POST["eposta"];?>">
  <br /><br />
  Adı Soyadı:<input required type="text" name="adisoyadi" value="<?php echo $_POST["adisoyadi"];?>">
  <br /><br />
  Parola:<input required type="password" name="parola" value="">
  <br /><br />
  Parola Tekrar:<input required type="password" name="parola1" value="">
  <br /><br />
  Tür:<select required name='tur'>
    <option value="">SEÇİNİZ</option>
    <option value="M" <?php if($_POST["tur"]== "M") echo "selected"; ?>>Müşteri</option>
    <option value="E" <?php if($_POST["tur"]== "E") echo "selected"; ?>>Esnaf</option>
  </select>
  <br /><br />
  <input type="submit" name="" value="Üye Ekle (insert)">
</form>
