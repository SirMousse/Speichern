<?php
// for -Schleife -> man weiß, wie oft es passieren soll

// for (Start; Bedingung; Veränderung){
//      CODE
// }

for ($i = 1; $i <= 5; $i++){
    echo "Hund hat $i mal gebellt.\n";
}

// while-Schleife -> weiß man nicht, wie oft es passieren soll
// Gefahr von Endlosschleifen

// while (Bedingung) {
//    CODE
// }

$futter = 3;

while ($futter > 0){
    echo "Die Katze bekommt Futter.\n";
    $futter--;
}

// do-while -> wird mindestens einmal ausgeführt!

// do {
//      CODE
// } while (Bedingung);


$affe = 0;

do {
    echo "Der Affe springt.\n";
    $affe++;
} while ($affe < 3);


// foreach -> wichtigste Schleife in PHP

$tiere = ["Hund", "Katze", "Kuh", "Affe", "Goldhamster"];

foreach ($tiere as $tier) {
    echo "$tier macht ein Geräuch.\n";
}

$tiere =[
    "Hund" => "bellt",
    "Katze" => "miaut",
    "Kuh" => "muht"
];

foreach ($tiere as $tier => $geraeusch) {
    echo "$tier $geraeusch \n";
}


// Verschachtelten Schleifen
// -> Innere Schleife läuft komplett durch -> danach äußere Schleife 
// Die äußere Schleife bestimmt wie oft, die innere Schleife bestimmt was genau passiert.

for ($hund = 1; $hund <= 3; $hund++){

    for ($spielzeug = 1; $spielzeug <= 2; $spielzeug++) {
        echo "Hund $hund spielt mit dem Spielzeug $spielzeug.\n";
    }
}

// Schleifen und if Anweisungen kombinieren

$tiere = ["Hund", "Katze", "Kuh", "Affe", "Goldhamster"];

foreach ($tiere as $tier) {

    if ($tier === "Hund") {
        echo "Gefunden: Hund!";
    }
}

// Konstante definieren
define("PI", 3.14159);

echo PI;
?>