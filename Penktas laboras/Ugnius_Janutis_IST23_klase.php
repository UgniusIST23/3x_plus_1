<?php
class Skaiciavimai {
    protected $skaicius;
    private $iteracijos;
    private $didziausia_reiksme;
    private $seka = [];

    // Konstruktorius, pradinės reikšmės nusistatymui
    public function __construct($skaicius) {
        $this->skaicius = $skaicius; 
    }

    // Skaiciavimai
    public function skaiciuoti() {
        $dabartinis = $this->skaicius;
        $this->iteracijos = 0;
        $this->didziausia_reiksme = $dabartinis;
        $this->seka = [];

        while ($dabartinis != 1) {
            $this->seka[] = $dabartinis;
            if ($dabartinis % 2 == 0) {
                $dabartinis /= 2;
            } else {
                $dabartinis = 3 * $dabartinis + 1;
            }

            if ($dabartinis > $this->didziausia_reiksme) {
                $this->didziausia_reiksme = $dabartinis;
            }

            $this->iteracijos++;
        }

        $this->seka[] = 1;
    }

    // Rezultatai masyve
    public function gautiRezultatus() {
        return [
            "pradinis_skaicius" => $this->skaicius,
            "seka" => $this->seka,
            "iteracijos" => $this->iteracijos,
            "max_reiksme" => $this->didziausia_reiksme
        ];
    }

    // Rezultatai
    public function isvestiRezultatus() {
        print "<strong>Pradinis skaičius: {$this->skaicius}</strong><br><br>";
        print "Seka: " . implode(", ", $this->seka) . "<br>";
        print "Iteracijų skaičius: {$this->iteracijos}<br>";
        print "Didžiausia pasiekta reikšmė: {$this->didziausia_reiksme}<br>";
    }

    // GET metodas vienam kintamajam
    public function gautiSkaiciu() {
        return $this->skaicius;
    }
}

// Paveldejimo klase su faktorialo skaiciavimu
class SkaiciavimaiSuFaktorialu extends Skaiciavimai {
    const FAKTORIALO_RIBA = 20; // Konstanta, faktorialo ribai nustatyti

    // Skaičiavimas
    public function skaiciuotiFaktoriala() {
        $skaicius = $this->gautiSkaiciu();
        if ($skaicius > self::FAKTORIALO_RIBA) {
            return "pasiekta riba. Maksimalus skaičius faktorialo skaičiavimui yra " . self::FAKTORIALO_RIBA . ".";
        }

        $faktorialas = 1;
        for ($i = 2; $i <= $skaicius; $i++) {
            $faktorialas *= $i;
        }

        return $faktorialas;
    }
}
?>
