<?php
// index.php – PHP Variablen (Lernseite)

// Beispiel-Variablen
$name = "Alex";
$alter = 21;
$kurs = "Webentwicklung";
$istAngemeldet = true;

// Rechenbeispiel
$a = 7;
$b = 5;
$summe = $a + $b;

// Array-Beispiel (kleiner Ausblick)
$skills = ["HTML", "CSS", "PHP"];
?>
<!doctype html>
<html lang="de">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Variablen – Grundlagen</title>
    <link rel="stylesheet" href="styles.css">
    </head>
    <body>

    <header class="header">
        <h1>PHP Variablen – Grundlagen</h1>
        <p>Was sind Variablen, wie benutzt man sie und wofür braucht man sie?</p>
    </header>

    <main class="content">

        <section class="panel">
        <h2>1) Was ist eine Variable?</h2>
        <p>
            Eine Variable ist ein <strong>Behälter für Werte</strong>.  
            In PHP beginnen Variablen immer mit einem <code>$</code>-Zeichen.
        </p>

        <pre>
    $name = "Alex";
    $alter = 21;
        </pre>
        </section>

        <section class="panel">
        <h2>2) Variablen ausgeben</h2>
        <p>
            Mit <code>echo</code> gibst du Variablen aus:
        </p>

        <pre>
    echo $name;
    echo $alter;
        </pre>

        <div class="demo">
            <p><strong>Name:</strong> <?= $name ?></p>
            <p><strong>Alter:</strong> <?= $alter ?></p>
            <p><strong>Kurs:</strong> <?= $kurs ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>3) Variablen in Text einbauen</h2>
        <p>
            In doppelten Anführungszeichen kannst du Variablen direkt einsetzen:
        </p>

        <pre>
    echo "Hallo $name, du bist $alter Jahre alt.";
        </pre>

        <div class="demo">
            <p><?= "Hallo $name, du bist $alter Jahre alt." ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>4) Rechnen mit Variablen</h2>
        <pre>
    $a = 7;
    $b = 5;
    $summe = $a + $b;
        </pre>

        <div class="demo">
            <p><?= $a ?> + <?= $b ?> = <strong><?= $summe ?></strong></p>
        </div>
        </section>

        <section class="panel">
        <h2>5) Datentypen (kurz & wichtig)</h2>
        <ul>
            <li><strong>String:</strong> Text → <code>"Alex"</code></li>
            <li><strong>Integer:</strong> Ganze Zahl → <code>21</code></li>
            <li><strong>Float:</strong> Kommazahl → <code>3.14</code></li>
            <li><strong>Boolean:</strong> Wahr/Falsch → <code>true</code> / <code>false</code></li>
            <li><strong>Array:</strong> Liste von Werten → <code>["HTML", "CSS"]</code></li>
        </ul>

        <div class="demo">
            <p><strong>Angemeldet?</strong> <?= $istAngemeldet ? "Ja" : "Nein" ?></p>
            <p><strong>Skills:</strong> <?= implode(", ", $skills) ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>6) HTML + PHP mischen (wichtig!)</h2>
        <p>
            Du kannst PHP in HTML einbetten:
        </p>

        <pre>
    <h3><?= $kurs ?></h3>
        </pre>

        <div class="demo">
            <h3><?= $kurs ?></h3>
        </div>
        </section>

        <section class="panel tasks">
        <h2>Mini-Aufgaben</h2>
        <ol>
            <li>Ändere den Namen in <code>$name</code>.</li>
            <li>Erstelle eine Variable <code>$stadt</code> und gib sie aus.</li>
            <li>Rechne 12 + 8 mit Variablen.</li>
            <li>Erstelle ein Array mit 3 Lieblingssprachen und zeige sie an.</li>
            <li>Gib abhängig von <code>$istAngemeldet</code> „Willkommen!“ oder „Bitte einloggen“ aus.</li>
        </ol>
        </section>

    </main>

    <footer class="footer">
        <p>PHP Grundlagen – Variablen | Lernseite (HTML + CSS + PHP)</p>
    </footer>

    </body>
</html>
