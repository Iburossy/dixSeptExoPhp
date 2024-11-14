<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO_8</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            text-align: center;
            background-color: burlywood;
        }
        h2{
            color: white;
        }
        p{
            font-size: 25px;
        }
        a {
            background-color: black;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 10%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 2px;
            transition-duration: 0.4s;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px; /* Ajout de marge sous le lien HOME */
            
        }

        a:hover {
            background-color: blue; /* Changement de couleur de fond au survol */
        }

    </style>
</head>
<body>

<a href="index.PHP">HOME</a>
<br>
        <?php
        // Exercice actuel
        $currentExercise = 8;

        // Bouton précédent
        $previousExercise = $currentExercise - 1;
        if ($previousExercise > 0) {
            echo "<a href=\"EXO_{$previousExercise}.php\">Précédent</a>";
        } else {
            echo "<span>Début</span>";
        }

        // Bouton suivant
        $nextExercise = $currentExercise + 1;
        if (file_exists("EXO_{$nextExercise}.php")) {
            echo "<a href=\"EXO_{$nextExercise}.php\">Suivant</a>";
        } else {
            echo "<span>Fin</span>";
        } ?>
<h2>Cet exercice crée un tableau multidimensionnel associatif dont les clés sont des noms de personne et les valeurs des tableaux indicés contenant le prénom, la ville de résidence et l'âge de la personne.</h2>
<!-- EXERCICE 8 -->
<?php

$personnes = array(
    'DIALLO' => array(
        'prenom' => 'IBRAHIMA',
        'ville' => 'DAKAR',
        'age' => 22
    ),
    'GUEYE' => array(
        'prenom' => 'ASTOU',
        'ville' => 'KEUR MASSAR',
        'age' => 22
    ),
    'SENE' => array(
        'prenom' => 'OMAR',
        'ville' => 'THIES',
        'age' => 28
    ),
);

// Accès direct aux valeurs sans boucle foreach
echo "<p> Nom : DIALLO, Prénom : " . $personnes['DIALLO']['prenom'] . ", Ville : " . $personnes['DIALLO']['ville'] . ", Âge : " . $personnes['DIALLO']['age'] . " ans<br> </p>";
echo "<p> Nom : GUEYE, Prénom : " . $personnes['GUEYE']['prenom'] . ", Ville : " . $personnes['GUEYE']['ville'] . ", Âge : " . $personnes['GUEYE']['age'] . " ans<br> </p>";
echo "<p> Nom : SENE, Prénom : " . $personnes['SENE']['prenom'] . ", Ville : " . $personnes['SENE']['ville'] . ", Âge : " . $personnes['SENE']['age'] . " ans<br> </p>";

?>

</body>
</html>
