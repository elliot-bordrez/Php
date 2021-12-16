<?php include 'header.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css" />
        <title>Exo1-TP4</title>
    </head>

<body>
    <?php
        try{
            $base = new PDO('mysql:host=192.168.65.235; dbname=TD2_Exercice2', 'root', 'root');
            $resultat = $base->query("select * from User where mdp='".$_post['mdp']."' AND login='".$_post['login']."'");
            }