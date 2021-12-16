<html>
  <head>
    <title>Exo1</title>
  </head>
</html>

<body> 
<?php
$NombreAleatoire = rand ( 0 , 100 );

if ($NombreAleatoire%2 == 1) {
    echo '<p style="color:cyan;background-color:blue">' .$NombreAleatoire. ' est impair </p>';    
}

else 
    echo '<p style="color:red;background-color:yellow">' .$NombreAleatoire. ' est pair </p>';
?>
</body>

