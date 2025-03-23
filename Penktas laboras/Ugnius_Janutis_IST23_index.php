<?php
require "Ugnius_Janutis_IST23_klase.php";

print "<h3>1. Sekos skaičiavimas vienam skaičiui</h3>";

$skaicius = 19;
$skaiciavimai = new SkaiciavimaiSuFaktorialu($skaicius);
$skaiciavimai->skaiciuoti();
$skaiciavimai->isvestiRezultatus();

print "<br><strong>Faktorialas:</strong> " . $skaiciavimai->skaiciuotiFaktoriala() . ".<br>";

print "<hr>";

print "<h3>2. Sekos skaičiavimas intervalui</h3>";

$pradzia = 1;
$pabaiga = 100;

$didziausios_reiksmes_skaicius = $pradzia;
$didziausia_reiksme = 0;
$daugiausia_iteraciju_skaicius = $pradzia;
$daugiausia_iteraciju = 0;

for ($i = $pradzia; $i <= $pabaiga; $i++) {
    $skaiciavimai = new SkaiciavimaiSuFaktorialu($i);
    $skaiciavimai->skaiciuoti();
    $rezultatas = $skaiciavimai->gautiRezultatus();

    // Max reikšmė
    if ($rezultatas["max_reiksme"] > $didziausia_reiksme) {
        $didziausia_reiksme = $rezultatas["max_reiksme"];
        $didziausios_reiksmes_skaicius = $i;
    }

    // Daugiausiai iteracijų
    if ($rezultatas["iteracijos"] > $daugiausia_iteraciju) {
        $daugiausia_iteraciju = $rezultatas["iteracijos"];
        $daugiausia_iteraciju_skaicius = $i;
    }
}

// Rezultatai
print "<strong>Seka prasideda nuo skaičiaus $pradzia, o baigiasi skaičiumi $pabaiga.</strong><br><br>";
print "Skaičius su didžiausia pasiekta reikšme: $didziausios_reiksmes_skaicius, šis skaičius pasiekė $didziausia_reiksme reikšmes<br>";
print "Skaičius su daugiausiai iteracijų: $daugiausia_iteraciju_skaicius, šis skaičius pasiekė $daugiausia_iteraciju iteracijų<br>";
?>
