<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            margin-top: 5%;
            text-align: center;
            background-color: burlywood;
        }

      
        label, input {
            margin: 5px;
            padding: 5px;
        }

        button {
            cursor: pointer;
            padding: 8px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
        }
        p{
            color: red;
            font-size: 20px;
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

        .p1{
            color: green;
            font-size: 30px;            
        }
        .p2{
            color: blue;
            font-size: 33px;            
        }
    </style>
    <title>Exercice 4</title>
</head>
<body>
<a href="index.PHP">HOME</a>
<br>
<?php
        // Exercice actuel
        $currentExercise = 4;

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
<h1>Exercice 4</h1>
<h1>Calculer le PPCM et le PGCD de deux nombres</h1>
    <div class="container">
        <?php
        function calculerPGCD($a, $b) {
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            return $a;
        }

        function calculerPPCM($a, $b) {
            if ($a == 0 || $b == 0) {
                return 0;
            } else {
                return abs($a * $b) / calculerPGCD($a, $b);
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre1']) && isset($_POST['nombre2'])) {
            $nombre1 = (int)$_POST['nombre1'];
            $nombre2 = (int)$_POST['nombre2'];

            $pgcd = calculerPGCD($nombre1, $nombre2);
            $ppcm = calculerPPCM($nombre1, $nombre2);

            echo "<p class='p1'>Le PPCM de $nombre1 et $nombre2 est : $ppcm</p>";
            echo "<p class='p2'>Le PGCD de $nombre1 et $nombre2 est : $pgcd</p>";
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nombre1">Entrez le premier nombre :</label>
            <input type="number" name="nombre1" required>

            <label for="nombre2">Entrez le deuxième nombre :</label>
            <input type="number" name="nombre2" required>

            <button type="submit">Calculer PPCM et PGCD</button>
        </form>
    </div>
</body>
</html>
