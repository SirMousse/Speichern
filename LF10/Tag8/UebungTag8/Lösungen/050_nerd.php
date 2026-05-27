<?php

// Nerd-Endgegner-Mission (Alles kombiniert)

// Erstelle folgendes Szenario:

// $mana = 120;
// $stamina = 80;
// $enemyHealth = 150;
// Aufgaben:

// 1. Berechne den Gesamtschaden: $damage = $mana * 0.5 + $stamina * 0.3;
// 2. Ziehe den Schaden vom Gegner ab.
// 3. Prüfe:    -  Ist der Gegner besiegt? (<= 0)
//              - War der Schaden größer als 100?
// 4. Nutze var_dump() für alle Wahrheitswerte.


// ===========================
//    Nerd-Endgegner-Mission
// ===========================


$mana = 120;
$stamina = 80;
$enemyHealth = 150;

$damage = $mana * 0.5 + $stamina * 0.3;
$enemyHealthAfter = $enemyHealth - $damage;

echo "Mana: $mana | Stamina: $stamina | Enemy HP (Start): $enemyHealth\n";
echo "Damage: $damage\n";
echo "Enemy HP (Nach Schaden): $enemyHealthAfter\n";

$isEnemyDefeated = $enemyHealthAfter <= 0;
$isDamageOver100 = $damage > 100;

echo "Ist der Gegner besiegt (<= 0)?\n";
var_dump($isEnemyDefeated);

echo "War der Schaden > 100?\n";
var_dump($isDamageOver100);

echo "\n\n";

?>