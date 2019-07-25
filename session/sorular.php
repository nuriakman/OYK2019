<?php
  @session_start();
  if($_SESSION["GirisBasarili"] <> 1) die("Yetkili değilsiniz...");
?>

<h1>Bitirme Sınavı Soruları</h1>

<ul>
  <li><a href="php.sorulari.php">PHP Sınıfı Soruları</a></li>
  <li><a href="css.sorulari.php">CSS Sınıfı Soruları</a></li>
  <li><a href="js.sorulari.php">JavaScript Sınıfı Soruları</a></li>
</ul>
