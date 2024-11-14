<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding-top: 5%;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
            background-color: burlywood;
        }

       button {
            cursor: pointer;
            padding: 5px 10px;
        }

        p{
            color: green;
            font-size: 30px;

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
        .vrai{
            color: green;
            font-size: 30px;            
        }
        .faux{
            color: red;
            font-size: 30px;            
        }

    </style>
    <title>EXERCICE 2 Multiple de 3 et 5</title>
</head>
<body>
        <a href="index.PHP">HOME</a>
        <br>
        <?php
        // Exercice actuel
        $currentExercise = 2;

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

    <h2>CETTE EXERCICE CONSISTE A TESTER SI UN NOMBRE EST UN MULTIPLE DE 3 ET 5</h2>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];

            if ($nombre % 3 == 0 && $nombre % 5 == 0) {
                echo "<p class='vrai'>Le nombre $nombre est un multiple de 3 et de 5.</p>";
            } else {
                echo "<p class='faux'>Le nombre $nombre n'est pas un multiple de 3 et de 5.</p>";
            }
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nombre">Entrez un nombre :</label>
            <input type="number" name="nombre" required>
            <button type="submit">Vérifier</button>
        </form>
    </div>
</body>
</html>
