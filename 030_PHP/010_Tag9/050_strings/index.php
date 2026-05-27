<?php
// index.php – PHP Strings (Lernseite)

// Basis-Strings
$vorname = "Alex";
$nachname = "Meyer";
$stadt = "Berlin";

// Einfache String-Zusammenstellung
$begruesung = "Hallo " . $vorname . " aus " . $stadt . "!";

// Strings mit Variablen (Interpolation)
$vorstellung = "Ich heiße $vorname $nachname und komme aus $stadt.";

// String-Funktionen
$text = "  PHP macht Spaß!  ";
$trimmed = trim($text);              // Leerzeichen entfernen
$upper = strtoupper($vorname);      // Großbuchstaben
$lower = strtolower($nachname);     // Kleinbuchstaben
$length = strlen($trimmed);         // Länge (Bytes)
$pos = strpos($trimmed, "Spaß");     // Position eines Wortes (oder false)
$replaced = str_replace("Spaß", "richtig Spaß", $trimmed);

// Sonderzeichen & Escaping
$quote = "Er sagte: \"Hallo PHP!\"";

// Mehrzeilige Strings (Heredoc)
$mehrzeilig = <<<TEXT
Dies ist ein mehrzeiliger Text.
Er kann Variablen enthalten: $vorname
TEXT;

// Sicherheit: sichere Ausgabe (kurzer Helper)
function e(string $v): string {
    return htmlspecialchars($v, ENT_QUOTES, "UTF-8");
}
?>
<!doctype html>
<html lang="de">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Strings – Grundlagen</title>
    <link rel="stylesheet" href="styles.css">
    </head>
    <body>

    <header class="header">
        <h1>PHP Strings – Grundlagen</h1>
        <p>Text erstellen, verbinden, bearbeiten & sicher ausgeben</p>
    </header>

    <main class="content">

        <section class="panel">
        <h2>1) Was ist ein String?</h2>
        <p>
            Ein <strong>String</strong> ist Text. In PHP schreibst du Strings in
            <strong>"doppelten"</strong> oder <strong>'einfachen'</strong> Anführungszeichen.
        </p>

        <pre>
    $name = "Alex";
    $stadt = 'Berlin';
        </pre>
        </section>

        <section class="panel">
        <h2>2) Strings verbinden</h2>
        <p>In PHP verbindest du Strings mit dem Punkt (<code>.</code>).</p>

        <pre>
    $begruesung = "Hallo " . $vorname . "!";
        </pre>

        <div class="demo">
            <p><?= e($begruesung) ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>3) Variablen im String (Interpolation)</h2>
        <p>
            In <strong>doppelten</strong> Anführungszeichen werden Variablen direkt eingesetzt.
            In <strong>einfachen</strong> nicht.
        </p>

        <pre>
    "Hallo $vorname"   // Variable wird ersetzt
    'Hallo $vorname'   // bleibt Text
        </pre>

        <div class="demo">
            <p><?= e($vorstellung) ?></p>
            <p><?= e('Hallo $vorname') ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>4) Nützliche String-Funktionen</h2>
        <ul>
            <li><code>trim()</code> – entfernt Leerzeichen</li>
            <li><code>strtoupper()</code> – Großbuchstaben</li>
            <li><code>strtolower()</code> – Kleinbuchstaben</li>
            <li><code>strlen()</code> – Länge</li>
            <li><code>strpos()</code> – Position eines Teilstrings</li>
            <li><code>str_replace()</code> – Ersetzen</li>
        </ul>

        <div class="demo">
            <p><strong>Original:</strong> "<?= e($text) ?>"</p>
            <p><strong>Getrimmt:</strong> "<?= e($trimmed) ?>"</p>
            <p><strong>Groß:</strong> <?= e($upper) ?></p>
            <p><strong>Klein:</strong> <?= e($lower) ?></p>
            <p><strong>Länge:</strong> <?= $length ?></p>
            <p><strong>Position von "Spaß":</strong> <?= $pos !== false ? $pos : "nicht gefunden" ?></p>
            <p><strong>Ersetzt:</strong> <?= e($replaced) ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>5) Sonderzeichen & Escaping</h2>
        <p>
            Anführungszeichen im String müssen „escaped“ werden:
        </p>

        <pre>
    $quote = "Er sagte: \"Hallo PHP!\"";
        </pre>

        <div class="demo">
            <p><?= e($quote) ?></p>
        </div>
        </section>

        <section class="panel">
        <h2>6) Mehrzeilige Strings (Heredoc)</h2>
        <pre>
    $text = <<<TEXT
    Mehrzeiliger Text mit $vorname
    TEXT;
        </pre>

        <div class="demo">
            <pre><?= e($mehrzeilig) ?></pre>
        </div>
        </section>

        <section class="panel">
        <h2>7) Sicherheit: Strings sicher ausgeben</h2>
        <p>
            Inhalte aus Formularen oder Variablen sollten mit
            <code>htmlspecialchars()</code> ausgegeben werden.
        </p>

        <pre>
    htmlspecialchars($wert, ENT_QUOTES, "UTF-8");
        </pre>

        <div class="demo">
            <p>Sicher ausgegeben: <?= e('<script>alert("XSS")</script>') ?></p>
        </div>
        </section>

        <section class="panel tasks">
        <h2>Mini-Aufgaben</h2>
        <ol>
            <li>Baue eine Begrüßung aus Vor- und Nachname.</li>
            <li>Gib einen Text in Großbuchstaben aus.</li>
            <li>Ersetze ein Wort in einem Satz.</li>
            <li>Prüfe, ob ein Wort im Text vorkommt (<code>strpos</code>).</li>
            <li>Trimme Leerzeichen von einem String.</li>
        </ol>
        </section>

    </main>

    <footer class="footer">
        <p>PHP Grundlagen – Strings | Lernseite (HTML + CSS + PHP)</p>
    </footer>

    </body>
</html>
