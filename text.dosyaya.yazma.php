<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Text Dosyaya Yazma</title>
  </head>
  <body>

    <h1>Text Dosyaya Yazma</h1>

    <form method="post">
      <p>
        Ad Giriniz <input type="text" name="ad" />//isim değişkenleri alınır
      </p>
      <p>
        Soyad Giriniz <input type="text" name="soyad">//soyisim değişkenleri alınır
      </p>
      <p>
        <input type="submit" value="EKLE">//değişken eklemek için butonumuz
      </p>
    </form>

<?php

  if( isset( $_POST["ad"]) ) {//link satırında ad değişkeni varsa
    $isim = $_POST["ad"] . ";" . $_POST["soyad"] . "\n";/*isime isim
    için girilen değişkeni ata*/

    $mevcut_isimler = file_get_contents("isimler.txt");/*
    bilgilerin alınacağı dosyanın tanımlanması*/
    $dosya_son_durum = $mevcut_isimler . $isim;/*
    eklenen veriler dosya son durum değişkenşne atandı*/
    file_put_contents("isimler.txt", $dosya_son_durum);/*
    alınan veriler isimler.txt belgesine yazıldı
    */
  }

?>


<!-- ####### kayıtlı isimlerin listelenmesi ######## -->
<!-- ####### kayıtlı isimlerin listelenmesi ######## -->
<!-- ####### kayıtlı isimlerin listelenmesi ######## -->

/* aşdığımız verileri düzgün yazdırmak için aşağıdaki gibi
tablo tercşh edilmiştir*/
<table border="1" cellpadding="5" cellspacing="0">//tablomuzun kenar kalınlığı 1px belirlenmiştir
  <tr>
    <td> ADI </td>//"AD" değişkeni adı altında bir sütün oluşturlmuştur
    <td> SOYADI </td>//"SOYAD" değişkeni adı altında bir süyün oluşturulmuştur
  </tr>

<?php
$arrSatirlar = file("isimler.txt");//isimler.txt dosyamızdaki her satır bir diziye aktarılmıştır
sort($arrSatirlar);

foreach ($arrSatirlar as $key => $value) {//verilerin türlerini ayırt etmek için kullanılmıştır
  $Kisi    = $value;
  list($AD, $SOYAD) = explode(";", $Kisi);//veriler ";" ayrılmıştır
  echo//ekrana yazdırılmıştır ve bunun için bir tablo oluşturulmuştur
    "<table>
      <tr>
          <td>$AD</td> 
          <td>$SOYAD</td>
      </tr>
    </table> ";
}
?>

</table>



















  </body>
</html>
