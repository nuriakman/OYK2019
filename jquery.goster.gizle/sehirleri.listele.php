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


###### ŞEHİRLERİ LİSTELEYELİM

  $SQL   = "SELECT DISTINCT ilkodu, iladi FROM ililce ORDER BY iladi ";
  $rows  = mysqli_query($db, $SQL);
  
  //Verileri ekrana yazalım
  while($row = mysqli_fetch_assoc($rows)) {
  	echo "<a href='#' onclick='IlceleriGoster({$row['ilkodu']})'>{$row['iladi']}</a> ";
  }
?>
