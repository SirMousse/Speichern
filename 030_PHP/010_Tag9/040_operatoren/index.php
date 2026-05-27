<?php
// index.php – PHP Operatoren (Lernseite)

// Rechen-Operatoren
$a = 10;
$b = 3;

$summe = $a + $b;
$differenz = $a - $b;
$produkt = $a * $b;
$quotient = $a / $b;
$rest = $a % $b;

// Zuweisungs-Operatoren
$counter = 1;
$counter += 2; // = 3
$counter *= 2; // = 6

// Vergleichs-Operatoren
$x = 5;
$y = "5"; // String!

$gleich = ($x == $y);    // true (Wert gleich)
$identisch = ($x === $y); // false (Typ unterschiedlich)
$ungleich = ($x != $y);
$groesser = ($a > $b);
$kleinerGleich = ($a <= $b);

// Logische Operatoren
$eingeloggt = true;
$istAdmin = false;

$darfSehen = ($eingeloggt && $istAdmin); // true && false = false
$darfIrgendwieRein = ($eingeloggt || $istAdmin); // true || false = true
$nichtEingeloggt = !$eingeloggt; // false

// String-Verkettung
$vorname = "Alex";
$nachname = "Meyer";
$vollerName = $vorname . " " . $nachname;

// Inkrement / Dekrement
$zahl = 5;
$zahl++; // 6
$zahl--; // 5
?>
<!doctype html>
<html lang="de">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Operatoren – Grundlagen</title>
    <link rel="stylesheet" href="styles.css">
    </head>
    <body>

    <header class="header">
        <h1>PHP Operatoren – Grundlagen</h1>
        <p>Rechnen, Vergleichen, Logik & Strings verknüpfen</p>
    </header>

    <main class="content">

        <section class="panel">
        <h2>1) Rechenoperatoren</h2>
        <pre>
    +  Addition
    -  Subtraktion
    *  Multiplikation
    /  Division
    %  Modulo (Rest)
        </pre>

        <div class="demo">
            <p><?= $a ?> + <?= $b ?> = <strong><?= $summe ?></strong></p>
            <p><?= $a ?> - <?= $b ?> = <strong><?= $differenz ?></strong></p>
            <p><?= $a ?> * <?= $b ?> = <strong><?= $produkt ?></strong></p>
            <p><?= $a ?> / <?= $b ?> = <strong><?= $quotient ?></strong></p>
            <p><?= $a ?> % <?= $b ?> = <strong><?= $rest ?></strong> (Rest)</p>
        </div>
        </section>

        <section class="panel">
        <h2>2) Zuweisungsoperatoren</h2>
        <pre>
    $counter = 1;
    $counter += 2;  // +2
    $counter *= 2;  // *2
        </pre>

        <div class="demo">
            <p><strong>Counter:</strong> <?= $counter ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>3) Vergleichsoperatoren (wichtig!)</h2>
        <p>
            Unterschied zwischen <code>==</code> und <code>===</code>:
        </p>

        <pre>
    $x == $y    // Wert gleich
    $x === $y   // Wert + Typ gleich
        </pre>

        <div class="demo">
            <p><strong>$x:</strong> <?= $x ?> (Integer)</p>
            <p><strong>$y:</strong> <?= $y ?> (String)</p>
            <p><strong>== :</strong> <?= $gleich ? "true" : "false" ?></p>
            <p><strong>=== :</strong> <?= $identisch ? "true" : "false" ?></p>
            <p><strong>!= :</strong> <?= $ungleich ? "true" : "false" ?></p>
            <p><strong>&gt; :</strong> <?= $groesser ? "true" : "false" ?></p>
            <p><strong>&lt;= :</strong> <?= $kleinerGleich ? "true" : "false" ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>4) Logische Operatoren</h2>
        <pre>
    &&   UND
    ||   ODER
    !    NICHT
        </pre>

        <div class="demo">
            <p><strong>Eingeloggt:</strong> <?= $eingeloggt ? "true" : "false" ?></p>
            <p><strong>Admin:</strong> <?= $istAdmin ? "true" : "false" ?></p>
            <p><strong>Darf sehen (&&):</strong> <?= $darfSehen ? "true" : "false" ?></p>
            <p><strong>Darf rein (||):</strong> <?= $darfIrgendwieRein ? "true" : "false" ?></p>
            <p><strong>Nicht eingeloggt (!):</strong> <?= $nichtEingeloggt ? "true" : "false" ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>5) String-Verkettung (.)</h2>
        <pre>
    $vollerName = $vorname . " " . $nachname;
        </pre>

        <div class="demo">
            <p><strong>Voller Name:</strong> <?= $vollerName ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>6) Inkrement & Dekrement</h2>
        <pre>
    $zahl++;
    $zahl--;
        </pre>

        <div class="demo">
            <p><strong>Zahl nach ++ und --:</strong> <?= $zahl ?></p>
        </div>
        </section>

        <section class="panel tasks">
        <h2>Mini-Aufgaben</h2>
        <ol>
            <li>Rechne 20 + 4 und zeige das Ergebnis.</li>
            <li>Prüfe mit <code>===</code>, ob <code>3</code> und <code>"3"</code> identisch sind.</li>
            <li>Baue einen String aus Vorname + Nachname.</li>
            <li>Nutze Modulo, um zu prüfen, ob eine Zahl gerade ist.</li>
            <li>Setze eine Bedingung: Eingeloggt <strong>und</strong> Admin → Zugriff erlaubt.</li>
        </ol>
        </section>

    </main>

    <footer class="footer">
        <p>PHP Grundlagen – Operatoren | Lernseite (HTML + CSS + PHP)</p>
    </footer>

    </body>
</html>

