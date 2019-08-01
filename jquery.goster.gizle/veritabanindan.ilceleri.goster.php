<?php

$servername = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "bilgiler";

// Veritabanı bağlantısının oluşturulması
$db = mysqli_connect($servername, $username, $password, $dbname);

// Varsa, bağlantı hatasının ekrana yazdırılarak programın sonlandırılması
if (!$db) { die("Hata oluştu: " . mysqli_connect_error()); }
//echo "Bağlantı tamam!";

// Oluşabilecek Türkçe karakter gösterimi sorunlarını giderelim...
mysqli_query($db, "set names 'utf8'");


###### İSTENİLEN ŞEHİRE AİT İLÇELERİ GETİRELİM
  $ILKODU = $_GET["ilkodu"];
  $SQL   = "SELECT ilceadi FROM ililce WHERE ilkodu = '$ILKODU' ORDER BY ilceadi ";
  $rows  = mysqli_query($db, $SQL);
  
  //Verileri ekrana yazalım
  echo "<ol>";
  while($row = mysqli_fetch_assoc($rows)) {
  	echo "<li>{$row['ilceadi']}</li>";
  }
  echo "</ol>";
?>
