<html>
  <head>
    <title>Exercice 3</title>
  </head>
</html>

<body> 
<?php

$Tableau = array(

'Nom : ' => 'Bordrez, Cesar, Desenclos',
'Prenom : ' => 'Elliot, Alexis, Charles',
'MDP : ' => 'enter, abc, efg',

);

foreach($Tableau as $key=>$value){
  echo "<span>$key".' '."$value\n</span> <p></p>";
}

?>
</body>