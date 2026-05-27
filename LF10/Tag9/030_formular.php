<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formular</title>
    </head>
    
    <body>
        <header>
            <h1>Formular für PHP</h1>
            <p>
                Bitte fülle das Formular aus. Fehler werden direkt angezeigt.
            </p>
        </header>

        <main>
            <?php
                //Datenbank Verbindung (MariaDB)

                // 1. Verbindungsdaten (Konfiguration)
                $host = "localhost";                    // Wo läuft unsere Datenbank
                $dbname = "kontakte";                   // Name meiner Datenbank
                $user = "root";                         // Datenbank Nutzer
                $password = "";                         // Passwort hier einfügen


                // 2. Fehler sicher abfangen (try/catch)

                try {                                                                                   // Versuch das auszuführen
                    $pdo = new PDO(                                                         // PDO Verbindung herstellen
                        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",                  // DSN = Data Source Name   
                        $user,                                                              
                        $password);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);          // Fehler-Modus eingestellt -> Exception statt stiller Fehler
                } catch (PDOException $e){                                                              // Wenn dabei ein PDO spezifische Exception (Fehler) passiert, fang sie ab
                    die("Datenbankverbindung fehlgeschlagen: " - $e->getMessage());
                }

                /* PDO = PHP Data Object
                    ... ist ein Werkzeug, mit dem ein PHP-Programm mit einer Datenbank "sprechen" kann.
                    Z.B kann man damit:     - Daten lesen
                                            - Daten speichern
                                            - Daten ändern
                                            - Daten löschen
                
                    PDO spezifische Exception
                    ... ist im Grunde genommen eine Fehlermeldung als Objekt, die von PHP ausgelöst wird, wenn bei einer Datenbank Operation mit PDO etwas schiefgeht.

                    Objekt
                    ... ist in der Programmierung einfach gesagt ein DING mit EIGENSCHAFTEN und FÄHIGKEITEN.
                    Man kann sich Objekte wie ein Gegenstand aus der echten Welt vorstellen.
                */



                /***********************************************************************************************************************************************************************************/

                // 1. Daten Strukturen vorbereiten
                $errors = [];
                $values = [
                    'email' => '',
                    'age' => '',
                    'msg' => ''
                ];

                // 2. Prüfen: Wurde das Formular abgeschickt?
                if ($_SERVER['REQUEST_METHOD'] === 'POST'){         // $_SERVER['REQUEST_METHOD'] = sagt mir wie die Methode aufgerufen werden soll (POST oder GET)

                    // 3. Werte holen und trimmen (Leerzeichen am Anfang und Ende weg)
                    $values['email'] = trim($_POST['email'] ?? '');     // trim = entfernt Leerzeichen und Zeilenumbrüche
                    $values['age'] = trim($_POST['age'] ?? '');         // ?? '' = Null-Coalescing = z.B. Wenn E-Mail nicht existiert dann '' Ausgabe
                    $values['msg'] = trim($_POST['msg'] ?? '');

                    // 4. Validierung (prüfen ob die Daten "okay" sind)

                    // Email: darf nicht leer sein und muss wie eine E-Mail auch aussehen
                    if ($values['email'] === '' || !filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {      // filter_var = Standardvalidator für E-Mails in PHP        | FILTER_VALIDATE_EMAIL = Konstante
                        $errors[] = 'Bitte eine gültige E-Mail eingeben!';                                      // Konstante = ein fester Wert, der sich während der Programmausführung nicht mehr ändern kann. Eigenschaften: hat einen Namen, speichert einen festen Wert, kann nicht verändert werden, wird ohne $ geschrieben
                    }

                    // Alter: darf nicht leer sein und muss nur aus Ziffern bestehen
                    if ($values['age'] === '' || !ctype_digit($values['age'])) {            // ctype_digit = nur Zahlenwerte sind zulässig
                        $errors[] = 'Bitte ein gültiges Alter (nur Zahlen) eingeben.';
                    }

                    // Msg: mindestens 10 Zeichen eingeben
                    if (strlen($values['msg']) < 10) {                                      //strlen = gleiches wie Len( in Python -> zählt die Zeichen)
                        $errors[] = 'Nachricht muss mindestens 10 Zeichen enthalten.';
                    }

                    // 5. Wenn keine Fehler: Erfolgsausgabe
                    if (empty($errors)) {                                                           // Beding ist keine Fehler tauchen auf
                        $safeEmail = htmlspecialchars($values['email'], ENT_QUOTES, 'UTF-8');       // htmlspecialchar = schützt vor XSS, indem es HTML-Zeichen entschärft | XSS = Cross- Site Scripting -> Angriff auf Webseiten
                        $safeAge   = htmlspecialchars($values['age'], ENT_QUOTES, 'UTF-8');         // ENT_QUOTES = Konstante
                        $safeMsg   = nl2br(htmlspecialchars($values['msg'], ENT_QUOTES, 'UTF-8'));  // NL2BR = Zeilenumbruch

                        // SQL "vorbereiten", noch nicht ausführen
                        $stmt = $pdo->prepare("                        
                            INSERT INTO infos (email, age, msg)
                            VALUES (:email, :age, :msg)");

                        // $stmt = Statement Objekt
                        // $pdo = ist meine Datenbankverbindung
                        // prepare() = schickt die SQL-Struktur an die Datenbank, aber OHNE die konkreten Daten
                        // INSERT INTO infos (email, age, msg) -> ich füge eine neue Zeile in die Tabelle infos
                        // (email, age, msg) -> das sind die Spalten, in die ich schreibe
                        // VALUES -> sind die Werte, die in die Spalte kommen sollen
                        // :email, :age, :msg -> das sind benannte Platzhalter (named placeholder)

                        // Werte einsetzen und ausführen
                        $stmt->execute([
                            ':email' => $values['email'],
                            ':age' => $values['age'],
                            ':msg' => $values['msg']
                        ]);

                        // execute([..]) = macht zwei Dinge: 1) Bindet die Werte an die Platzhalter(:mail...) | 2) führt das vorbereitete SQL dann wirklich aus
                        // -> = Objektoperator: wird benutzt, um auf Eigenschaften oder Methoden eines Objekts zuzugreifen.
                        // => = Arrayoperator: wird benutzt, um Schlüssel und Wert in einem Array zu verbinden.

                        // header("Location: 030_formular.php");
                        // exit();


                        echo '<section aria-label="Erfolgsmeldung">';
                        echo '<h2>Erfolg!</h2>';
                        echo "<p><strong>E-Mail:</strong> $safeEmail</p>";
                        echo "<p><strong>Alter:</strong> $safeAge</p>";
                        echo "<p><strong>Nachricht:</strong> $safeMsg</p>";
                        echo '<hr>';
                        echo '</section>';
                    }
                        
                }

                // 6. Hilfsfunktion: sicher ins HTML zurückschreiben (wiederbefüllbar)
                function old($value) {                                     // function = Schlüsselwort um eine Funktion zu definieren | old = Name der Funktion (frei wählbar) | ($value) = unser Parameter -> das was wir der Funktion übergeben
                    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                }
            ?>

            <?php if (!empty($errors)): ?>
                <section aria-label="Fehlerliste">
                    <h2>Bitte korrigieren:</h2>
                        <ul>
                            <?php foreach ($errors as $e): ?>                                           <!-- Start der Schleife -->                                
                                <li><?php echo htmlspecialchars($e, ENT_QUOTES, 'UTF-8'); ?></li>       <!-- Schleifen Inhalt -->
                            <?php endforeach; ?>                                                        <!-- Endet die Schleife-->
                        </ul>
                </section>
            <?php endif; ?>         <!-- Beendet die if Anweisung in HTML  -->

        <form action="./030_formular.php" method="post" novalidate>     <!--novalidate -> ohne novalidate kann der Browser mich am absenden hindern und meine PHP- Fehlerliste sehe ich nicht-->
            <fieldset>
                <legend>Deine Angaben</legend>

                <div>
                    <label for="email">E-Mail</label>
                    <input 
                        type="email" 
                        name="email" 
                        id="email"
                        autocomplete="email"
                        required
                        value="<?php echo old($values['email']); ?>"
                        >
                </div>
                
                <div>
                    <label for="age">Alter</label>
                    <input 
                        type="text" 
                        name="age" 
                        id="age"
                        inputmode="numeric"
                        autocomplete="off"
                        required
                        value="<?php echo old($values['age']); ?>">
                </div>
                
                <div>
                    <label for="msg">Nachricht</label>
                    <textarea 
                        name="msg" 
                        id="msg" 
                        placeholder="Bitte schreibe hier deine Nachricht an uns!"
                        rows="6"
                        minlength="10"
                        required><?php echo old($values['msg']); ?></textarea>
                </div>
                

                <button type="submit">Absenden</button>
            </fieldset>
        </form>
        </main>
    </body>
</html>