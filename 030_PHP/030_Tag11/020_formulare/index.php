<?php
// index.php – Formulare in PHP (GET & POST)

// Sichere Ausgabe
function e(string $v): string {
  return htmlspecialchars($v, ENT_QUOTES, "UTF-8");
}

// Standardwerte
$name = "";
$email = "";
$nachricht = "";
$errors = [];
$success = false;

// Formular verarbeitet?
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = trim($_POST["name"] ?? "");
  $email = trim($_POST["email"] ?? "");
  $nachricht = trim($_POST["nachricht"] ?? "");

  // Validierung
  if ($name === "") {
    $errors[] = "Bitte Name eingeben.";
  }

  if ($email === "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Bitte gültige E-Mail eingeben.";
  }

  if (strlen($nachricht) < 10) {
    $errors[] = "Die Nachricht muss mindestens 10 Zeichen haben.";
  }

  if (!$errors) {
    $success = true;
    // Hier könnte später gespeichert oder eine Mail verschickt werden
  }
}
?>
<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Formulare – Grundlagen</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <header class="header">
    <h1>PHP Formulare – Grundlagen</h1>
    <p>Formular absenden, prüfen & Rückmeldung anzeigen</p>
  </header>

  <main class="content">

    <section class="panel">
      <h2>1) HTML-Formular (POST)</h2>

      <?php if ($success): ?>
        <div class="notice success">
          <strong>Danke!</strong> Dein Formular wurde erfolgreich gesendet.
        </div>
      <?php endif; ?>

      <?php if ($errors): ?>
        <div class="notice error">
          <strong>Bitte korrigieren:</strong>
          <ul>
            <?php foreach ($errors as $err): ?>
              <li><?= e($err) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <form class="form" method="post" action="">
        <div class="field">
          <label for="name">Name</label>
          <input id="name" name="name" type="text" value="<?= e($name) ?>" required>
        </div>

        <div class="field">
          <label for="email">E-Mail</label>
          <input id="email" name="email" type="email" value="<?= e($email) ?>" required>
        </div>

        <div class="field">
          <label for="nachricht">Nachricht</label>
          <textarea id="nachricht" name="nachricht" rows="5" required><?= e($nachricht) ?></textarea>
        </div>

        <button class="btn" type="submit">Senden</button>
      </form>

      <p class="hint">
        Tipp: Das Formular schickt per <strong>POST</strong> an dieselbe Seite.
      </p>
    </section>

    <section class="panel">
      <h2>2) Erklärung: GET vs. POST</h2>
      <ul>
        <li><strong>GET</strong> → Daten stehen in der URL (z. B. Suche)</li>
        <li><strong>POST</strong> → Daten sind „versteckt“ im Request (Formulare)</li>
      </ul>

      <pre>
$_GET["q"]
$_POST["name"]
$_SERVER["REQUEST_METHOD"]
      </pre>

      <p>
        Teste GET:
        <a href="?q=Hallo">?q=Hallo</a>
      </p>

      <div class="demo">
        <p><strong>$_GET["q"]:</strong> <?= e($_GET["q"] ?? "nicht gesetzt") ?></p>
      </div>
    </section>

    <section class="panel">
      <h2>3) Typische Validierungen</h2>
      <ul>
        <li>Pflichtfelder prüfen</li>
        <li>E-Mail validieren: <code>filter_var(..., FILTER_VALIDATE_EMAIL)</code></li>
        <li>Längen prüfen (<code>strlen</code>)</li>
        <li>Inhalte sicher ausgeben (<code>htmlspecialchars</code>)</li>
      </ul>
    </section>

    <section class="panel tasks">
      <h2>Mini-Aufgaben</h2>
      <ol>
        <li>Füge ein Feld „Betreff“ hinzu und validiere es.</li>
        <li>Prüfe, ob der Name mindestens 3 Zeichen hat.</li>
        <li>Zeige die eingegebenen Werte nach dem Absenden an.</li>
        <li>Baue ein zweites Formular mit GET (z. B. Suche).</li>
        <li>Markiere fehlerhafte Felder im CSS.</li>
      </ol>
    </section>

  </main>

  <footer class="footer">
    <p>PHP Grundlagen – Formulare | Lernseite (HTML + CSS + PHP)</p>
  </footer>

</body>
</html>
