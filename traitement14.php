<!-- traitement.php -->
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
} else {
    // Rediriger vers une page par défaut si le formulaire n'est pas soumis
    header("Location: EXO_14.php");
}

?>
