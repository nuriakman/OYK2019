<h2>Müşteri İletişim Formu</h2>

<form id="IletisimFormu" autocomplete="off">
	
	Ad Soyad: <input type="text" name="adiniz"><br><br>
	ePosta:   <input type="text" name="eposta"><br><br>
	Telefon:  <input type="text" name="telefon"><br><br>
	Mesaj Konusu: 
	<select name="mesajkonusu">
		<option value="">Seçiniz</option>
		<option value="Şikayet">Şikayet</option>
		<option value="Teşekkür">Teşekkür</option>
		<option value="Öneri">Öneri</option>
		<option value="Diğer">Diğer</option>
	</select>
	<br><br>
	Mesajınız:<br>
	<textarea name="mesaj" rows="10" cols="60"></textarea><br><br>
	<input type="button" value="Mesajımı İlet!" onclick="FORMU_KAYDET()">

</form>

<script>
	function FORMU_KAYDET() {
		// Kaydetme modülünü çağıralım / Formu POST edelim

	   $.ajax({
	       url: "iletisim.formu.kaydet.php", // FORM, bu sayfaya gönderilecek.
	       type: 'POST',  // Form POST ile gönderilsin
	       dataType: 'html', // Gelen veri HTML tipinde olacak. (Diğer bir seçenek de JSON'dur)
	       data: $("#IletisimFormu").serialize(), // FORM öğesi içindeki tüm değişkenleri ve değerlerini göndermek üzere hazırla
	       success: function(AjaxHTMLCevap){
	       		// Buraya geldiğinde çağrılan sayfanın işi tamamlanmıştır

	       		if(AjaxHTMLCevap == "TAMAM") {
       				// Hata yoksa teşekkür mesajı gösterelim
       				// alert("Mesajınız alındı. Teşekkür ederiz!");

       				// Teşekkür mesajını https://sweetalert2.github.io/ kullanarak verelim
					Swal.fire({
					  type: 'success',
					  title: 'Teşekkürler !',
					  confirmButtonText: 'Tamam',
					  text: 'Fikirlerinizi paylaştığınız için teşekkür ederiz.'
					})

       				// Ekrandaki FORM_SAHASI alanında gösterilmekte olan iletişim formunu yok edelim
       				$("#FORM_SAHASI").html("");
       			} else {
					// Hata varsa ekrana gösterelim
					// alert( AjaxHTMLCevap )

					Swal.fire({
					  type: 'error',
					  title: 'Eksik veri girişi',
					  confirmButtonText: 'Tamam',
					  text: AjaxHTMLCevap
					})


				}
	   		} // success
	   }); // ajax

	} // FORMU_KAYDET
</script>