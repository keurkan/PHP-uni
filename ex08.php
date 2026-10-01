<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8</title>
</head>
<body>

<section>
    <h2>Partie 1 : nombres pairs avec while</h2>

    <?php
    $nombre = 0;

    while ($nombre <= 20) {

        if ($nombre == 10) {
            echo "<strong>$nombre</strong><br>";
        } else {
            echo $nombre . "<br>";
        }

        $nombre += 2;
    }
    ?>
</section>

<hr>

<section>
    <h2>Partie 2 : while et do-while</h2>

    <?php

    // Boucle while
    $compteur = 5;
    $executionsWhile = 0;

    while ($compteur < 5) {
        $executionsWhile++;
        $compteur++;
    }

    echo "Nombre d'exécutions avec while : " . $executionsWhile . "<br>";

    // Boucle do-while
    $compteur = 5;
    $executionsDoWhile = 0;

    do {
        $executionsDoWhile++;
        $compteur++;
    } while ($compteur < 5);

    echo "Nombre d'exécutions avec do-while : " . $executionsDoWhile;
    ?>
</section>

<hr>

<section>
    <h2>Partie 3 : continue et break</h2>

    <?php

    for ($i = 1; $i <= 20; $i++) {

        if ($i == 16) {
            break;
        }

        if ($i % 3 == 0) {
            continue;
        }

        echo $i . "<br>";
    }

    ?>
</section>

</body>
</html>