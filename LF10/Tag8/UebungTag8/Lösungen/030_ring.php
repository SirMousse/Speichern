<?php
// Herr der Ringe – Macht des Rings

// Aufgabe 1 – Ring-Korruption
// $frodoWillpower = 60;
// $ringCorruption = 75;

// 1. Berechne die Differenz.
// 2. Speichere sie in $difference.
// 3. Gib alles mit echo aus.
// 4. Nutze var_dump() auf $difference.

// Bonus:
// Prüfe, ob der Ring stärker ist als Frodos Wille.

// ===========================
// 1) Herr der Ringe – Macht des Rings
// ===========================

$frodoWillpower = 60;
$ringCorruption = 75;

$difference = $ringCorruption - $frodoWillpower;

echo "Frodos Wille: $frodoWillpower\n";
echo "Ring-Korruption: $ringCorruption\n";
echo "Differenz (Korruption - Wille): $difference\n";
var_dump($difference);

// Bonus: Ring stärker?
$isRingStronger = $ringCorruption > $frodoWillpower;
echo "Ist der Ring stärker als Frodos Wille?\n";
var_dump($isRingStronger);

echo "\n";

// Aufgabe 2 – Gefährten zählen (Operatoren-Mix)
// $hobbits = 4;
// $men = 2;
// $elf = 1;
// $dwarf = 1;
// $wizard = 1;

// 1. Berechne die Gesamtanzahl.
// 2. Multipliziere die Anzahl der Hobbits mit 2 (Mut-Faktor).
// 3. Nutze % (Modulo):
// Ist die Gesamtanzahl gerade oder ungerade?

$hobbits = 4;
$men     = 2;
$elf     = 1;
$dwarf   = 1;
$wizard  = 1;

$totalFellowship = $hobbits + $men + $elf + $dwarf + $wizard;
echo "Gesamtzahl Gefährten: $totalFellowship\n";

$hobbitsBravery = $hobbits * 2;
echo "Hobbits * 2 (Mut-Faktor): $hobbitsBravery\n";

// Modulo: gerade/ungerade
$isEven = ($totalFellowship % 2) == 0;
echo "Ist die Gesamtzahl gerade?\n";
var_dump($isEven);

echo "\n\n";
?>
