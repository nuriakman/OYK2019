<!DOCTYPE html>
<html>
<head>
	<title>ANA SAYFA</title>
</head>
<body>

	<h1>Burası Ana Sayfadır</h1>

	<input type="button" value="Üye Girişi" onclick="$('#UYE_GIRISI').toggle(1200);">

	<div id="UYE_GIRISI">
		<h2>Üye Girişi</h2>
		<form>
			Kullanıcı Adınız: <input type="text" name=""><br>
			Kullanıcı Parolanız : <input type="text" name=""><br>
			<input type="submit" value="GİRİŞ YAP">
		</form>
	</div>


	
	<p>
		<h2 style="display:inline;">jQuery LOAD ile yükleme:</h2>
		<a href="#" onclick="HaberiGosterLOAD(1)">Zeki Müren'i Anma Gecesi</a>
		<a href="#" onclick="HaberiGosterLOAD(2)">Duman konseri</a>
	<p>

	<p>
		<h2 style="display:inline;">jQuery AJAX ile yükleme:</h2>
		<a href="#" onclick="HaberiGosterAJAX(1)">Zeki Müren'i Anma Gecesi</a>
		<a href="#" onclick="HaberiGosterAJAX(2)">Duman konseri</a>
	<p>

	<h2>jQuery AJAX ile Veritabanından Veri Çekme</h2>
	<p>
		<a href="#" onclick="IlceleriGoster(6)">Ankara'nın İlçeleri</a>
		<a href="#" onclick="IlceleriGoster(34)">İstanbul'un İlçeleri</a>
	<p>

	<h2>TÜM ŞEHİRLER</h2>
	<p>
		<?php require("sehirleri.listele.php"); ?>
	<p>

	<div id="HABER_SAHASI" style="width: 100%; border: 4px solid black;">

	</div>


	<hr>
	<h3>Burası Sayfanın son kısmıdır</h3>


	<script src="jquery-3.4.1.min.js"></script>

	<script type="text/javascript">


		function IlceleriGoster( ILKODU ) {
			
		   YUKLENECEK_SAYFA = "veritabanindan.ilceleri.goster.php?ilkodu=" + ILKODU;

			// Belirtilen sayfayı jQuery'nin AJAX metodunu kullanarak getirelimm
		   $.ajax({
		       url: YUKLENECEK_SAYFA,
		       type: 'GET',
		       dataType: 'html',
		       success: function(data){
		         $('#HABER_SAHASI').html(data);
		       }
		   });
   		}

		function HaberiGosterAJAX( SAYFANO ) {
			
		   YUKLENECEK_SAYFA = "haber" + SAYFANO + ".php";

			// Belirtilen sayfayı jQuery'nin AJAX metodunu kullanarak getirelimm
		   $.ajax({
		       url: YUKLENECEK_SAYFA,
		       type: 'GET',
		       dataType: 'html',
		       success: function(data){
		         $('#HABER_SAHASI').html(data);
		       }
		   });
   		}

		function HaberiGosterLOAD( SAYFANO ) {

			YUKLENECEK_SAYFA = "haber" + SAYFANO + ".php";

			// Belirtilen sayfayı jQuery'nin LOAD metodunu kullanarak getirelimm
			$('#HABER_SAHASI').load(YUKLENECEK_SAYFA);
		}


		jQuery(document).ready(function($) {
			// Sayfa yüklenince yapılacak bir iş olursa burada olmalı
			$('#UYE_GIRISI').hide();
		});

	</script>



</body>
</html>