<?php

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

    $SONUC = "<option value=''>*** SEÇİNİZ ***</option>\n";
    foreach ($arrIlceler as $key => $value) {
      $SONUC .= "<option value='$key'>$value</option>\n";
    }

    echo $SONUC;
