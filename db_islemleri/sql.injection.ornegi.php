<?php
  require("db.php");

  $ADI   = $_GET["ADI"];


  $ADI1   = 777; // URL'den bunun geldiğini düşünelim

  $ADI2   = "' or '1'='1"; // URL'den bunun geldiğini düşünelim

  $ADI3   = "' or '1'='1"; // URL'den bunun geldiğini düşünelim
  $ADI3   = mysqli_real_escape_string($db, $ADI3);

  $ADI4   = "Nuri'nin Yeri"; // URL'den bunun geldiğini düşünelim
  $ADI4   = mysqli_real_escape_string($db, $ADI4);

  $ADI5   = "Nuri'nin Yeri"; // URL'den bunun geldiğini düşünelim

  $SQL1 = "SELECT * FROM kullanicilar WHERE adisoyadi = '$ADI1' ";
  $SQL2 = "SELECT * FROM kullanicilar WHERE adisoyadi = '$ADI2' ";
  $SQL3 = "SELECT * FROM kullanicilar WHERE adisoyadi = '$ADI3' ";
  $SQL4 = "SELECT * FROM kullanicilar WHERE adisoyadi = '$ADI4' ";
  $SQL5 = "SELECT * FROM kullanicilar WHERE adisoyadi = '$ADI5' ";

  echo "<pre>";

  echo "$SQL1     -- SQL1  \n\n";
  echo "$SQL2     -- SQL2  \n\n";
  echo "$SQL3     -- SQL3  \n\n";
  echo "$SQL4     -- SQL4  \n\n";
  echo "$SQL5     -- SQL5  \n\n";

  echo "</pre>";

  ?>
