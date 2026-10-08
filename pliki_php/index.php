<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moje pliki</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <header>
        <h1>MOJE PLIKI</h1>
    </header>

    <section>
        <h2>Aktualny katalog:</h2>
        <p>
<?php echo getcwd();?>
        </p>
    </section>

    <section>
        <h2>ZAWARTOŚĆ KATALOGU</h2>

        <table>
            <tr>
                <th>Nazwa</th>
                <th>Typ</th>
                <th>Rozmiar</th>
            </tr>
<?php

$katalog = "dokumenty";

if (file_exists($katalog)) {

               
$elementy = scandir($katalog);

foreach ($elementy as $element) {

                  
if ($element == "." || $element == "..") {
                        continue;
}

$sciezka = $katalog . "/" . $element;

echo "<tr>";

echo "<td>" . $element . "</td>";              
echo "<td>";

        if (is_file($sciezka)) { echo "PLIK";}
        if (is_dir($sciezka)) {echo "KATALOG";}

        echo "</td>";
        echo "<td>";

        if (is_file($sciezka)) {
                        echo filesize($sciezka) . " B";} else {echo "-";}
                echo "</td>";
                echo "</tr>";
                }

            } else {
                echo "<tr>";
                echo "<td colspan='3'>Katalog dokumenty nie istnieje.</td>";
                echo "</tr>";
            }

            ?>

        </table>
    </section>


    <section>





    </section>
        </body>
        </html>









