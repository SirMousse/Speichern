<?php
// Extra Hardcore Challenge

// Baue ein Mini-RPG:

// 1. Spieler hat $health, $attack, $defense
// 2. Gegner hat $health, $attack
// 3. Berechne: - Angriffsschaden
//              - Restleben
//              - Prüfe mit Vergleichsoperatoren, wer gewinnt

// Nutze:   +
//          -
//          *
//          /
//          %
//          >
//          <
//          ==
//          &&
//          ||


// ===========================
// Extra Hardcore Challenge – Mini-RPG
// ===========================

// Spieler
$playerHealth  = 100;
$playerAttack  = 35;
$playerDefense = 12;

// Gegner
$enemyHealth2 = 90;
$enemyAttack  = 28;

// Angriffsschaden (simpler Ansatz):
// Schaden = Angriff - Verteidigung, aber nie < 0
$playerDamageToEnemy = $playerAttack - 12; // Gegner hat hier "12" als Mini-Rüstung (frei gewählt)
if ($playerDamageToEnemy < 0) {
    $playerDamageToEnemy = 0;
}

$enemyDamageToPlayer = $enemyAttack - $playerDefense;
if ($enemyDamageToPlayer < 0) {
    $enemyDamageToPlayer = 0;
}

// Restleben nach je einem Schlagabtausch
$enemyHealth2After  = $enemyHealth2 - $playerDamageToEnemy;
$playerHealthAfter  = $playerHealth - $enemyDamageToPlayer;

echo "Spieler: HP=$playerHealth ATK=$playerAttack DEF=$playerDefense\n";
echo "Gegner:  HP=$enemyHealth2 ATK=$enemyAttack\n";
echo "Spieler macht Schaden am Gegner: $playerDamageToEnemy\n";
echo "Gegner macht Schaden am Spieler: $enemyDamageToPlayer\n";
echo "Gegner HP nach Treffer: $enemyHealth2After\n";
echo "Spieler HP nach Treffer: $playerHealthAfter\n";

// Wer gewinnt nach dieser Runde?
$playerWins = ($enemyHealth2After <= 0) && ($playerHealthAfter > 0);
$enemyWins  = ($playerHealthAfter <= 0) && ($enemyHealth2After > 0);
$draw       = ($playerHealthAfter <= 0) && ($enemyHealth2After <= 0);

echo "Gewinnt der Spieler?\n";
var_dump($playerWins);

echo "Gewinnt der Gegner?\n";
var_dump($enemyWins);

echo "Unentschieden?\n";
var_dump($draw);

// Beispiel für || (falls du explizit sehen willst):
$someoneDied = ($playerHealthAfter <= 0) || ($enemyHealth2After <= 0);
echo "Ist jemand gefallen (Spieler ODER Gegner <= 0)?\n";
var_dump($someoneDied);

// Beispiel für % (einfach noch drin):
$round = 4;
$isBossRound = ($round % 4) == 0;
echo "Boss-Runde? (Runde % 4 == 0)\n";
var_dump($isBossRound);

?>
?>