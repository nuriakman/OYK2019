<h1>TXT Dosyasından Okunan Kişiler</h1>
<?php

$str = "Hasan;Çiçek;İstanbul";
$arrKisi = explode(";", $str);

echo "ADI: {$arrKisi[0]}<br />";
echo "SOYADI: {$arrKisi[1]}<br />";
echo "ŞEHİR: {$arrKisi[2]}<br />";

die("");

$dosya = "kisiler.txt";

$arrSatirlar = file($dosya);

print_r($arrSatirlar[1]);


?>
<table border="1" cellpadding="5" cellspacing="0">
  <tr>
    <td> ADI </td>
    <td> SOYADI </td>
    <td> ŞEHİR </td>
  </tr>
  <tr>
    <td>Nuri</td>
    <td>AKMAN</td>
    <td>ANKARA</td>
  </tr>
</table>
