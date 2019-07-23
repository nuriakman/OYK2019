<h1>TXT Dosyasından Okunan Kişiler</h1>

<table border="1" cellpadding="5" cellspacing="0">
  <tr>
    <td> ADI </td>
    <td> SOYADI </td>
    <td> ŞEHİR </td>
  </tr>

<?php
$dosya = "kisiler.txt";
$arrSatirlar = file($dosya);

foreach ($arrSatirlar as $key => $value) {
  $Kisi    = $value;
  $arrKisi = explode(";", $Kisi);
  echo
    "<tr>
      <td>{$arrKisi[0]}</td>
      <td>{$arrKisi[1]}</td>
      <td>{$arrKisi[2]}</td>
    </tr>";
}
?>

</table>
