<h1>.TXT Dosyasından Okunan Kişiler</h1>
<?php

$dosya = "kisiler.txt";

$arrSatirlar = file($dosya);

print_r($arrSatirlar);

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
