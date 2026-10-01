<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7</title>
</head>
<body>

<section>
    <h2>Table de multiplication de 7</h2>

    <?php
    $nombre = 7;

    for ($i = 1; $i <= 10; $i++) {
        echo $nombre . " × " . $i . " = " . ($nombre * $i) . "<br>";
    }
    ?>
</section>

<hr>

<section>
    <h2>Pyramide d'étoiles</h2>

    <?php
    for ($i = 1; $i <= 6; $i++) {

        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }

        echo "<br>";
    }
    ?>
</section>

</body>
</html>