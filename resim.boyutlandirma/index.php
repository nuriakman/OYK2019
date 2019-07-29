<?php
  @unlink("yeni.jpg"); // Varsa, bu resmi sil
  $RESIM = imagecreatefromjpeg("kedi.jpg"); // kedi.jpg dosyasını alalım
  $YENIRESIM = imagescale($RESIM, 300, 250); // 300x250 ölçüsüne boyutlandıralım
  imagejpeg($YENIRESIM, "yeni.jpg"); // Oluşan dosyayı yeni.jpg adı ile kaydedelim
  // imagedestroy($YENIRESIM); // Bu değikeni bellekten silelim. Biz bellekten silmezsek PHP zaten siler. FAKAT, silinmesi doğru olur.
  // imagedestroy($RESIM);     // Bu değikeni bellekten silelim. Biz bellekten silmezsek PHP zaten siler. FAKAT, silinmesi doğru olur.
?>

<h1>Üretilen Yeni Resim</h1>
<img src="yeni.jpg">

<h1>Orjinal Resim</h1>
<img src="kedi.jpg">


<p>
  KAYNAK İÇİN: <a href='https://github.com/nuriakman/PHP-Egitimi/blob/master/konular/php.ornek14.md'>Örnek 14</a>
</p>
