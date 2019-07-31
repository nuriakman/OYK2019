<?php
    //$SONUC["ISLEM_SONUCU"] = "Mesaj alındı...";
    //$SONUC["kayit_id"]     = "123444";
    //$SONUC["PARAMETRELER"] = print_r($_GET, true);

    if($_GET["sehir"]=="ANKARA") {
        $arrIlceler[12] = "Altındağ";
        $arrIlceler[13] = "Çankaya";
        $arrIlceler[14] = "Sincan";
    }

    if($_GET["sehir"]=="İSTANBUL") {
        $arrIlceler[1] = "Beşiktaş";
        $arrIlceler[2] = "Eyüp";
        $arrIlceler[3] = "Üsküdar";
    }

    $Cevap = "";
    foreach ($arrIlceler as $key => $value) {
      $Cevap .= "<option value='$key'>$value</option>";
    }

    $SONUC["ILCELER"] = $Cevap;

    header('Content-Type: application/json');
    echo json_encode($SONUC);
