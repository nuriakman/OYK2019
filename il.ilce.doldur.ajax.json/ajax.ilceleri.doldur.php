<?php
    // $SONUC["kayit_id"]     = "123444";
    // $SONUC["PARAMETRELER"] = print_r($_GET, true);
    
    $SONUC["ISLEM_SONUCU"] = "Mesaj alındı...";
    $SONUC["MUSTERI_ADI"]  = "Nuri Akman";
    $SONUC["SEHIR"]        = $_GET["sehir"];

    if($_GET["sehir"]=="ANKARA") {
        $arrIlceler[12] = "Altındağ";
        $arrIlceler[13] = "Çankaya";
        $arrIlceler[14] = "Sincan";
        $SONUC["ILCELER"] = $arrIlceler;
    }

    if($_GET["sehir"]=="İSTANBUL") {
        $arrIlceler[1] = "Beşiktaş";
        $arrIlceler[2] = "Eyüp";
        $arrIlceler[3] = "Üsküdar";
        $SONUC["ILCELER"] = $arrIlceler;
    }

    header('Content-Type: application/json'); // Çıktı JSON formatında olacaktır bildirgesi
    echo json_encode($SONUC); // $SONUC değişkeni içindeki değerleri JSON formatına dönüştür ve ekrana yaz.
