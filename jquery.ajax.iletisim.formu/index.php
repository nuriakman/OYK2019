<!DOCTYPE html>
<html>
<head>
	<title>ANA SAYFA</title>
</head>
<body>

	<h1>jQuery AJAX İle İletişim Formu</h1>

	<p style="text-align: right;">
		<input type="button" value="İletişim Formunu Göster" onclick="FormuGoster()">
	</p>

	<div id="FORM_SAHASI"></div> <!-- Müşteri iletişim formu buraya gelecek -->

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut luctus lacus eros, vitae ultricies nibh imperdiet a. Morbi sagittis rhoncus nisl tristique vehicula. Duis vitae arcu mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut felis nisl, fringilla a turpis nec.</p>

<p>scelerisque dignissim risus. Curabitur lacus quam, dictum eu interdum ac, ullamcorper non lorem. Praesent bibendum arcu et orci dignissim, sed posuere enim rhoncus. Morbi auctor metus vitae orci pretium, ut gravida metus vulputate. Morbi rutrum nibh ac leo venenatis feugiat.</p>


	<script src="jquery-3.4.1.min.js"></script>
	<script src="sweetalert2.js"></script>

	<script type="text/javascript">

		function FormuGoster(){
			$('#FORM_SAHASI').load('iletisim.formu.php');
			// alert("Lütfen formu doldurarak görüş ve önerilerinizi bizimle paylaşın!")
		}

	</script>



</body>
</html>