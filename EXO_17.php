<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO 17</title>
    <style>
     body{
         background-color: burlywood;
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
            color: white;
            font-size: 20px;
        }
    </style>
</head>
<body>
<a href="index.PHP">HOME</a>
<br>
        <?php
        // Exercice actuel
        $currentExercise = 17;

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
<h2> Cette fonction prend un tableau multidimensionnel en paramètre et génère un tableau XHTML dont Les clés du<br> premier niveau du tableau sont utilisées comme titres de colonnes. </h2>
<?php
function afficherTableauMultidimensionnel($tableau) {
    echo '<style>
            table {
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 20px;
            }
            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            th {
                background-color: white;
            }
          </style>';

    echo '<table>';
    
     // En-tête du tableau avec les clés des premiers éléments du tableau multidimensionnel
    echo '<tr>';
    foreach (array_keys(reset($tableau)) as $titre) {
        echo '<th>' . htmlspecialchars($titre) . '</th>';
    }
    echo '</tr>';
    
    // Corps du tableau avec les données
    foreach ($tableau as $ligne) {
        echo '<tr>';
        foreach ($ligne as $valeur) {
            echo '<td>' . htmlspecialchars($valeur) . '</td>';
        }
        echo '</tr>';
    }
    
    echo '</table>';
}

// Exemple d'utilisation avec un tableau multidimensionnel
$donnees = array(
    array('Nom' => 'IBRAHIM', 'Age' => 22, 'Ville' => 'DAKAR'),
    array('Nom' => 'MAMI', 'Age' => 20, 'Ville' => 'PARIS'),
    array('Nom' => 'KANDJI', 'Age  ' => 22, 'Ville' => 'USA')
);

// Appel de la fonction avec le tableau multidimensionnel
afficherTableauMultidimensionnel($donnees);
?>
  
</body>
</html>
