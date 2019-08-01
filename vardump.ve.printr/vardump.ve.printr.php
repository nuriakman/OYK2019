<!DOCTYPE html>
<html>
<body>
<h1>Merhaba</h1>

<?php

$isimler = array("Nuri", "Ali", "Ayşe");
$sayilar = array(1123,2141,1233,4457,5,6,7);
$kodlar = array("zn" => "Çinko", "fe" => "Demir");
$karma  = array("Ankara", 78, "au" => "Altın", false);
echo "<pre>";
var_dump($karma);
echo "</pre>";
echo $karma["zn"];
?>


</body>
</html>
