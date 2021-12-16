<?php include 'header.php'; ?>
<html> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <title>ExoFinal</title>
</head>

<body>
    <form action="ExoFinal.php" method="get">
        <label for="name">Login : </label>
        <input type="text" id="login" name="login">
        <p> </p>
        <label for="name">Password : </label>
        <input type="text" id="pass" name="pass">
        <p> </p>
        <input type ="submit">
    </form>

<?php
    <?php include 'header.php'; ?>
<html> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <title>Exercice Final</title>
</head>

<body>
    <form action="ExoFinal.php" method="get">
        <label for="name">Login : </label>
        <input type="text" id="login" name="login">
        <p> </p>
        <label for="name">Password : </label>
        <input type="text" id="pass" name="pass">
        <p> </p>
        <input type ="submit">
    </form>

<?php

    if(isset($_GET["login"])) {
        if($_GET["login"] != "Julien") {
            echo "Login incorrect !";
        } 
    }

    if(isset($_GET["pass"])) {
        if($_GET["pass"] != "1234") {
            echo "Password incorrect !";
        } 
    }

    if(isset($_GET["login"])) {
        if($_GET["login"] == "Julien" && $_GET["pass"] == "1234" ) {
            echo "Félicitation, vous êtes connecté ! ";
        }
    }
?>
</body>
</html> 


?>
</body>
</html> 

