<?php
// Aufgabe 1 – Hauspunkte addieren

// Erstelle folgende Variablen:
// $gryffindor = 150;
// $slytherin = 120;
// $bonus = 25;

// Aufgaben:
// 1. Addiere den Bonus zu Gryffindor.
// 2. Ziehe Slytherin 10 Punkte ab.
// 3. Gib die neuen Werte mit echo aus.
// 4. Nutze var_dump() um die Datentypen zu prüfen.

// Erweiterung:
// Ist Gryffindor jetzt größer als Slytherin?
// Verwende einen Vergleichsoperator (>) und speichere das Ergebnis in $winner.

// ===========================
// 1) Harry Potter – Hauspunkte
// ===========================

$gryffindor = 150;
$slytherin  = 120;
$bonus      = 25;

$gryffindor = $gryffindor + $bonus; // Bonus addieren
$slytherin  = $slytherin - 10;      // 10 abziehen

echo "Gryffindor Punkte: $gryffindor\n";
echo "Slytherin Punkte: $slytherin\n";

var_dump($gryffindor);
var_dump($slytherin);
var_dump($bonus);

// Erweiterung: Gryffindor größer als Slytherin?
$winner = $gryffindor > $slytherin;
echo "Ist Gryffindor > Slytherin?\n";
var_dump($winner);

echo "\n";


// Aufgabe 2 – Zaubertrank-Level (Vergleich & Logik)
// $magicPower = 85;
// $requiredPower = 100;

// - Prüfe mit >=, ob der Zauber stark genug ist.
// - Speichere das Ergebnis in $isStrongEnough.
// - Gib das Ergebnis mit var_dump() aus.

// Erweitere: Ist die Kraft über 80 UND unter 100?
//              → Nutze &&

$magicPower    = 85;
$requiredPower = 100;

$isStrongEnough = $magicPower >= $requiredPower;
echo "Ist der Zauber stark genug (>= $requiredPower)?\n";
var_dump($isStrongEnough);

// Erweiterung: über 80 UND unter 100?
$isInRange = ($magicPower > 80) && ($magicPower < 100);
echo "Ist die Kraft > 80 UND < 100?\n";
var_dump($isInRange);

echo "\n\n";


$x = "10";
$y = 5;
echo $x . $y;

?>


