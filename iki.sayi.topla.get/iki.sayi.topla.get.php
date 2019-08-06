<!DOCTYPE html>
<html>
<body>

<h2>2 SAYI TOPLAMA - GET Örneği</h2>

<?php if( !isset( $_GET["sayi1"] ) ) { ?>

    <form method="get">

      1. Sayıyı Giriniz:
      <input type="text" name="sayi1" value="" placeholder="Sayı giriniz">
      <br><br />
      2. Sayıyı Giriniz:
      <input type="text" name="sayi2" value="" placeholder="Sayı giriniz">
      <br><br>

      <input type="submit" value="Gönder">

    </form>

    <p>iki sayıyı da girip GÖNDER düğmesine basarak toplam aldırabilirsiniz.</p>

<?php } // Formun Gösterilmesi ?>


<?php
  if( isset( $_GET["sayi1"]  ) ) {
    $A = $_GET["sayi1"];
    $B = $_GET["sayi2"];
    $Sonuc = $A + $B;
    echo "<h1>SONUÇ: $A + $B = $Sonuc</h1>";
    echo "<a href='?'>Yeni İşlem...</a>";
  }
?>


</body>
</html>
