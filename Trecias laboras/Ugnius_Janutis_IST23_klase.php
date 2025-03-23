<?php
class Skaiciavimai {
    private $skaicius;
    private $iteracijos;
    private $didziausia_reiksme;
    private $seka = [];

    // Funkcija pradiniam skaičiui nusistatyti
    public function nustatytiSkaiciu($skaicius) {
        $this->skaicius = $skaicius;
    }

    // Skaiciavimai skaiciui
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

    // Iteracijos
    public function gautiIteracijuSkaiciu() {
        return $this->iteracijos;
    }

    // Išvedimas
    public function isvestiRezultatus() {
        print "<strong>Pradinis skaičius: {$this->skaicius}</strong><br><br>";
        print "Seka: " . implode(", ", $this->seka) . "<br>";
        print "Iteracijų skaičius: {$this->iteracijos}<br>";
        print "Didžiausia pasiekta reikšmė: {$this->didziausia_reiksme}<br>";
    }
}
?>
