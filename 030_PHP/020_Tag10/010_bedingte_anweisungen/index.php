<?php
// index.php – Bedingte Anweisungen in PHP

// Beispiel-Variablen
$alter = 17;
$eingeloggt = true;
$istAdmin = false;

$punkte = 68;

// Funktion für sichere Ausgabe
function e(string $v): string {
    return htmlspecialchars($v, ENT_QUOTES, "UTF-8");
}
?>
<!doctype html>
<html lang="de">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP if / else – Bedingte Anweisungen</title>
    <link rel="stylesheet" href="styles.css">
    </head>
    <body>

    <header class="header">
        <h1>PHP: Fallunterscheidung (if / else)</h1>
        <p>Mit Bedingungen entscheidest du, welcher Code ausgeführt wird.</p>
    </header>

    <main class="content">

        <section class="panel">
        <h2>1) Was ist eine Bedingung?</h2>
        <p>
            Mit <code>if</code> prüfst du eine Bedingung.  
            Ist sie <strong>true</strong>, wird der Code im Block ausgeführt.
        </p>

        <pre>
    if ($alter >= 18) {
    echo "Volljährig";
    }
        </pre>
        </section>

        <section class="panel">
        <h2>2) if / else</h2>
        <pre>
    if ($alter >= 18) {
    echo "Volljährig";
    } else {
    echo "Noch nicht volljährig";
    }
        </pre>

        <div class="demo">
            <p><strong>Alter:</strong> <?= $alter ?></p>
            <p><strong>Ergebnis:</strong>
            <?php
                if ($alter >= 18) {
                echo "Volljährig";
                } else {
                echo "Noch nicht volljährig";
                }
            ?>
            </p>
        </div>
        </section>

        <section class="panel">
        <h2>3) elseif – mehrere Fälle</h2>
        <pre>
    if ($punkte >= 90) {
    echo "Sehr gut";
    } elseif ($punkte >= 75) {
    echo "Gut";
    } elseif ($punkte >= 50) {
    echo "Bestanden";
    } else {
    echo "Nicht bestanden";
    }
        </pre>

        <div class="demo">
            <p><strong>Punkte:</strong> <?= $punkte ?></p>
            <p><strong>Bewertung:</strong>
            <?php
                if ($punkte >= 90) {
                echo "Sehr gut";
                } elseif ($punkte >= 75) {
                echo "Gut";
                } elseif ($punkte >= 50) {
                echo "Bestanden";
                } else {
                echo "Nicht bestanden";
                }
            ?>
            </p>
        </div>
        </section>

        <section class="panel">
        <h2>4) Bedingungen mit Operatoren</h2>
        <pre>
    if ($eingeloggt && $istAdmin) {
    echo "Adminbereich";
    } else {
    echo "Kein Zugriff";
    }
        </pre>

        <div class="demo">
            <p><strong>Eingeloggt:</strong> <?= $eingeloggt ? "true" : "false" ?></p>
            <p><strong>Admin:</strong> <?= $istAdmin ? "true" : "false" ?></p>
            <p><strong>Zugriff:</strong>
            <?php
                if ($eingeloggt && $istAdmin) {
                echo "Adminbereich";
                } else {
                echo "Kein Zugriff";
                }
            ?>
            </p>
        </div>
        </section>

        <section class="panel">
        <h2>5) Kurzform: Ternärer Operator</h2>
        <p>
            Kurze if/else-Schreibweise für einfache Fälle:
        </p>

        <pre>
    echo $eingeloggt ? "Willkommen!" : "Bitte einloggen";
        </pre>

        <div class="demo">
            <p>
            <?= $eingeloggt ? "Willkommen!" : "Bitte einloggen" ?>
            </p>
        </div>
        </section>

        <section class="panel">
        <h2>6) Typische Fehler</h2>
        <ul>
            <li><code>=</code> statt <code>==</code> oder <code>===</code></li>
            <li>Vergessen der geschweiften Klammern</li>
            <li>Logikfehler in Bedingungen</li>
        </ul>

        <pre>
    if ($alter = 18) {  // falsch: Zuweisung!
    ...
    }
        </pre>
        </section>

        <section class="panel tasks">
        <h2>Mini-Aufgaben</h2>
        <ol>
            <li>Baue eine Bedingung: Wenn Alter ≥ 18 → „Zutritt erlaubt“.</li>
            <li>Prüfe mit <code>elseif</code> Noten (sehr gut / gut / ok / schlecht).</li>
            <li>Zeige „Willkommen“ nur, wenn eingeloggt.</li>
            <li>Nutze den ternären Operator für eine kurze Ausgabe.</li>
            <li>Kombiniere zwei Bedingungen mit <code>&&</code>.</li>
        </ol>
        </section>

    </main>

    <footer class="footer">
        <p>PHP Grundlagen – if / else | Lernseite (HTML + CSS + PHP)</p>
    </footer>

    </body>
</html>
