<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2-1</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php    
    $array = array (
        1 => rand(0, 100),
        2 => rand(0, 100),
        3 => rand(0, 100),
        4 => rand(0, 100),
        5 => rand(0, 100),
        6 => rand(0, 100),
        7 => rand(0, 100),
        8 => rand(0, 100)
    );
    echo "$array[1] $array[2] $array[3] $array[4] $array[5] $array[6] $array[7] $array[8] ";

    echo "<table>
        <tr>
            <td>
                $array[1] $array[2] $array[3] $array[4] $array[5] $array[6] $array[7] $array[8]
            </td>
        </tr>          
    </table>"; 
    ?>
      <p><a href="http://192.168.64.186/Ogez/">Retour</a></p>  
</body>
</html>