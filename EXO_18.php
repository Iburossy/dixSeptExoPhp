<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO 18</title>
    <style>
        body {
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: burlywood;
            margin: 0;
            padding: 5%;
            color: white;
            font-size: 25px;
        }

        a{
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
        .fin{
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            width: 12%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 2px;
            
            border-radius: 10px;
            
            margin-bottom: 20px; /* Ajout de marge sous le lien HOME */
        }
    </style>
</head>
<body>
    <a href="index.PHP">HOME</a> 
    <br>
        <?php
        // Exercice actuel
        $currentExercise = 18;

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
            echo "<span class='fin'>Fin des exercices</span>";
        } ?>
    <br>

    
    Cet exercice utilise une fonction pour afficher le motif suivant<br>

    <?php
    // Fonction pour afficher le motif
    function afficherMotif($n) {
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $i;
            }
            echo "<br>";
        }
    }

    // Appel de la fonction avec le nombre de lignes souhaité
    afficherMotif(10);
    ?>

</body>
</html>
