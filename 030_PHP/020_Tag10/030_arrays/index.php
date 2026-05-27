<?php
// index.php – Arrays & Superglobals in PHP

// 1) Numerische Arrays (Listen)
$zahlen = [10, 20, 30];
$farben = ["Rot", "Grün", "Blau"];



// 2) Assoziative Arrays (Schlüssel => Wert)
$user = [
    "name" => "Alex",
    "alter" => 22,
    "stadt" => "Berlin",
    "rolle" => "Teilnehmer"
];

// 3) Mehrdimensionale Arrays (Array im Array)
$users = [
    ["name" => "Alex", "rolle" => "Admin"],
    ["name" => "Sam", "rolle" => "Teilnehmer"],
    ["name" => "Kim", "rolle" => "Teilnehmer"]
];

// 4) Superglobals (globale Arrays)
$getDemo = $_GET["demo"] ?? "nicht gesetzt";
$postDemo = $_POST["demo"] ?? "nicht gesetzt";
$serverName = $_SERVER["SERVER_NAME"] ?? "unbekannt";

// 5) Hilfsfunktion für sichere Ausgabe
function e(string $v): string {
    return htmlspecialchars($v, ENT_QUOTES, "UTF-8");
}
?>
<!doctype html>
<html lang="de">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Arrays & Superglobals</title>
    <link rel="stylesheet" href="styles.css">
    </head>
    <body>

    <header class="header">
        <h1>PHP Arrays & globale Arrays (Superglobals)</h1>
        <p>Listen speichern, durchlaufen & Formulardaten lesen</p>
    </header>

    <main class="content">

        <section class="panel">
        <h2>1) Was ist ein Array?</h2>
        <p>
            Ein <strong>Array</strong> ist eine Liste von Werten in einer Variable.
        </p>

        <pre>
    $farben = ["Rot", "Grün", "Blau"];
        </pre>

        <div class="demo">
            <p><strong>Erstes Element:</strong> <?= e($farben[0]) ?></p>
            <p><strong>Zweites Element:</strong> <?= e($farben[1]) ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>2) foreach – Arrays anzeigen</h2>
        <pre>
    foreach ($farben as $farbe) {
    echo $farbe;
    }
        </pre>

        <div class="demo">
            <ul>
            <?php foreach ($farben as $farbe): ?>
                <li><?= e($farbe) ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
        </section>

        <section class="panel">
        <h2>3) Assoziative Arrays</h2>
        <p>
            Schlüssel → Wert (wie ein Mini-Objekt).
        </p>

        <pre>
    $user = [
    "name" => "Alex",
    "alter" => 22
    ];
        </pre>

        <div class="demo">
            <p><strong>Name:</strong> <?= e($user["name"]) ?></p>
            <p><strong>Alter:</strong> <?= $user["alter"] ?></p>
            <p><strong>Rolle:</strong> <?= e($user["rolle"]) ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>4) Mehrdimensionale Arrays</h2>
        <p>
            Arrays können Arrays enthalten.
        </p>

        <pre>
    $users = [
    ["name" => "Alex", "rolle" => "Admin"],
    ["name" => "Sam", "rolle" => "Teilnehmer"]
    ];
        </pre>

        <div class="demo">
            <ul>
            <?php foreach ($users as $u): ?>
                <li><?= e($u["name"]) ?> – <?= e($u["rolle"]) ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
        </section>

        <section class="panel">
        <h2>5) Superglobals (globale Arrays)</h2>
        <p>
            Superglobals sind vordefinierte Arrays, die überall in PHP verfügbar sind.
        </p>
        <ul>
            <li><code>$_GET</code> – Daten aus der URL</li>
            <li><code>$_POST</code> – Daten aus Formularen</li>
            <li><code>$_SERVER</code> – Server-Infos</li>
            <li><code>$_SESSION</code> – Sitzungsdaten</li>
            <li><code>$_COOKIE</code> – Cookies</li>
        </ul>

        <div class="demo">
            <p><strong>$_GET["demo"]:</strong> <?= e($getDemo) ?></p>
            <p><strong>$_POST["demo"]:</strong> <?= e($postDemo) ?></p>
            <p><strong>Servername:</strong> <?= e($serverName) ?></p>

            <p>
            Teste <code>$_GET</code>:  
            <a href="?demo=Hallo">?demo=Hallo</a>
            </p>
        </div>
        </section>

        <section class="panel">
        <h2>6) Mini-Formular für $_POST</h2>

        <form class="form" method="post">
            <label for="demo">POST-Demo</label>
            <input id="demo" name="demo" type="text" placeholder="Text eingeben">
            <button type="submit">Senden</button>
        </form>
        </section>

        <section class="panel tasks">
        <h2>Mini-Aufgaben</h2>
        <ol>
            <li>Erstelle ein Array mit 5 Begriffen und gib sie mit <code>foreach</code> aus.</li>
            <li>Erstelle ein assoziatives Array für ein Produkt (Name, Preis, Kategorie).</li>
            <li>Erstelle ein mehrdimensionales Array mit 3 Nutzern.</li>
            <li>Lies einen Wert aus <code>$_GET</code> aus.</li>
            <li>Lies einen Wert aus <code>$_POST</code> aus.</li>
        </ol>
        </section>

    </main>

    <footer class="footer">
        <p>PHP Grundlagen – Arrays & Superglobals | Lernseite (HTML + CSS + PHP)</p>
    </footer>

    </body>
</html>
