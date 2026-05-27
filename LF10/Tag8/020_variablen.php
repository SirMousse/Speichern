<?php

// Strings
$name = "Hans-Peter\n";
echo $name;

$vorname = "Mousse\n";
echo "Hallo " .$vorname;

// Strings verketten
$stadt = "Berlin\n";
$bezirk = "Steglitz";
echo "Hallo " . $name . " wohnst du auch in " .$bezirk . " , " .$stadt;

//Zahlen
$num = 12;
echo $num."\n";

$num1 = 3.14;
echo $num1."\n";

// Punkt mit Komma in Zahl ersetzen
echo number_format(3.1456789, 4, ".", )."\n";

$sum = 5 + 6;
echo $sum."\n";

$pi = 3.141592653;
echo round($pi, 6)."\n";
?>

