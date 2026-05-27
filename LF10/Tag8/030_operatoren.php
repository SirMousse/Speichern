<?php

// Rechen Operatoren
$a = 10;
$b = 5;

$summe = $a + $b."\n";
echo $summe;

$differenz = $a - $b;
echo $differenz."\n";

$produkt = $a * $b;
echo $produkt."\n";

$quotient = $a / $b;
echo $quotient."\n";

$rest = $a % $b;
echo $rest."\n";

$exponent = $a ** $b;
echo $exponent."\n";

// Zuweisungs-Operatoren
$start = 5;
$start += 7;    // +7
echo $start."\n";

$start -= 6;    // -6
echo $start."\n";

// Vergleichsoperatoren
$x = 6;
$y = "5";   // String
$z = 7;

$gleich = ($x == $y);   // Vergleicht der Wert = loser Vergleich
$gleich1 = ($x == $z); 
var_dump($gleich);
var_dump($gleich1);

$identisch = ($x === $y); // Vergleicht es den Wert und Typ = Strenge Vergleich
var_dump($identisch);
$identisch1 = ($x === $z);
var_dump($identisch1);

$ungleich = ($x != $y);
var_dump($ungleich);

$groesser = ($x > $y);
var_dump($groesser);

$kleiner = ($x < $y);
var_dump($kleiner);

// Logischen Operatoren
$einloggen = true;
$istAdmin = false;

$darfSehen = ($einloggen && $istAdmin); // true && false = false
var_dump($darfSehen);

$irgendwieRein = ($einloggen || $istAdmin); // true || false = true
var_dump($irgendwieRein);

$nichtEinloggen = !$einloggen;
var_dump($nichtEinloggen);  // false



?>
