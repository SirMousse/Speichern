<?php
// index.php – Zufallszahlen in PHP

// 1) Einfache Zufallszahl
$rand1 = rand(1, 10);

// 2) Moderne Variante (empfohlen)
$rand2 = random_int(1, 10);

// 3) Zufällige Auswahl aus Array
$farben = ["Rot", "Grün", "Blau", "Gelb", "Lila"];
$zufallsFarbe = $farben[array_rand($farben)];

// 4) Würfel (1–6)
$wuerfel = random_int(1, 6);

// 5) Mehrere Zufallszahlen erzeugen (mit Schleife)
$zufallsZahlen = [];
for ($i = 0; $i < 5; $i++) {
    $zufallsZahlen[] = random_int(1, 100);
}

// Sichere Ausgabe
function e(string $v): string {
    return htmlspecialchars($v, ENT_QUOTES, "UTF-8");
}
?>
<!doctype html>
<html lang="de">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Zufallszahlen – Grundlagen</title>
    <link rel="stylesheet" href="styles.css">
    </head>
    <body>

    <header class="header">
        <h1>PHP Zufallszahlen</h1>
        <p>Zufällige Zahlen erzeugen & aus Listen auswählen</p>
    </header>

    <main class="content">

        <section class="panel">
        <h2>1) Zufallszahl zwischen 1 und 10</h2>
        <pre>
    $zahl = random_int(1, 10);
        </pre>

        <div class="demo">
            <p><strong>Zufallszahl:</strong> <?= $rand2 ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>2) rand() vs. random_int()</h2>
        <ul>
            <li><code>rand(1, 10)</code> – älter, nicht kryptografisch sicher</li>
            <li><code>random_int(1, 10)</code> – moderner & sicherer (empfohlen)</li>
        </ul>

        <div class="demo">
            <p><strong>rand():</strong> <?= $rand1 ?></p>
            <p><strong>random_int():</strong> <?= $rand2 ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>3) Zufälliges Element aus einem Array</h2>
        <pre>
    $farbe = $farben[array_rand($farben)];
        </pre>

        <div class="demo">
            <p><strong>Zufällige Farbe:</strong> <?= e($zufallsFarbe) ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>4) Würfel simulieren (1–6)</h2>
        <pre>
    $wuerfel = random_int(1, 6);
        </pre>

        <div class="demo">
            <p><strong>Würfelwurf:</strong> 🎲 <?= $wuerfel ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>5) Mehrere Zufallszahlen (mit Schleife)</h2>
        <pre>
    $zahlen = [];
    for ($i = 0; $i < 5; $i++) {
    $zahlen[] = random_int(1, 100);
    }
        </pre>

        <div class="demo">
            <ul>
            <?php foreach ($zufallsZahlen as $z): ?>
                <li><?= $z ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
        </section>

        <section class="panel">
        <h2>6) Typische Einsatzfälle</h2>
        <ul>
            <li>Quiz: zufällige Frage anzeigen</li>
            <li>Spiele (Würfel, Karten)</li>
            <li>Zufällige Empfehlungen</li>
            <li>Codes / Tokens generieren (mit <code>random_int</code>)</li>
        </ul>
        </section>

        <section class="panel tasks">
        <h2>Mini-Aufgaben</h2>
        <ol>
            <li>Erzeuge eine Zufallszahl zwischen 1 und 100.</li>
            <li>Ziehe zufällig einen Namen aus einem Array.</li>
            <li>Simuliere zwei Würfelwürfe.</li>
            <li>Erzeuge 10 Zufallszahlen und gib sie als Liste aus.</li>
            <li>Baue ein Mini-Spiel: „Zahl raten“ (Zahl 1–10 anzeigen).</li>
        </ol>
        </section>

    </main>

    <footer class="footer">
        <p>PHP Grundlagen – Zufallszahlen | Lernseite (HTML + CSS + PHP)</p>
    </footer>

</body>
</html>
