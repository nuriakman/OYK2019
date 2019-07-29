<?php
  require("db.php");
?>

<?php
  // echo "<pre>";  print_r($_POST);  echo "</pre>";


  if( isset($_POST["id"]) ) { // Form gönderilmişse başlayalım

    ##########################
    ########################## TOPLU VERİ GÜNCELLEME
    ##########################

    // form elementinin adı [] ile bitiyorsa bu bir dizi değişkenidir
    //
    // TOPLU VERİ GÜNCELLEME ADIMLARI
    // foreach ile ID dizisi üzerinde dönülür.
    // Döngünün $KEY'i esas alınarak diğer dizilerden veriler alınır
    // SQL oluşturulur ve çalıştırılır

    // Form değişkenlerini bir dizi değişkenine atadık
    $arrID          = $_POST["id"];
    $arrYemekTuru   = $_POST["yemek_turu"];
    $arrYemekAdi    = $_POST["yemek_adi"];
    $arrYemekFiyati = $_POST["yemek_fiyati"];

    foreach ($arrID as $key => $value) {
      $ID     = $arrID[$key];
      $TURU   = $arrYemekTuru[$key];
      $ADI    = $arrYemekAdi[$key];
      $FIYATI = $arrYemekFiyati[$key];
      $SQL = sprintf("UPDATE yemek_menusu
              SET
                  yemek_turu   = '%s',
                  yemek_adi    = '%s',
                  yemek_fiyati = '%s'
              WHERE
                  id = '%s'     ",
              $TURU,
              $ADI,
              $FIYATI,
              $ID   );

      if($FIYATI <> "SİL") {
        // SQL Hazır, güncellemeyi yapalım
        $rows = mysqli_query($db, $SQL);
      }

      if($FIYATI == "SİL" or $FIYATI == "sil") {
        // Silinmesi istenmiş
        // SQL hazırlayalım
        $SQL = "DELETE FROM yemek_menusu WHERE id = '$ID' ";
        // ve kaydı silelim....
        $rows = mysqli_query($db, $SQL);
      }


    } //foreach

    // Buraya geldiğimizde, tüm kayıtlar güncellenmiştir.


    ##########################
    ########################## TOPLU VERİ EKLEME
    ##########################

    // form elementinin adı [] ile bitiyorsa bu bir dizi değişkenidir
    //
    // TOPLU VERİ EKLEME ADIMLARI
    // foreach ile yeni_ID dizisi üzerinde dönülür.
    // Döngünün $KEY'i esas alınarak diğer dizilerden veriler alınır
    // SQL oluşturulur ve çalıştırılır

    // Form değişkenlerini bir dizi değişkenine atadık
    $arrID          = $_POST["yeni_id"];
    $arrYemekTuru   = $_POST["yeni_yemek_turu"];
    $arrYemekAdi    = $_POST["yeni_yemek_adi"];
    $arrYemekFiyati = $_POST["yeni_yemek_fiyati"];

    foreach ($arrID as $key => $value) {
      $ID     = $arrID[$key];
      $TURU   = $arrYemekTuru[$key];
      $ADI    = $arrYemekAdi[$key];
      $FIYATI = $arrYemekFiyati[$key];
      $SQL = sprintf("INSERT INTO yemek_menusu
              SET
                  yemek_turu   = '%s',
                  yemek_adi    = '%s',
                  yemek_fiyati = '%s' ",
              $TURU,
              $ADI,
              $FIYATI  );

        // Eğer, yemek adı (yani $ADI değişkeni) DOLUYSA yeni kaydı ekleyelim...
        if( trim($ADI) <> "") { // trim: boşlukları temizler
          $rows = mysqli_query($db, $SQL);
        }

    } //foreach

    // Buraya geldiğimizde, tüm kayıtlar güncellenmiştir.


  } // Form gönderilmişse başlayalım

?>


<h1>Yemek Menüsü Güncelleme</h1>
<form method='POST' autocomplete="off">

<?php

$SQL   = "SELECT * FROM yemek_menusu ORDER BY yemek_turu, yemek_adi";
$rows  = mysqli_query($db, $SQL);

$TabloBasi = "
<table border=1 cellspacing=0 cellpadding=5>
<tr>
  <td>SıraNo</td>
  <td>Yemek Türü</td>
  <td>Yemek Adı</td>
  <td>Fiyatı</td>
</tr>
";
$TabloSonu = "</table>";

echo $TabloBasi;

$c = 0; // SıraNo yazdırabilmek için...

while($row = mysqli_fetch_assoc($rows)) {
    $c++; //Sıra numarasını arttır.

    extract($row); // İlişkilendirilmiş dizinin elemanları için değişken oluşturur
    // Bundan böyle, $row["yemek_adi"] yazman yerine $yemek_adi yazılabilecek

    echo sprintf("
          <tr>
            <td>%s<input type='hidden' name='id[]' value='%s' /></td>
            <td><input type='text' name='yemek_turu[]' value='%s' /></td>
            <td><input type='text' name='yemek_adi[]' value='%s' /></td>
            <td><input type='text' name='yemek_fiyati[]' value='%s' /></td>
          </tr>",
          $c,
          $id,
          $yemek_turu,
          $yemek_adi,
          $yemek_fiyati
        );

} // while sonu

// 5 Adet YENİ satırı ekler
for($i=1; $i<=5; $i++) {
  echo "
      <tr>
        <td>YENİ<input type='hidden' name='yeni_id[]'></td>
        <td><input type='text' name='yeni_yemek_turu[]' placeholder='Yemek türü giriniz'/></td>
        <td><input type='text' name='yeni_yemek_adi[]' placeholder='Yemek adı giriniz'/></td>
        <td><input type='text' name='yeni_yemek_fiyati[]' placeholder='Yemek fiyatı giriniz'/></td>
      </tr>";
}

echo $TabloSonu;


mysqli_close($db);

?>

  <input type='submit' value='Kaydet !'>
</form>

<p>NOT: Silmek için FİYATI alanı içine SİL yazınız.  </p>
