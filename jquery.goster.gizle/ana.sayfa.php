<!DOCTYPE html>
<html>
<head>
	<title>ANA SAYFA</title>
</head>
<body>

	<h1>Burası Ana Sayfadır</h1>

	<p>
		<a href="haber1.php">Zeki Müren'i Anma Gecesi</a>
		<a href="haber2.php">Duman konseri</a>
	<p>

	<div id="HABER_SAHASI" style="width: 100%; border: 4px solid black;">

	</div>


	<hr>
	<h3>Burası Sayfanın son kısmıdır</h3>


	<script type="text/javascript">
		
		jQuery(document).ready(function($) {
			// Sayfa yüklenince HABER_SAHASI etiketini gizle.
			$("#HABER_SAHASI").hide();
		});

	</script>

	<script src="jquery-3.4.1.min.js"></script>


</body>
</html>