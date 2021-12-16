<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <title>Exo5</title>
</head>

<body> 
    <form action="Exo5.php" method="post">
        <label for="name">Texte : </label>
        <input type="text" id="name" name="name">
        <input type ="submit">
    </form>

    <?php

    if (isset($_POST["name"])) {
        echo "Ma valeur est : ".$_POST["name"];

    }?>
    
</body> 
