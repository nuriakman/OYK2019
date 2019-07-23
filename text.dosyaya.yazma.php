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


<!-- ####### kayıtlı isimlerin listelenmesi ######## -->
<!-- ####### kayıtlı isimlerin listelenmesi ######## -->
<!-- ####### kayıtlı isimlerin listelenmesi ######## -->


<table border="1" cellpadding="5" cellspacing="0">
  <tr>
    <td> ADI </td>
    <td> SOYADI </td>
  </tr>

<?php
$arrSatirlar = file("isimler.txt");
sort($arrSatirlar);

foreach ($arrSatirlar as $key => $value) {
  $Kisi    = $value;
  list($AD, $SOYAD) = explode(";", $Kisi);
  echo
    "<tr>
      <td>$AD</td>
      <td>$SOYAD</td>
    </tr>";
}
?>

</table>



















  </body>
</html>
