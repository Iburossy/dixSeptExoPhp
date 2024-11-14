    <!DOCTYPE html>
    <html>
    <head>
    <title>EXERCICE 6</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 40px;
        text-align: center;
        background-color: burlywood;
    }

    h2{
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
        .resultat{
            color: green;
            font-size: 30px;            
        }
    </style>
    </head>
<body>
     <a href="index.PHP">HOME</a>
     <br>
        <?php
        // Exercice actuel
        $currentExercise = 6;

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
    <h1>Cet exercice trouve tous les diviseurs d'un nombre saisi</h1>
    
<form method="post" action="">
    <label for="nombre">Entrez un nombre :</label>
    <input type="text" name="nombre" id="nombre">
    <input type="submit" value="Afficher les diviseurs">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];

    // Vérifier si le nombre est un entier positif
    if (is_numeric($nombre) && $nombre > 0 && is_int($nombre + 0)) {
        echo "<h2> Les diviseurs de $nombre sont : , </h2>";
        
       // Construire une chaîne contenant les diviseurs séparés par des points-virgules
       $diviseurs = "";
       for ($i = 1; $i <= $nombre; $i++) {
           if ($nombre % $i == 0) {
               $diviseurs .= $i . "; ";
           }
       }

       // Afficher les diviseurs en enlevant le dernier point-virgule et l'espace
       echo rtrim( "<p class='resultat'>  $diviseurs . </p>");
   } else {
       echo "<h2> Veuillez saisir un nombre entier positif. </h2>";
   }
}
?>

</body>
</html>
