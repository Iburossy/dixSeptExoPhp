<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_1</title>
    <style>
        body{
            text-align: center;
            background-color: burlywood;
        
        }
        .VAR{
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
        .debut{
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
            
            /* border-radius: 10px; */
            
            margin-bottom: 20px; /* Ajout de marge sous le lien HOME */
        }
        
    </style>
</head>
<body>
            <a href="index.php">HOME</a>
            <br>
        <?php
        // Exercice actuel
        $currentExercise = 1;

        // Bouton précédent
        $previousExercise = $currentExercise - 1;
        if ($previousExercise > 1) {
            echo "<a href=\"EXO_{$previousExercise}.php\">Précédent</a>";
        } else {
            echo "<span class='debut'>Premiere page</span>";
        }

        // Bouton suivant
        $nextExercise = $currentExercise + 1;
        if (file_exists("EXO_{$nextExercise}.php")) {
            echo "<a href=\"EXO_{$nextExercise}.php\">Suivant</a>";
        } else {
            echo "<span>Fin</span>";
        } ?>

            <h1>Exercice 1 :</h1>
            <h2> Parmi les variables suivantes, lesquelles ont un nom valide :</h2>
            <h2> mavar, $mavar, $var5, $_mavar, $_5var, $__élément1, $hotel4* ? </h2>
            <h1>Reponse :</h1>
            <h2 class="VAR" >$mavar, $var5, $_mavar, $_5var,</h2>
</body>
</html>

