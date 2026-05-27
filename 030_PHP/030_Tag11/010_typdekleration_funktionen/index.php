<?php
// index.php – Typdeklarierung in PHP-Funktionen

// (Optional) Strikter Modus: erzwingt Typen strenger
// declare(strict_types=1);

// 1) Typisierte Parameter + Rückgabewerte
function addieren(int $a, int $b): int {
    return $a + $b;
}

// 2) String-Typ
function begruessung(string $name): string {
    return "Hallo $name!";
}

// 3) Boolean zurückgeben
function istVolljaehrig(int $alter): bool {
    return $alter >= 18;
}

// 4) Array-Typ
function zufallsEintrag(array $werte): string {
    return $werte[array_rand($werte)];
}

// 5) Nullable Typen (kann auch null sein)
function findUserName(?string $name): string {
    return $name ?? "Gast";
}

// 6) Union Types (PHP 8+): mehrere mögliche Typen
function laengeVonText(string|int $wert): int {
    return strlen((string)$wert);
}

// Sichere Ausgabe
function e(string $v): string {
    return htmlspecialchars($v, ENT_QUOTES, "UTF-8");
}

// Beispieldaten
$a = 3;
$b = 5;
$name = "Alex";
$alter = 17;
$farben = ["Rot", "Grün", "Blau"];
$maybeName = null;
$nummerAlsText = 12345;
?>
<!doctype html>
<html lang="de">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Typdeklarierung in Funktionen</title>
    <link rel="stylesheet" href="styles.css">
    </head>
    <body>

    <header class="header">
        <h1>PHP Typdeklarierung in Funktionen</h1>
        <p>Parameter- & Rückgabe-Typen für sauberen, sicheren Code</p>
    </header>

    <main class="content">

        <section class="panel">
        <h2>1) Warum Typen verwenden?</h2>
        <ul>
            <li>Weniger Fehler</li>
            <li>Code ist verständlicher</li>
            <li>IDE/Editor kann besser helfen</li>
            <li>Fehler werden früher erkannt</li>
        </ul>
        </section>

        <section class="panel">
        <h2>2) Typisierte Parameter & Rückgabewerte</h2>
        <pre>
    function addieren(int $a, int $b): int {
    return $a + $b;
    }
        </pre>

        <div class="demo">
            <p><?= $a ?> + <?= $b ?> = <strong><?= addieren($a, $b) ?></strong></p>
        </div>
        </section>

        <section class="panel">
        <h2>3) Typen: string, int, bool, array</h2>
        <pre>
    function begruessung(string $name): string { ... }
    function istVolljaehrig(int $alter): bool { ... }
    function zufallsEintrag(array $werte): string { ... }
        </pre>

        <div class="demo">
            <p><?= e(begruessung($name)) ?></p>
            <p><strong>Volljährig?</strong> <?= istVolljaehrig($alter) ? "Ja" : "Nein" ?></p>
            <p><strong>Zufall:</strong> <?= e(zufallsEintrag($farben)) ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>4) Nullable Typen (?string)</h2>
        <pre>
    function findUserName(?string $name): string {
    return $name ?? "Gast";
    }
        </pre>

        <div class="demo">
            <p><strong>Name:</strong> <?= e(findUserName($maybeName)) ?></p>
            <p><strong>Name:</strong> <?= e(findUserName("Kim")) ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>5) Union Types (PHP 8+)</h2>
        <pre>
    function laengeVonText(string|int $wert): int {
    return strlen((string)$wert);
    }
        </pre>

        <div class="demo">
            <p><strong>Länge:</strong> <?= laengeVonText("Hallo") ?></p>
            <p><strong>Länge:</strong> <?= laengeVonText($nummerAlsText) ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>6) Strikter Modus (optional)</h2>
        <p>
            Mit <code>declare(strict_types=1);</code> werden Typen strenger geprüft.
        </p>

        <pre>
    declare(strict_types=1);

    function addieren(int $a, int $b): int { ... }

    // addieren("3", "5"); // ❌ Fehler im Strict Mode
        </pre>

        <p class="hint">
            👉 Für Einsteiger erstmal ohne Strict Mode okay.  
            Später unbedingt nutzen!
        </p>
        </section>

        <section class="panel">
        <h2>7) Typische Fehler</h2>
        <ul>
            <li>Falsche Typen übergeben (z. B. String statt int)</li>
            <li>Rückgabetyp passt nicht zum <code>return</code></li>
            <li><code>null</code> übergeben, obwohl Typ nicht nullable ist</li>
        </ul>
        </section>

        <section class="panel tasks">
        <h2>Mini-Aufgaben</h2>
        <ol>
            <li>Schreibe eine Funktion <code>multiplizieren(int $a, int $b): int</code>.</li>
            <li>Schreibe <code>formatName(string $vor, string $nach): string</code>.</li>
            <li>Schreibe <code>istGerade(int $zahl): bool</code>.</li>
            <li>Schreibe eine Funktion mit <code>?string</code> als Parameter.</li>
            <li>Teste, was passiert, wenn du falsche Typen übergibst.</li>
        </ol>
        </section>

    </main>

    <footer class="footer">
        <p>PHP Grundlagen – Typdeklarierung in Funktionen | Lernseite (HTML + CSS + PHP)</p>
    </footer>

    </body>
</html>
