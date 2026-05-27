
<?php
echo "=== Tierheim: Code & Pfote ===\n\n";

// Aufgabe 1 – Wie viele Tiere haben wir?

// Erstelle folgende Variablen:

// $dogs = 12;
// $cats = 8;
// $rabbits = 5;

// Aufgaben:
// 1. Berechne die Gesamtanzahl aller Tiere.
// 2. Gib das Ergebnis mit echo aus.
// 3. Nutze var_dump() auf der Gesamtzahl.
// 4. Ist die Gesamtanzahl größer als 20?
// → Speichere das Ergebnis in $isFull und nutze var_dump().

/* -----------------------------------------
Aufgabe 1 – Wie viele Tiere haben wir?
-------------------------------------------- */
$dogs = 12;
$cats = 8;
$rabbits = 5;

$totalAnimals = $dogs + $cats + $rabbits;

echo "Aufgabe 1:\n";
echo "Hunde: $dogs, Katzen: $cats, Kaninchen: $rabbits\n";
echo "Gesamtzahl Tiere: $totalAnimals\n";
var_dump($totalAnimals);

$isFull = $totalAnimals > 20;
echo "Ist Tierheim (mehr als 20 Tiere) voll?\n";
var_dump($isFull);

echo "\n";

// Aufgabe 2 – Adoptionstag

// Heute wurden Tiere vermittelt:

// $dogsAdopted = 3;
// $catsAdopted = 2;

// Aufgaben:
// 1. Ziehe die adoptierten Tiere vom Bestand ab.
// 2. Gib die neuen Werte aus.
// 3. Prüfe:    - Haben wir jetzt weniger als 10 Hunde?
//              - Haben wir mehr Katzen als Hunde?

// Speichere jede Prüfung in einer eigenen Variable und nutze var_dump().

/* ------------------------------
    Aufgabe 2 – Adoptionstag
--------------------------------- */

$dogsAdopted = 3;
$catsAdopted = 2;

$dogs = $dogs - $dogsAdopted;
$cats = $cats - $catsAdopted;

echo "Aufgabe 2:\n";
echo "Adoptiert: Hunde $dogsAdopted, Katzen $catsAdopted\n";
echo "Neuer Bestand: Hunde $dogs, Katzen $cats\n";

$lessThan10Dogs = $dogs < 10;
echo "Weniger als 10 Hunde?\n";
var_dump($lessThan10Dogs);

$moreCatsThanDogs = $cats > $dogs;
echo "Mehr Katzen als Hunde?\n";
var_dump($moreCatsThanDogs);

echo "\n";

// Aufgabe 3 – Futterberechnung (Mathe-Operatoren)

// Ein Hund braucht 0.4 kg Futter pro Tag.
// Eine Katze braucht 0.2 kg.

// Aufgaben:

// 1. Berechne den gesamten täglichen Futterbedarf.
// 2. Multipliziere das Ergebnis mit 7 (Wochenbedarf).
// 3. Gib alles mit echo aus.
// 4. Nutze var_dump() für den Wochenbedarf.

/* ---------------------------
    Aufgabe 3 – Futterberechnung
---------------------------- */
$dogFoodPerDay = 0.4; // kg pro Hund
$catFoodPerDay = 0.2; // kg pro Katze

$dailyFoodKg = ($dogs * $dogFoodPerDay) + ($cats * $catFoodPerDay);
$weeklyFoodKg = $dailyFoodKg * 7;

echo "Aufgabe 3:\n";
echo "Täglicher Futterbedarf (kg): $dailyFoodKg\n";
echo "Wöchentlicher Futterbedarf (kg): $weeklyFoodKg\n";
var_dump($weeklyFoodKg);

echo "\n";

// Aufgabe 4 – Tierheim überfüllt? (Logische Operatoren)

// $maxCapacity = 20;
// $currentAnimals = 25;
// $hasEmergencyCases = true;

// Aufgaben:
// 1. Prüfe:   - Ist das Tierheim überfüllt? (>)
// 2. Prüfe:   - Ist es überfüllt UND gibt es Notfälle? (&&)
// 3. Prüfe:   - Ist es überfüllt ODER gibt es Notfälle? (||)

// Gib alle Ergebnisse mit var_dump() aus.

/* ---------------------------
    Aufgabe 4 – Überfüllt? (Logik)
---------------------------- */
$maxCapacity = 20;
$currentAnimals = 25;
$hasEmergencyCases = true;

$isOverCapacity = $currentAnimals > $maxCapacity;
$overAndEmergency = $isOverCapacity && $hasEmergencyCases;
$overOrEmergency = $isOverCapacity || $hasEmergencyCases;

echo "Aufgabe 4:\n";
echo "Über Kapazität?\n";
var_dump($isOverCapacity);

echo "Über Kapazität UND Notfälle?\n";
var_dump($overAndEmergency);

echo "Über Kapazität ODER Notfälle?\n";
var_dump($overOrEmergency);

echo "\n";

// Aufgabe 5 – Spielzeugverteilung (Modulo)

// Wir haben:
// $balls = 13;

// Aufgaben:
// 1. Teile die Bälle gleichmäßig auf die Hunde auf.
// 2. Nutze %, um zu prüfen:    - Bleiben Bälle übrig?
// 3. Speichere den Rest in $leftoverBalls.
// 4. Nutze var_dump().

/* -----------------------------------------------
    Aufgabe 5 – Spielzeugverteilung (Modulo)
------------------------------------------------- */
$balls = 13;

// Achtung: Division durch 0 vermeiden (falls keine Hunde da wären)
$ballsPerDog = intdiv($balls, $dogs);
$leftoverBalls = $balls % $dogs;

echo "Aufgabe 5:\n";
echo "Bälle gesamt: $balls\n";
echo "Hunde aktuell: $dogs\n";
echo "Bälle pro Hund (ganzzahlig): $ballsPerDog\n";
echo "Übrige Bälle: $leftoverBalls\n";
var_dump($leftoverBalls);

echo "\n";

// Aufgabe 6 – Tierarztkosten (Rechenmix)

// $dogTreatment = 120;
// $catTreatment = 80;
// $rabbitTreatment = 50;

// Aufgaben:
// 1. Berechne die Gesamtkosten.
// 2. Teile sie durch die Anzahl der Tiere.
// 3. Prüfe: Sind die Kosten pro Tier größer als 70?
// 4. Gib alles aus.

/* -----------------------------
    Aufgabe 6 – Tierarztkosten
-------------------------------- */
$dogTreatment = 120;
$catTreatment = 80;
$rabbitTreatment = 50;

$totalCosts = ($dogs * $dogTreatment) + ($cats * $catTreatment) + ($rabbits * $rabbitTreatment);
$costsPerAnimal = $totalCosts / $totalAnimals;

$isCostsPerAnimalHigh = $costsPerAnimal > 70;

echo "Aufgabe 6:\n";
echo "Gesamtkosten (EUR): $totalCosts\n";
echo "Kosten pro Tier (EUR): $costsPerAnimal\n";
echo "Kosten pro Tier > 70?\n";
var_dump($isCostsPerAnimalHigh);

echo "\n";

// Hardcore Tierheim-Challenge

// Erstelle ein Mini-System:
// $animalName = "Bello";
// $health = 70;
// $hunger = 40;
// $adopted = false;

// Logik:   - Wenn Hunger > 50 → Füttern (Hunger - 20)
//          - Wenn Health < 50 → Tierarzt (+30 Health)
//          - Prüfe:    -  Ist das Tier gesund UND nicht hungrig?
//                      - Ist es bereit zur Adoption?

// Nutze:   - Vergleichsoperatoren
//          - Logische Operatoren
//          - Rechenoperatoren
//          - echo
//          - var_dump()

/* ----------------------------------
    Hardcore Challenge – Mini-System
------------------------------------- */
$animalName = "Bello";
$health = 70;
$hunger = 40;
$adopted = false;

echo "Hardcore Challenge:\n";
echo "Startwerte: Name=$animalName, Health=$health, Hunger=$hunger, Adopted=" . ($adopted ? "true" : "false") . "\n";

// Regel 1: Wenn Hunger > 50 → füttern (Hunger - 20)
$wasFed = false;
if ($hunger > 50) {
    $hunger = $hunger - 20;
    $wasFed = true;
}

// Regel 2: Wenn Health < 50 → Tierarzt (+30 Health)
$wentToVet = false;
if ($health < 50) {
    $health = $health + 30;
    $wentToVet = true;
}

// Statuschecks
$isNotHungry = $hunger <= 50;      // frei definierte Schwelle: <=50 gilt als ok
$isHealthy = $health >= 70;        // frei definierte Schwelle: >=70 gilt als gesund
$isReadyForAdoption = $isHealthy && $isNotHungry && ($adopted === false);

echo "Wurde gefüttert?\n";
var_dump($wasFed);

echo "War beim Tierarzt?\n";
var_dump($wentToVet);

echo "Aktuelle Werte: Health=$health, Hunger=$hunger\n";

echo "Gesund UND nicht hungrig?\n";
var_dump($isHealthy && $isNotHungry);

echo "Bereit zur Adoption?\n";
var_dump($isReadyForAdoption);

?>