<?php include 'header.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css" />
        <title>Exo7</title>
    </head>

<body> 
    <form action="Exo7.php" method="get">
        <label for="name">User : </label>
        <input type="text" id="name" name="name">
        <p> </p>
        <label for="name">Password : </label>
        <input type="text" id="pass" name="pass">
        <p> </p> 
        <input type ="submit">
    </form>

    <?php
    if($isconnect) {
        echo "Vous êtes sur la page de l'exercice 7.";
    } else {
        echo "Vous devez vous identifier.";
    }

    ?>
</body>

<!-- Créer un petit formulaire avec une zone de texte et un bouton. Lorsque vous cliquer sur
le bouton la page doit afficher ce que vous avez saisie et l’enregistre dans une variable de
session $_SESSIONS[]. Le but est que si vous actualisez votre page la variable est
mémorisée et le site affiche toujours la valeur saisie. -->