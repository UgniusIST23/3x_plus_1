<?php
$pradzia = 1;
$pabaiga = 100;
$rezultatai = [];

print "Seka prasideda nuo skaičiaus $pradzia, o baigiasi skaičiumi $pabaiga.";

for ($skaicius = $pradzia; $skaicius <= $pabaiga; $skaicius++) {
    $dabartinis = $skaicius;
    $iteraciju_skaicius = 0;
    $didziausia_pasiekta_reiksme = $dabartinis;

    while ($dabartinis != 1) {
        if ($dabartinis % 2 == 0) {
            $dabartinis = $dabartinis / 2;
        } else {
            $dabartinis = 3 * $dabartinis + 1;
        }

        $iteraciju_skaicius++;

        if ($dabartinis > $didziausia_pasiekta_reiksme) {
            $didziausia_pasiekta_reiksme = $dabartinis;
        }
    }

    $rezultatai[$skaicius] = [
        "iteracijos" => $iteraciju_skaicius,
        "max_reiksme" => $didziausia_pasiekta_reiksme
    ];
}

$didziausios_reiksmes_skaicius = $pradzia;
$didziausia_reiksme = $rezultatai[$pradzia]["max_reiksme"];

$daugiausia_iteraciju_skaicius = $pradzia;
$daugiausia_iteraciju = $rezultatai[$pradzia]["iteracijos"];

$maziausia_iteraciju_skaicius = $pradzia;
$maziausia_iteraciju = $rezultatai[$pradzia]["iteracijos"];

foreach ($rezultatai as $skaicius => $duomenys) {
    if ($duomenys["max_reiksme"] > $didziausia_reiksme) {
        $didziausia_reiksme = $duomenys["max_reiksme"];
        $didziausios_reiksmes_skaicius = $skaicius;
    }

    if ($duomenys["iteracijos"] > $daugiausia_iteraciju) {
        $daugiausia_iteraciju = $duomenys["iteracijos"];
        $daugiausia_iteraciju_skaicius = $skaicius;
    }

    if ($duomenys["iteracijos"] < $maziausia_iteraciju) {
        $maziausia_iteraciju = $duomenys["iteracijos"];
        $maziausia_iteraciju_skaicius = $skaicius;
    }
}

print "<br><br>REZULTATAI:<br>";
print "Skaičius su didžiausia pasiekta reikšme: $didziausios_reiksmes_skaicius, Reikšmė: $didziausia_reiksme<br>";
print "Skaičius su daugiausiai iteracijų: $daugiausia_iteraciju_skaicius, Iteracijų: $daugiausia_iteraciju<br>";
print "Skaičius su mažiausiai iteracijų: $maziausia_iteraciju_skaicius, Iteracijų: $maziausia_iteraciju<br>";
?>
