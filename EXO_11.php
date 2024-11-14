<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices</title>
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
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 2px;
            transition-duration: 0.4s;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        a:hover {
            background-color: blue; 
        }
    </style>
</head>
<body>

<a href="index.PHP">HOME</a>
<br>
        <?php
        // Exercice actuel
        $currentExercise = 11;

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
<h2> EXERCICE 11 <br> <br> lecture des deux tableaux de l'exercice 8 et 9 AVEC WHILE et la fonction current et next</h2>

<?php
// EXERCICE 8
$personnes_exercice_8 = array(
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

// Utilisation de la boucle while pour l'exercice 8
echo "<h2>Exercice 8</h2>";
reset($personnes_exercice_8); // Réinitialise le pointeur au début du tableau
while ($infos = current($personnes_exercice_8)) {
    $nom = key($personnes_exercice_8);
    echo "<p> Nom : $nom, Prénom : " . $infos['prenom'] . ", Ville : " . $infos['ville'] . ", Âge : " . $infos['age'] . " ans<br> </p>";
    next($personnes_exercice_8); // Avance le pointeur
}

// EXERCICE 9
$personnes_exercice_9 = array(
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

// Utilisation de la boucle while pour l'exercice 9
echo "<h2>Exercice 9</h2>";
reset($personnes_exercice_9); // Réinitialise le pointeur au début du tableau
while ($infos = current($personnes_exercice_9)) {
    $nom = key($personnes_exercice_9);
    echo "<p> Nom : $nom, Prénom : " . $infos['prenom'] . ", Ville : " . $infos['ville'] . ", Âge : " . $infos['age'] . " ans<br> </p>";
    next($personnes_exercice_9); // Avance le pointeur
}
?>



</body>
</html>
