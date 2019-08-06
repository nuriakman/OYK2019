<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ajax ile ilce doldurma</title>
  </head>
  <body>

  <h1>Ajax İle İlçeleri Doldurma</h1>

  <select name="SEHIR" id="SEHIR" onchange="IlceleriDoldur()">
    <option value="">*** SEÇİNİZ ***</option>
    <option value="ANKARA">ANKARA</option>
    <option value="İSTANBUL">İSTANBUL</option>
  </select>

  <select name="ILCE" id="ILCE">
  </select>

<script type="text/javascript">
    function IlceleriDoldur() {
      $("#ILCE").load("ajax.ilceleri.doldur.php",     // Çağrılacak sayfa
                      "sehir=" + $("#SEHIR").val() );  // Çağrılırken kullanılacak değer 
    } // IlceleriDoldur()
</script>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  </body>
</html>
