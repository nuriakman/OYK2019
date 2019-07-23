<h1>Günün Sözü</h1>
<?php

$sozler = array("Bir elin nesi var",
                "Birimiz hepimiz için",
                "Saman altından su yürütmek",
                "Sora sora bağdat bulunur");
echo "<pre>";
for($i=1; $i<=10; $i++) {
  $SozNo = rand(0, 3);
  echo $sozler[ $SozNo ] . "\n";
}
echo "</pre>";







?>
