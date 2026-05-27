<?php

// Beipsiel IF-Else

$tier = "Hund";


if ($tier == "Hund") {
    echo "Das Tier bellt.\n";
} else {
    echo "Das Tier macht ein anderes Geräuch.\n";
}


// If - Elseif - Else
$tier = "Katze";

if ($tier == "Hund") {
    echo "Das Tier bellt.\n";
} elseif ($tier == "Katze"){
    echo "Das Tier miaut.\n";
} elseif ($tier == "Kuh") {
    echo "Das Tier muht.\n";
} else {
    echo "Unbekanntes Tier gefunden, bitte um Hilfe!\n";
}

// If - Elseif - Else mit Vergleichsoperatoren

$tiergewicht = 600;

if ($tiergewicht > 500) {
    echo "Das Tier ist sehr schwer!\n";
} elseif ($tiergewicht > 100) {
    echo "Das Tier ist nicht ganz so schwer!\n";
} else {
    echo "Das Tier kann ich hochheben!\n";
}

// Mehrere Bedingungen gleichzeitig 

$tier = "Hund";
$alter = 1;

// UND -> &&
if ($tier == "Hund" && $alter < 3) {
    echo "Das ist ein junger Hund.\n";
} else {
    echo "Der Hund ist etwas älter.\n";
}

// ODER -> || 
if ($tier == "Hund" || $tier == "Katze") {
    echo "Das ist ein Haustier.\n";
} else {
    echo "Es ist ein Alien!\n";
}

// Verschachtelte ifs (Nested ifs)
if ($tier == "Hund"){
    if ($alter > 3) {
        echo "Das ist ein erwachsener Hund.\n";
    } else {
        echo "Ein Welpe!\n";
    }
}






// Mit Konsolo Input
$name = readline("Wie heißt du? ");
echo "Hallo " . $name ;



?>

