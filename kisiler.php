<h1>.TXT Dosyasından Okunan Kişiler</h1>
<?php

$dosya = "kisiler.txt";

$arrSatirlar = file($dosya);

print_r($arrSatirlar);



?>
