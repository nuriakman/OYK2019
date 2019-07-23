<?php

$Dosyalar = glob("M*.md");

foreach ($Dosyalar as $key => $value) {
  $DosyaAdi = file($value);
  echo "<a href='111.php?dosya=$value'>$DosyaAdi[0]</a> <br />";
}

if( isset($_GET["dosya"] ) ) {
  $DosyaIcerigi = file_get_contents($_GET["dosya"]);
  echo nl2br($DosyaIcerigi);
}

?>
