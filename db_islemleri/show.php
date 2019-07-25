<?php
  include("db.php");

  // Adres satırından gelen ID bilgisini al.
  $ID    = $_GET["id"];

  // Veri tabanından o ID'ye karşılık gelen satırı çek
  $SQL   = "SELECT id, adi, soyadi, sehir FROM db_deneme_rehber WHERE id=$ID";

  // Sorgumuzu MySQL'e Gönder
  $rows  = mysqli_query($db, $SQL);

  // Gelen TEK satırlık cevabı row adlı değişkene yerleştir
  $row    = mysqli_fetch_assoc($rows);
  $id     = $row["id"];
  $adi    = $row["adi"];
  $soyadi = $row["soyadi"];
  $sehir  = $row["sehir"];

  echo "
    <h1>$adi $soyadi</h1>

    Adı: $adi<br />
    Soyadı: $soyadi<br />
    Şehir: $sehir<br />
  ";

?>
