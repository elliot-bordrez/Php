<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <title>Exo3</title>
</head>

<body> 
        <?php
              $tableau=array(
                "Nom:" => 'Bordrez | Elliot | Desanclos',
                "Prenom:" => 'Elliot | Alexis | Charles',
                "Password:" => '123 | 456 | 789',
                );
     
              foreach($tableau as $key=>$value) {
                echo "<span>$key".' '."$value </span> <p></p>";
              }
        ?>
    </body>
</html>