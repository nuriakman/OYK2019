<?php
  @session_start(); // Oturum açıldı
  session_destroy(); // Oturum sonlandırıldı
?>
<p>Oturumunuz sona erdi.</p>

<a href="index.php">Giriş ekranı</a>
