<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: ;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            
            background-image: url('A1.jpg');
            background-size: cover;
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
            margin-bottom: 20px; /* Ajout de marge sous le lien HOME */
        }

        a:hover {
            background-color: blue; /* Changement de couleur de fond au survol */
        }

        h2 {
            color: #333;
            margin-bottom: 30px;
        }
        h3{
            color: white;
            font-size: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="submit"] {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #4caf50;
            color: #fff;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        h2{
            background-color: ghostwhite;
            color: black;
            padding: 10px 20px;
            border: none;
            width: 25%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 2px;
            border-radius: 10px;
    }

    
    </style>
</head>
<body>
    <a href="index.PHP">HOME</a>
    <br>
        <?php
        // Exercice actuel
        $currentExercise = 14;

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
    <h2>un site d'agence immobilière</h2>
    <h2>Choisissez une option :</h2>

    <form action="traitement14.php" method="post">
        <input type="submit" name="action" value="Vendre">
        <input type="submit" name="action" value="Acheter">
        <input type="submit" name="action" value="Louer">
    </form>

    <?php   
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer la valeur du bouton submit cliqué
            $action = $_POST["action"];
        
            // Redirection en fonction du choix
            switch ($action) {
                case "Vendre":
                    header("Location: vendre.php");
                    break;
                case "Acheter":
                    header("Location: acheter.php");
                    break;
                case "Louer":
                    header("Location: louer.php");
                    break;
                default:
                    // Rediriger vers une page par défaut en cas de choix non reconnu
                    header("Location: EXO_14.php");
                    break;
            }
        }
    ?>
</body>
</html>
