<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 15 PHP</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 3%;
    background-color: burlywood;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 10px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
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
            margin-left: 45%;
            
            
        }

        a:hover {
            background-color: blue; /* Changement de couleur de fond au survol */
        }
        h2{
            text-align: center;
            color: white;
        }

    </style>
</head>
<body>
<a href="index.PHP">HOME</a>
<br>
        <?php
        // Exercice actuel
        $currentExercise = 15;

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
<h2>Cet fonction converti des chaines de caracteres majiscule en miniscule.</h2>

    <div class="container">
        <h2>Exercice 15 PHP</h2>
        <form action="EXO_15_1.php" method="post">
            <label for="inputStrings">Entrez des chaînes de caractères (séparées par des virgules) :</label>
            <input type="text" id="inputStrings" name="inputStrings" required>
            <button type="submit">Valider</button>
        </form>
    </div>
</body>
</html>
