<?php session_start();

$UneVariable =  "Etes vous pret ?" ; 
//var_dump(php_ini_loaded_file(), php_ini_scanned_files());
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exo Final TP1 php ip </title>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    <?php
    //echo " xdebug ".$_SERVER['REMOTE_ADDR'];
    //xdebug_info();
       //Traitement du formulaire de connexion
       $UneVariable .= "oui";
        if(isset($_POST["Valider"])){
            if($_POST["password"]=="1234" && $_POST["login"]=="julien" ){
                //si identifié alors session true
                $_SESSION["EtatConnexion"]=true ;
            }else{
                if($_POST["password"]!="1234"){
                    echo "Ce n'est pas le bon mdp";
                }
                if($_POST["login"]!="julien"){
                    echo "Ce n'est pas le bon Login";
                }
            }
        }

        //Traitement du formulaire de deconnexion
        if(isset($_POST["Deconnexion"])){
            session_unset();
            session_destroy();
        }

        //si il y a une session on affiche le site sinon ça sera le formulaire de connexion
        if((isset($_SESSION["EtatConnexion"]) && $_SESSION["EtatConnexion"]==true)){
            ?>
                <p>Bienvenue sur le site</p>
                <form action="" method="post" class="form-example">
                    <div class="form-example">
                    <div class="form-example">
                        <input type="submit" value="Deconnexion" name="Deconnexion" >
                    </div>
                </form>
            <?php
        }else{
            ?>
            <form action="" method="post" class="form-example">
                <div class="form-example">
                    <label for="login">Enter your Login: </label>
                    <input type="text" name="login" id="login" required>
                </div>
                <div class="form-example">
                    <label for="password">Enter your Pass: </label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="form-example">
                    <input type="submit" value="Valider" name="Valider" >
                </div>
            </form>
            <?php
        }
    ?> 
</body>
</html>

