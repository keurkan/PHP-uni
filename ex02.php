<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>

<?php

$nom = "abdo";
$prenom = "gou";
$age = 19;
$formation = "Informatique";

$presentation = "Je m'appelle " . $prenom . " " . $nom .
                ", j'ai " . $age . " ans et je suis en " . $formation . ".";

$presentation .= " J'apprends PHP.";

echo $presentation;
echo "<br><br>";

$note = 18;
$Note = 16;

echo "Valeur de \$note : " . $note . "<br>";
echo "Valeur de \$Note : " . $Note;

?>

</body>
</html>