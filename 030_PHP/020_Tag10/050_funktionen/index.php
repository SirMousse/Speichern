<?php
// index.php – Funktionen in PHP

// 1) Einfache Funktion
function hallo() {
    return "Hallo aus der Funktion!";
}

// 2) Funktion mit Parametern
function begruessung(string $name): string {
    return "Hallo $name!";
}

// 3) Funktion mit Rückgabewert (Rechnung)
function addieren(int $a, int $b): int {
    return $a + $b;
}

// 4) Optionale Parameter mit Default-Wert
function willkommen(string $name = "Gast"): string {
    return "Willkommen, $name!";
}

// 5) Funktion mit Logik
function istGerade(int $zahl): bool {
    return $zahl % 2 === 0;
}

// 6) Funktion für sichere Ausgabe (wiederverwendbar)
function e(string $v): string {
    return htmlspecialchars($v, ENT_QUOTES, "UTF-8");
}

// 7) Mini-Helfer: zufällige Farbe
function zufallsFarbe(array $farben): string {
    return $farben[array_rand($farben)];
}

// Beispieldaten
$name = "Alex";
$a = 4;
$b = 7;
$farben = ["Rot", "Grün", "Blau", "Gelb"];
$zahl = random_int(1, 10);
?>
<!doctype html>
<html lang="de">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Funktionen – Grundlagen</title>
    <link rel="stylesheet" href="styles.css">
    </head>
    <body>

    <header class="header">
        <h1>PHP Funktionen – Grundlagen</h1>
        <p>Code wiederverwenden, strukturieren & sauber halten</p>
    </header>

    <main class="content">

        <section class="panel">
        <h2>1) Was ist eine Funktion?</h2>
        <p>
            Eine <strong>Funktion</strong> ist ein wiederverwendbarer Code-Block.
            Du definierst sie einmal und kannst sie beliebig oft aufrufen.
        </p>

        <pre>
    function hallo() {
    return "Hallo aus der Funktion!";
    }

    echo hallo();
        </pre>

        <div class="demo">
            <p><?= e(hallo()) ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>2) Funktionen mit Parametern</h2>
        <pre>
    function begruessung($name) {
    return "Hallo $name!";
    }
        </pre>

        <div class="demo">
            <p><?= e(begruessung($name)) ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>3) Rückgabewerte (return)</h2>
        <pre>
    function addieren($a, $b) {
    return $a + $b;
    }
        </pre>

        <div class="demo">
            <p><?= $a ?> + <?= $b ?> = <strong><?= addieren($a, $b) ?></strong></p>
        </div>
        </section>

        <section class="panel">
        <h2>4) Default-Parameter (optional)</h2>
        <pre>
    function willkommen($name = "Gast") {
    return "Willkommen, $name!";
    }
        </pre>

        <div class="demo">
            <p><?= e(willkommen()) ?></p>
            <p><?= e(willkommen($name)) ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>5) Funktionen mit Logik (Boolean zurückgeben)</h2>
        <pre>
    function istGerade($zahl) {
    return $zahl % 2 === 0;
    }
        </pre>

        <div class="demo">
            <p><strong>Zahl:</strong> <?= $zahl ?></p>
            <p><strong>Gerade?</strong> <?= istGerade($zahl) ? "Ja" : "Nein" ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>6) Funktionen praktisch nutzen</h2>
        <p>
            Beispiel: zufällige Farbe aus einer Liste auswählen:
        </p>

        <pre>
    function zufallsFarbe(array $farben): string {
    return $farben[array_rand($farben)];
    }
        </pre>

        <div class="demo">
            <p><strong>Zufallsfarbe:</strong> <?= e(zufallsFarbe($farben)) ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>7) Typen (optional, aber empfehlenswert)</h2>
        <p>
            Du kannst Parameter- und Rückgabe-Typen angeben:
        </p>

        <pre>
    function addieren(int $a, int $b): int { ... }
        </pre>

        <p class="hint">
            👉 Für Anfänger ok, Typen erstmal wegzulassen.  
            Später sehr hilfreich für sauberen Code.
        </p>
        </section>

        <section class="panel tasks">
        <h2>Mini-Aufgaben</h2>
        <ol>
            <li>Schreibe eine Funktion <code>quadrieren($x)</code>, die $x * $x zurückgibt.</li>
            <li>Schreibe eine Funktion <code>istVolljaehrig($alter)</code>, die true/false zurückgibt.</li>
            <li>Schreibe eine Funktion, die einen zufälligen Namen aus einem Array zieht.</li>
            <li>Baue eine Funktion <code>formatName($vor, $nach)</code>.</li>
            <li>Nutze eine Funktion, um Text sicher auszugeben.</li>
        </ol>
        </section>

    </main>

    <footer class="footer">
        <p>PHP Grundlagen – Funktionen | Lernseite (HTML + CSS + PHP)</p>
    </footer>

    </body>
</html>
