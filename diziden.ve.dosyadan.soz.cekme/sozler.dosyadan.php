<h1>Sözler (Dosyadan)</h1>
<?php

$dosya = "sozler.txt";

echo "<h2>file_get_contents:</h2>";
$dosya_icerigi = file_get_contents($dosya);
echo $dosya_icerigi;

echo "<h2>file Komutu Çıktısı:</h2>";
$dosya_icerigi = file($dosya);
foreach ($dosya_icerigi as $key => $value) {
  echo "<b>$key</b> elemanının değeri: <b>$value</b> <br />";
}
