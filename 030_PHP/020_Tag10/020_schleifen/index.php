<?php
// index.php – Schleifen in PHP

// Beispieldaten
$zahlen = [1, 2, 3, 4, 5];
$farben = ["Rot", "Grün", "Blau"];
$counter = 1;
$max = 3;

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
    <title>PHP Schleifen – Grundlagen</title>
    <link rel="stylesheet" href="styles.css">
    </head>
    <body>

    <header class="header">
        <h1>PHP Schleifen – Grundlagen</h1>
        <p>for · while · do…while · foreach</p>
    </header>

    <main class="content">

        <section class="panel">
        <h2>1) Was ist eine Schleife?</h2>
        <p>
            Eine <strong>Schleife</strong> wiederholt Code, solange eine Bedingung erfüllt ist
            oder über eine Liste von Werten.
        </p>

        <pre>
    for ($i = 1; $i <= 3; $i++) {
    echo $i;
    }
        </pre>
        </section>

        <section class="panel">
        <h2>2) for-Schleife (Zählschleife)</h2>
        <p>
            Gut, wenn du weißt, wie oft etwas passieren soll.
        </p>

        <pre>
    for ($i = 1; $i <= 5; $i++) {
    echo $i;
    }
        </pre>

        <div class="demo">
            <p><strong>Ausgabe:</strong>
            <?php
                for ($i = 1; $i <= 5; $i++) {
                echo $i . " ";
                }
            ?>
            </p>
        </div>
        </section>

        <section class="panel">
        <h2>3) while-Schleife</h2>
        <p>
            Wiederholt, solange die Bedingung <strong>true</strong> ist.
        </p>

        <pre>
    $i = 1;
    while ($i <= 3) {
    echo $i;
    $i++;
    }
        </pre>

        <div class="demo">
            <p><strong>Ausgabe:</strong>
            <?php
                $i = 1;
                while ($i <= 3) {
                echo $i . " ";
                $i++;
                }
            ?>
            </p>
        </div>
        </section>

        <section class="panel">
        <h2>4) do…while (mindestens einmal)</h2>
        <p>
            Der Code wird <strong>mindestens einmal</strong> ausgeführt – egal, ob die Bedingung am Anfang stimmt.
        </p>

        <pre>
    $i = 5;
    do {
    echo $i;
    $i++;
    } while ($i <= 3);
        </pre>

        <div class="demo">
            <p><strong>Ausgabe (startet bei 5):</strong>
            <?php
                $i = 5;
                do {
                echo $i . " ";
                $i++;
                } while ($i <= 3);
            ?>
            </p>
        </div>
        </section>

        <section class="panel">
        <h2>5) foreach – für Arrays (am wichtigsten!)</h2>
        <p>
            Mit <code>foreach</code> gehst du bequem durch Listen (Arrays).
        </p>

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
        <h2>6) break & continue</h2>
        <ul>
            <li><code>break</code> – beendet die Schleife sofort</li>
            <li><code>continue</code> – überspringt den aktuellen Durchlauf</li>
        </ul>

        <pre>
    for ($i = 1; $i <= 5; $i++) {
    if ($i === 3) continue; // 3 überspringen
    if ($i === 5) break;    // bei 5 stoppen
    echo $i;
    }
        </pre>

        <div class="demo">
            <p><strong>Ausgabe:</strong>
            <?php
                for ($i = 1; $i <= 5; $i++) {
                if ($i === 3) continue;
                if ($i === 5) break;
                echo $i . " ";
                }
            ?>
            </p>
        </div>
        </section>

        <section class="panel tasks">
        <h2>Mini-Aufgaben</h2>
        <ol>
            <li>Gib die Zahlen 1 bis 10 mit einer <code>for</code>-Schleife aus.</li>
            <li>Erstelle ein Array mit 5 Begriffen und gib sie mit <code>foreach</code> als Liste aus.</li>
            <li>Nutze <code>while</code>, um von 10 herunterzuzählen.</li>
            <li>Überspringe in einer Schleife alle geraden Zahlen (<code>continue</code>).</li>
            <li>Beende eine Schleife, wenn eine Zahl größer als 7 wird (<code>break</code>).</li>
        </ol>
        </section>

    </main>

    <footer class="footer">
        <p>PHP Grundlagen – Schleifen | Lernseite (HTML + CSS + PHP)</p>
    </footer>

    </body>
</html>
