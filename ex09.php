<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
</head>
<body>

<?php

$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nbValides = 0;

$meilleureNote = -1;
$meilleurEtudiant = "";

echo "<h2>Notes des étudiants</h2>";

echo "<table border='1' cellpadding='8'>";
echo "<tr>";
echo "<th>Étudiant</th>";
echo "<th>Note</th>";
echo "<th>Résultat</th>";
echo "</tr>";

foreach ($notes as $nom => $note) {

    $somme += $note;

    if ($note >= 10) {
        $resultat = "Validé";
        $nbValides++;
    } else {
        $resultat = "Non validé";
    }

    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }

    echo "<tr>";
    echo "<td>" . $nom . "</td>";
    echo "<td>" . $note . "</td>";
    echo "<td>" . $resultat . "</td>";
    echo "</tr>";
}

echo "</table>";

$moyenne = $somme / count($notes);

echo "<h2>Résumé</h2>";
echo "Somme des notes : " . $somme . "<br>";
echo "Moyenne de la classe : " . $moyenne . "<br>";
echo "Nombre d'étudiants ayant validé : " . $nbValides . "<br>";
echo "Meilleure note : " . $meilleureNote . "<br>";
echo "Meilleur étudiant : " . $meilleurEtudiant . "<br>";

?>

</body>
</html>
