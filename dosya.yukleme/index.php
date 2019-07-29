<?php

// print_r($_FILES); // Gelen dosya hakkında bilgileri göster...

if(isset( $_FILES["DOSYA"] )) { // Formda, bir dosya seçilerek GÖNDER düğmesine basılmış

  //Yüklenen dosyanın kaydedileceği klasör adı
  $HEDEF_KLASOR_ADI = "uploads/";  // SONUNDA (slash) KARAKTERİ VAR!!!

  // Sunucumuza kaydedilecek dosyanın adının belirlenmesi
  $HEDEF_DOSYA_ADI = $HEDEF_KLASOR_ADI . basename($_FILES["DOSYA"]["name"]);
  // basename($_FILES["DOSYA"]["name"])   ==== Dosyanın ORJİNAL adı (kullanıcı bilgisayarındaki adı)

  // $HEDEF_DOSYA_ADI = $HEDEF_KLASOR_ADI . "123.jpg");
  // HEDEF KLASÖRE adı 123.jpg olacak şekilde kaydetmek için

  $Yuklenebilir = 1;

  // Yükleme için TÜR kontrolü yapalım
  if( $_FILES["DOSYA"]["type"] <> "image/png" ) {
    // Dosya, PNG türünde bir dosya DEĞİL
    echo "SADECE PNG DOSYA YÜKLENEBİLİR!!!!";
    $Yuklenebilir = 0;
  }

  // Yüklenen dosya için DOSYA BOYUTU kontrolü
  if( $_FILES["DOSYA"]["size"] > 150000 ) { // 150000 byte = Yaklaşık 150 Kb
    // Dosyanın Boyutu büyük!
    echo "DOSYA BOYUTU FAZLA! DAHA KÜÇÜK BİR DOSYA YÜKLEYİN";
    $Yuklenebilir = 0;
  }

  // Resim dosyasının genişlik ve yüksekliğini kontrol etme
  list($GENISLIK, $YUKSEKLIK) = getimagesize($_FILES["DOSYA"]["tmp_name"]);
  if( $GENISLIK > 1024 OR $YUKSEKLIK > 768 ) {
    // Resim dosyasınınn genişliği uygun değiL!
    echo "Resim dosyası max 1024px X 768px ölçüsünde olabilir !!";
    $Yuklenebilir = 0;
  }

  if($Yuklenebilir == 1) { // Yüklenmesi uygunsa

    // Yükleme işlemini bitirelim...
    if (move_uploaded_file($_FILES["DOSYA"]["tmp_name"], $HEDEF_DOSYA_ADI)) {
        echo basename( $_FILES["DOSYA"]["name"]) . "adlı dosya yüklendi";
    } else {
        echo "Dosya yüklenemedi.";
    }

  }


}
?>


<h1>Dosya Yükleme</h1>

<form method="post" enctype="multipart/form-data">
    Yüklenecek Dosyayı Seçiniz:
    <input type="file" name="DOSYA">
    <br /><br />
    <input type="submit" value="Dosyayı Yükle">
</form>





<!--

'txt' => 'text/plain',
'htm' => 'text/html',
'html' => 'text/html',
'php' => 'text/html',
'css' => 'text/css',
'js' => 'application/javascript',
'json' => 'application/json',
'xml' => 'application/xml',
'swf' => 'application/x-shockwave-flash',
'flv' => 'video/x-flv',

// images
'png' => 'image/png',
'jpe' => 'image/jpeg',
'jpeg' => 'image/jpeg',
'jpg' => 'image/jpeg',
'gif' => 'image/gif',
'bmp' => 'image/bmp',
'ico' => 'image/vnd.microsoft.icon',
'tiff' => 'image/tiff',
'tif' => 'image/tiff',
'svg' => 'image/svg+xml',
'svgz' => 'image/svg+xml',

// archives
'zip' => 'application/zip',
'rar' => 'application/x-rar-compressed',
'exe' => 'application/x-msdownload',
'msi' => 'application/x-msdownload',
'cab' => 'application/vnd.ms-cab-compressed',

// audio/video
'mp3' => 'audio/mpeg',
'qt' => 'video/quicktime',
'mov' => 'video/quicktime',

// adobe
'pdf' => 'application/pdf',
'psd' => 'image/vnd.adobe.photoshop',
'ai' => 'application/postscript',
'eps' => 'application/postscript',
'ps' => 'application/postscript',

// ms office
'doc' => 'application/msword',
'rtf' => 'application/rtf',
'xls' => 'application/vnd.ms-excel',
'ppt' => 'application/vnd.ms-powerpoint',
'docx' => 'application/msword',
'xlsx' => 'application/vnd.ms-excel',
'pptx' => 'application/vnd.ms-powerpoint',


// open office
'odt' => 'application/vnd.oasis.opendocument.text',
'ods' => 'application/vnd.oasis.opendocument.spreadsheet',

-->
