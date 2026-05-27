<?php

// Aufgabe 1 – Dino-Ausbruch
// $raptors = 3;
// $trex = 1;
// $fencesWorking = false;

// 1. Berechne die Gesamtzahl der Dinos.
// 2. Prüfe mit &&: Sind mehr als 3 Dinos da UND die Zäune kaputt?
// 3. Gib das Ergebnis mit var_dump() aus.

// ===========================
// 1) Jurassic Park – Dino-Logik
// ===========================

$raptors = 3;
$trex = 1;
$fencesWorking = false;

$totalDinos = $raptors + $trex;
echo "Raptors: $raptors\n";
echo "T-Rex: $trex\n";
echo "Gesamtzahl Dinos: $totalDinos\n";

// Mehr als 3 Dinos UND Zäune kaputt
// (Zäune kaputt = fencesWorking == false)
$isBreakout = ($totalDinos > 3) && ($fencesWorking == false);

echo "Mehr als 3 Dinos UND Zäune kaputt?\n";
var_dump($isBreakout);

echo "\n";

// Aufgabe 2 – DNA-Mischung (String + Operatoren)
// $dna1 = "Tyranno";
// $dna2 = "saurus";

// 1. Verbinde beide Strings mit .
// 2. Gib das Ergebnis aus.
// 3. Nutze var_dump() auf dem Ergebnis.

$dna1 = "Tyranno";
$dna2 = "saurus";

$combinedDNA = $dna1 . $dna2;
echo "Kombinierte DNA: $combinedDNA\n";
var_dump($combinedDNA);

echo "\n\n";
?>