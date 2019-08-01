<?php

	// BU SAYFADA, İLETİŞİM FORMUNDAN GELEN BİLGİLER KAYIT EDİLECEK
	// echo "ad sahası doldurulmalıdır";
	
	$HataMesaji = "";
	if($_POST["adiniz"] == "")      $HataMesaji .= "Ad sahası dolu olmalıdır! ";
	if($_POST["eposta"] == "")      $HataMesaji .= "ePosta sahası dolu olmalıdır! ";
	if($_POST["telefon"] == "")     $HataMesaji .= "Telefon sahası dolu olmalıdır! ";
	if($_POST["mesajkonusu"] == "") $HataMesaji .= "Mesaj Konusu seçmelisiniz! ";
	if($_POST["mesaj"] == "")       $HataMesaji .= "Mesaj sahasını yazmalısınız! ";


	// Veritabanına bağlantı yapalım
	require("db.php");

	// Mesajın tabloya kaydedilebilmesi için SQL hazırlayalım
	$SQL = sprintf("
			INSERT INTO 
				iletisim_formu_mesajlari 
			SET 
				adiniz = '%s',
				eposta = '%s',
				telefon = '%s',
				mesajkonusu = '%s',
				mesaj = '%s'   ",
			$_POST["adiniz"],
			$_POST["eposta"],
			$_POST["telefon"],
			$_POST["mesajkonusu"],
			$_POST["mesaj"]  );

	if($HataMesaji == "") {
		// Sorun yok, her şey normal

		// SQL komutunu MySQL veritabanı üzerinde çalıştır!
		$rows  = mysqli_query($db, $SQL);

		echo "TAMAM"; 
	} else {
		// Hata mesajını ekrana yazdırabilmek için
		echo $HataMesaji; 
	}
