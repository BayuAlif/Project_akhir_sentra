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
    