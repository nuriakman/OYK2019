<?php
  include("db.php");
?>

<h1>Kayıt Liste</h1>

<table border=1 cellpadding=5 cellspacing=0>
  <tr>
    <td>KayıtNo</td>
    <td>ADI</td>
    <td>SOYADI</td>
    <td>ŞEHİR</td>
    <td>Göster</td>
    <td>Güncelle</td>
    <td>Sil</td>
  </tr>
  <?php
  $SQL   = "SELECT id, adi, soyadi, sehir FROM db_deneme_rehber ORDER BY adi, soyadi, sehir ";
  $rows  = mysqli_query($db, $SQL);

  while($row = mysqli_fetch_assoc($rows)) { // Kayıt adedince döner
      echo sprintf("
        <tr>
          <td>%s</td>
          <td>%s</td>
          <td>%s</td>
          <td>%s</td>

          <td><a href='show.php?id=%s'>Göster</a></td>
          <td><a href='update.php?id=%s'>Güncelle</a></td>
          <td><a href='delete.php?id=%s'>Sil</a></td>

        </tr>",
        $row["id"], $row["adi"], $row["soyadi"], $row["sehir"],
        $row["id"], $row["id"], $row["id"]       );
  }

  ?>
</table>
