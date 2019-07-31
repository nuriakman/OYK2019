<?php
    $SONUC["ISLEM_SONUCU"] = "Mesaj alındı...";
    $SONUC["kayit_id"]     = "123444";
    $SONUC["PARAMETRELER"] = print_r($_POST, true);

    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

        header('Content-Type: application/json');

    }

    echo json_encode($SONUC);
