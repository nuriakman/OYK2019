<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Text Dosyaya Yazma</title>
  </head>
  <body>

    <h1>Text Dosyaya Yazma</h1>

    <form method="post">
      <p>
        Ad Giriniz <input type="text" name="ad" />
      </p>
      <p>
        Soyad Giriniz <input type="text" name="soyad">
      </p>
      <p>
        <input type="submit" value="EKLE">
      </p>
    </form>

<?php

  if( isset( $_POST["ad"]) ) {
    $isim = $_POST["ad"] . ";" . $_POST["soyad"] . "\n";

    $mevcut_isimler = file_get_contents("isimler.txt");
    $dosya_son_durum = $mevcut_isimler . $isim;
    file_put_contents("isimler.txt", $dosya_son_durum);
  }

?>


  </body>
</html>
