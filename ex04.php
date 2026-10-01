<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>

<h2>1. Types et valeurs</h2>

<?php

$entier = 42;
$chaine = "42";
$decimal = 15.8;
$vrai = true;
$faux = false;
$vide = null;

echo "<pre>";

var_dump($entier);
var_dump($chaine);
var_dump($decimal);
var_dump($vrai);
var_dump($faux);
var_dump($vide);

echo "</pre>";

?>

<h2>2. Conversions</h2>

<?php

$chaineVersEntier = (int) $chaine;
$decimalVersEntier = (int) $decimal;
$entierVersChaine = (string) $entier;

echo "<pre>";

echo "\"42\" vers entier : ";
var_dump($chaineVersEntier);

echo "15.8 vers entier : ";
var_dump($decimalVersEntier);

echo "42 vers chaîne : ";
var_dump($entierVersChaine);

echo "</pre>";

?>

<h2>3. Booléens avec echo</h2>

<?php

echo "true avec echo : [" . $vrai . "]<br>";
echo "false avec echo : [" . $faux . "]<br>";

?>

<h2>4. Booléens avec var_dump()</h2>

<?php

echo "<pre>";

echo "true : ";
var_dump($vrai);

echo "false : ";
var_dump($faux);

echo "</pre>";

?>

<h2>5. Conversion en booléen</h2>

<?php

$bool1 = (bool) 0;
$bool2 = (bool) "0";
$bool3 = (bool) "PHP";
$bool4 = (bool) [];

echo "<pre>";

echo "0 en booléen : ";
var_dump($bool1);

echo "\"0\" en booléen : ";
var_dump($bool2);

echo "\"PHP\" en booléen : ";
var_dump($bool3);

echo "Tableau vide en booléen : ";
var_dump($bool4);

echo "</pre>";

?>

</body>
</html>