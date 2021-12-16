<?php include 'header.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css" />
        <title>Exo8</title>
    </head>

<body> 

    <form action="Exo8.php" method="get">
        <label for="name">Texte : </label>
        <input type="text" id="name" name="name">
        <p> </p> 
        <input type ="submit">
    </form>

    <?php
    if($isconnect) {
        echo "Vous êtes sur la page de l'exercice 8.";
    } else {
        echo "Vous devez vous identifier.";
    }

    session_destroy();
    
    ?>
</body>