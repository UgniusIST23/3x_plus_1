<?php
// Skaičiavimas vienam skaičiui
function skaiciavimas($skaicius) {
    $dabartinis = $skaicius;
    $seka = [];
    $iteraciju_skaicius = 0;
    $didziausia_reiksme = $dabartinis;

    while ($dabartinis != 1) {
        $seka[] = $dabartinis;

        if ($dabartinis % 2 == 0) {
            $dabartinis = $dabartinis / 2;
        } else {
            $dabartinis = 3 * $dabartinis + 1;
        }

        if ($dabartinis > $didziausia_reiksme) {
            $didziausia_reiksme = $dabartinis;
        }

        $iteraciju_skaicius++;
    }

    $seka[] = 1;

    return [
        "pradinis_skaicius" => $skaicius,
        "seka" => $seka,
        "iteracijos" => $iteraciju_skaicius,
        "max_reiksme" => $didziausia_reiksme
    ];
}

// Skaičiavimas intervalui
function intervalas($pradzia, $pabaiga) {
    $rezultatai = [];

    for ($skaicius = $pradzia; $skaicius <= $pabaiga; $skaicius++) {
        $rezultatai[$skaicius] = skaiciavimas($skaicius);
    }

    return $rezultatai;
}

// Vieno skaičiaus išvedimas
function rezultatai($rezultatas) {
    print "Seka prasideda nuo skaičiaus: {$rezultatas['pradinis_skaicius']}<br><br>";
    print "Seka: " . implode(", ", $rezultatas["seka"]) . "<br>";
    print "Iteracijų skaičius: {$rezultatas['iteracijos']}<br>";
    print "Didžiausia pasiekta reikšmė: {$rezultatas['max_reiksme']}<br>";
}

// Intervalo didžiausia reikšmė ir iteracijų skaičius + išvedimas
function rezultatas($rezultatai) {
    $didziausios_reiksmes_skaicius = null;
    $didziausia_reiksme = 0;
    $daugiausia_iteraciju_skaicius = null;
    $daugiausia_iteraciju = 0;

    foreach ($rezultatai as $skaicius => $duomenys) {
        if ($duomenys["max_reiksme"] > $didziausia_reiksme) {
            $didziausia_reiksme = $duomenys["max_reiksme"];
            $didziausios_reiksmes_skaicius = $skaicius;
        }

        if ($duomenys["iteracijos"] > $daugiausia_iteraciju) {
            $daugiausia_iteraciju = $duomenys["iteracijos"];
            $daugiausia_iteraciju_skaicius = $skaicius;
        }
    }

    print "Skaičius su didžiausia pasiekta reikšme: $didziausios_reiksmes_skaicius, reikšmė: $didziausia_reiksme<br>";
    print "Skaičius su daugiausiai iteracijų: $daugiausia_iteraciju_skaicius, iteracijų: $daugiausia_iteraciju<br>";
}
?>
