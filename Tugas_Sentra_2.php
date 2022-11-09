<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style="text-align:center ;">LATIHAN PERULANGAN</p>

    <?php
    echo '<table border = 1>'; 
    echo '<td>';
    echo 'A';
    echo '</td>';
    echo '<td>';
    echo "A^2";
    echo '</td>';
    echo '<td>';
    echo 'A*2';
    echo '</td>';
    

    for($A=1; $A<=10; $A++)
    {
        echo '<tr>';
        echo '<td>';
        echo $A;
        echo '</td>';

        $pangkat = $A**2;
        echo '<td>';
        echo $pangkat;
        echo '</td>';

        $perkalian = $A*2;
        echo '<td>';
        echo $perkalian;
        echo '</td>';
        echo '</tr>';

        
        echo '</table>';
    }

     ?>
    
</body>
</html>