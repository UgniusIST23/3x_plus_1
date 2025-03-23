<?php
include 'Ugnius_Janutis_IST23_funkcijos.php';

print "<h3> 1. Sekos skaičiavimas vienam skaičiui<br></h3>";

$skaicius = 66;
$rezultatas = skaiciavimas($skaicius);
rezultatai($rezultatas);

print "<hr>";

print "<h3>2. Sekos skaičiavimas intervalui<br></h3>";

$pradzia = 1;
$pabaiga = 100;

print "Seka prasideda nuo skaičiaus $pradzia, o baigiasi skaičiumi $pabaiga.<br><br>";

$rezultatai = intervalas($pradzia, $pabaiga);
rezultatas($rezultatai);
?>
