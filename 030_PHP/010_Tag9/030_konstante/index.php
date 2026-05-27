<?php
// index.php – PHP Konstanten (Lernseite)

// Konstanten definieren (empfohlen: Großbuchstaben)
define("SEITEN_TITEL", "PHP Konstanten – Grundlagen");
define("MAX_TEILNEHMER", 24);
define("KURSNAME", "Webentwicklung");
define("VERSION", 1.0);

// PHP 7+: Alternative Schreibweise (const)
const SCHULE = "Code Academy";

// Beispiel: Konstante für Konfiguration
define("APP_NAME", "Mini-Portal");
define("SUPPORT_EMAIL", "support@example.com");

// Vergleich: Variable (änderbar)
$versionVariable = 1.1;
?>
<!doctype html>
<html lang="de">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= SEITEN_TITEL ?></title>
    <link rel="stylesheet" href="styles.css">
    </head>
    <body>

    <header class="header">
        <h1><?= SEITEN_TITEL ?></h1>
        <p>Was sind Konstanten, wie benutzt man sie und wann sind sie sinnvoll?</p>
    </header>

    <main class="content">

        <section class="panel">
        <h2>1) Was ist eine Konstante?</h2>
        <p>
            Eine <strong>Konstante</strong> ist ein fester Wert, der sich im Code
            <strong>nicht mehr ändern darf</strong>.
            Im Gegensatz zu Variablen (z. B. <code>$x</code>) beginnen Konstanten <strong>nicht</strong> mit <code>$</code>.
        </p>

        <pre>
    define("MAX_TEILNEHMER", 24);
    const SCHULE = "Code Academy";
        </pre>
        </section>

        <section class="panel">
        <h2>2) Konstanten ausgeben</h2>
        <p>
            Konstanten werden ohne <code>$</code> benutzt:
        </p>

        <pre>
    echo MAX_TEILNEHMER;
    echo SCHULE;
        </pre>

        <div class="demo">
            <p><strong>Max. Teilnehmer:</strong> <?= MAX_TEILNEHMER ?></p>
            <p><strong>Schule:</strong> <?= SCHULE ?></p>
            <p><strong>Kurs:</strong> <?= KURSNAME ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>3) Konstanten vs. Variablen</h2>
        <p>
            Konstanten können <strong>nicht geändert</strong> werden.
        </p>

        <pre>
    $versionVariable = 1.1; // erlaubt
    // VERSION = 2.0;       // Fehler (nicht erlaubt)
        </pre>

        <div class="demo">
            <p><strong>Version (Konstante):</strong> <?= VERSION ?></p>
            <p><strong>Version (Variable):</strong> <?= $versionVariable ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>4) Typische Einsatzfälle für Konstanten</h2>
        <ul>
            <li>Konfigurationen (App-Name, Version)</li>
            <li>Grenzwerte (max. Teilnehmer)</li>
            <li>Texte, die sich nie ändern (Copyright)</li>
            <li>Pfade & URLs</li>
        </ul>

        <div class="demo">
            <p><strong>App:</strong> <?= APP_NAME ?></p>
            <p><strong>Support:</strong> <?= SUPPORT_EMAIL ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>5) define() vs. const – wann was?</h2>
        <ul>
            <li><code>define()</code> → kann auch in Bedingungen genutzt werden</li>
            <li><code>const</code> → moderner Stil, übersichtlich im Code-Kopf</li>
        </ul>

        <pre>
    define("API_URL", "https://example.com/api");
    const TIMEOUT = 30;
        </pre>
        </section>

        <section class="panel tasks">
        <h2>Mini-Aufgaben</h2>
        <ol>
            <li>Erstelle eine Konstante <code>SCHULNAME</code> und gib sie aus.</li>
            <li>Erstelle eine Konstante <code>MAX_DATEIGROESSE</code>.</li>
            <li>Ersetze eine Variable durch eine Konstante, wenn sich der Wert nie ändern soll.</li>
            <li>Lege eine Konstante für eine URL an.</li>
            <li>Gib eine Konstante in einer Überschrift aus.</li>
        </ol>
        </section>

    </main>

    <footer class="footer">
        <p><?= APP_NAME ?> · Version <?= VERSION ?> · Support: <?= SUPPORT_EMAIL ?></p>
    </footer>

    </body>
</html>
