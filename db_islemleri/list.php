<?php
  include("db.php");
?>

<h1>Kayıt Liste</h1>

<table border=1 cellpadding=5 cellspacing=0>
  <tr>
    <td>Kayıt#</td>
    <td>ADI</td>
    <td>SOYADI</td>
    <td>ŞEHİR</td>
  </tr>
  <?php
  $SQL   = "SELECT id, adi, soyadi, sehir FROM db_deneme_rehber ORDER BY adi, soyadi, sehir ";
  $rows  = mysqli_query($db, $SQL);

  while($row = mysqli_fetch_assoc($rows)) {
      echo sprintf("
        <tr>
          <td>%s</td>
          <td>%s</td>
          <td>%s</td>
          <td>%s</td>
        </tr>", $row["id"], $row["adi"], $row["soyadi"], $row["sehir"] );
  }

  ?>
</table>
