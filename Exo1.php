<body>
<?php
$NombreAleatoire = rand ( 0 , 100 );
if ($NombreAleatoire%2 == 1)
{
    echo '<p style="color:blue">' .$NombreAleatoire. ' est impaire</p>';
}
else 
{
    echo '<p style="color:red", background-color:"red">' .$NombreAleatoire. ' est paire</p>';
}