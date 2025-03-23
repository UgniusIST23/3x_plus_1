<?php
$sk = 69;
$count = 0;

print "Seka prasideda nuo $sk:<br>";

while ($sk != 1) {
    print $sk . ", ";

    if ($sk % 2 == 0) {
        $sk = $sk / 2;
    } else {
        $sk = 3 * $sk + 1;
    }

    $count++;
}

print "1<br>"; // Kadangi paskutinis skaičius visada yra 1
print "Ciklų kiekis: $count";
?>
