<h1>Günün Sözü</h1>
<?php

$sozler = array("Bir elin nesi var",
                "Birimiz hepimiz için",
                "Damlaya damlaya",
                "Saman altından su yürütmek",
                "Sora sora bağdat bulunur");

for($i=1; $i<=10; $i++) {
  $SozNo = rand(0, count($sozler)-1);
  echo $sozler[ $SozNo ] . "<br />";
}
