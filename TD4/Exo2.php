<?php 
try {
    $MaBase = new PDO('mysql:host=192.168.65.235;dbname=Cabinet', 'userBordrez', 'userBordrez');
}catch (Exception $e) {
        echo "Ya un gros probleme".$e->getMessage();
}
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body> 
    <h1>Insertion de medecin</h1>

    <?php
        if(isset($_POST["btnAjoutMedecin"])){
            $Nom = $_POST["txtNom"];
            $Prenom = $_POST["txtPrenom"];

            //c'est ici que je fais l'insertion
            $Req = $MaBase->query("insert into Medecin (nom,prenom) value ('".$Nom."','".$Prenom."')");


        }else{
            ?>
            <h2>Formulaire </h2>
            <form action="" method="post">
                Nom : <input type="text" name="txtNom" id="nom" required>
                Prenom <input type="text" name="txtPrenom" id="Prenom" required>
                <input type="submit" name="btnAjoutMedecin" value="Ajouter une Medecin">
            </form>
            <?php
        }

    ?>

  
    

    <?php
    try {
        
        $Req = $MaBase->query("select * from Medecin");
        //fetch donne les noms des colonnes avec les attributs de la requête.
        echo $Req->rowCount(); 
        ?>
        <table>
        <?php
        while($tab = $Req->fetch()){
            ?>
            <tr>
            <td><?php echo $tab["id"];?></td>
            <td><?php echo $tab["nom"];?></td>
            <td><?php echo $tab["prenom"];?></td>
            </tr>
            <?php
        }
        ?>
        </table>
        <?php
    } catch (Exception $e) {
        echo "Ya un gros probleme".$e->getMessage();
    }



    ?>
</body>
</html>

