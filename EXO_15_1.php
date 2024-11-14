<?php
function transformStrings(&$stringsArray) {
    foreach ($stringsArray as &$str) {
        $str = ucfirst(strtolower($str));
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les chaînes de caractères saisies par l'utilisateur
    $inputStrings = $_POST["inputStrings"];

    // Diviser la chaîne en un tableau en utilisant la virgule comme séparateur
    $stringsArray = explode(",", $inputStrings);

    // Appeler la fonction pour transformer les chaînes
    transformStrings($stringsArray);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Résultat - Exercice 15 PHP</title>
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
    padding: 5px;
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

.a2 {
    display: inline-block;
    margin-top: 15px;
    text-decoration: none;
    color: red;
    border: 4%;
    
}
.a1 {
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

        .a1:hover {
            background-color: blue; /* Changement de couleur de fond au survol */
        }
        @keyframes blink {
      0% { color: red; }
      50% { color: transparent; }
      100% { color: red; }
    }

    .clignotant {
      animation: blink 1s infinite;
    }

    </style>
</head>
<body>
<a href="index.PHP"class="a1">HOME</a> 

    <div class="container">
        <h2>Résultat</h2>
        <?php
        // Afficher le résultat transformé
        if (isset($stringsArray)) {
            echo "<p>Résultat transformé :</p>";
            echo "<ul>";
            foreach ($stringsArray as $str) {
                echo "<li>$str</li>";
            }
            echo "</ul>";
        }
        ?>
        <p><a href="EXO_15.php" class="a2 clignotant">Retour</a></p>
    </div>
</body>
</html>
