<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO_9</title>
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
        h1{
            color: red;
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
        $currentExercise = 9;

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
<h2> EXERCICE 9 <br> Cet exercice crée un tableau multidimensionnel associatif dont les clés sont des noms de personne et les valeurs des tableaux <br>associatifs dont les clés sont le prénom, la ville de résidence et l'âge de la personne avec une série de valeurs associées.</h2>

<?php
        // EXERCICE 11
$personnes = array(
    'KANE' => array(
        'prenom' => 'CHEIKH',
        'ville' => 'DAKAR',
        'age' => 9
    ),
    'GUEYE' => array(
        'prenom' => 'A BALA',
        'ville' => 'KDG',
        'age' => 18
    ),
    'MBOUP' => array(
        'prenom' => 'OMAR',
        'ville' => 'THIES',
        'age' => 30
    ),

);

// Accès aux données pour une personne spécifique
echo "<P>Nom : KANE, Prénom : " . $personnes['KANE']['prenom'] . ", Ville : " . $personnes['KANE']['ville'] . ", Âge : " . $personnes['KANE']['age'] . " ans<br></P>";

echo "<P>Nom : GUEYE, Prénom : " . $personnes['GUEYE']['prenom'] . ", Ville : " . $personnes['GUEYE']['ville'] . ", Âge : " . $personnes['GUEYE']['age'] . " ans<br></p>";

echo "<P>Nom : MBOUP, Prénom : " . $personnes['MBOUP']['prenom'] . ", Ville : " . $personnes['MBOUP']['ville'] . ", Âge : " . $personnes['MBOUP']['age'] . " ans<br></P>";

?>

</body>
</html>


