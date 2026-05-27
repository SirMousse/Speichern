<?php 

// Zombie-Horde: Operator-Priorität und Klammern-Fallen

// Du bekommst Werte:

// $survivors = 7;
// $zombies = 38;
// $ammo = 120;
// $headshotCost = 3; // Kugeln pro Headshot

// Aufgaben
// 1. Berechne, wie viele Zombies du maximal per Headshot töten kannst:    kills = intdiv($ammo, $headshotCost)

// 2. Berechne Rest-Zombies nach den Kills (nicht unter 0 fallen lassen).

// 3. Jetzt die Falle: Berechne Panik-Level (0–100) mit dieser Formel: $panic = 100 - $survivors * 8 + $zombies / 2;
//     - Gib var_dump($panic) aus.
//     - Korrigiere die Formel so, dass sie sinnvoller ist (mit Klammern), und vergleiche beide Werte.

// 4. Prüfe mit && und ||: “Evakuierung nötig”, wenn Rest-Zombies > 0 UND Survivors < 5 ODER Panik >= 90
//                          Speichere Ergebnis in $evacuate und var_dump().

?>