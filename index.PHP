<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma page d'accueil</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            text-align: center;
            background-image: url('phpp.jpeg'); /* Ajoutez le chemin vers votre image GIF ici */
            background-size: cover; /* Ajuste la taille de l'image pour couvrir l'ensemble du corps */
        }

        h1, h2{
            color: white;
        }

        select {
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .perso {
            text-align: left;
            background-color: red; opacity: 70%;
            width: 21%;
            padding: 7px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            color: white;
        }

        label {
            font-size: 15px;
            color: white;
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
        }

        a:hover {
            background-color: blue; 
        }
        
        .image-haut-droite {
            position: absolute;
            top: 10px; 
            right: 10px;
            z-index: 1; 
            width: 20%;
            height: 25%;
            padding-top: 3%;
        }
        .det{
            font-size: 25px;
            color:  ;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: 12px;
            
        }
    </style>
</head>
<body>
<img src="IAMOIS.png" alt="Image Haut Droite" class="image-haut-droite">

    <section class="perso">
        <h3>
            INFOS PERSONNELLES <br>
            NOM : DIALLO <br>
            PRENOM : IBRAHIMA SORY <br>
            CLASSE : BIG 2 <br>
            CODE : 22 07 51
        </h3>
    </section>

    <a href="index.php">HOME</a>
    <h1>Bienvenue sur ma page d'accueil</h1>
    <h2 class="det">
        J'ai essayer de rendre la navigation des page facile afin de vous permettre de passer ou de retouner vers un exercice specifique sans avoir a se rendre a chaque fois sur la page d'acceuille puis de recliquer sur la liste deroulante
        <br> Cliquer ci-dessous pour choisir un exercice spécifique !
    </h2>
    <select id="exercice" onchange="window.location.href=this.value">
    <option value="" selected disabled>Choisissez un exercice</option>

        <?php
        for ($i = 1; $i <= 18; $i++) {
            echo "<option value='EXO_{$i}.php'>EXERCICE {$i}</option>";
        }
        ?>
    </select>
</body>
</html>
