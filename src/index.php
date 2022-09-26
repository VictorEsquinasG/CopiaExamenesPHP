<?php
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c='No se pudo realizar la operación';
    $color='red';
    
    if ((isset($a)) && (isset($b)) && (!empty($a)) && (!empty($b))) // Si no es null ni ''
    {
        // Si es número
        if (gettype($a) != 'object' && gettype($a) != 'string' && gettype($b) != 'object' && gettype($b) != 'string')
        {
            $c= $a + $b;
            $color='violet';
        }
    }
    echo "<h1 color=$color>$a + $b = $c</h1>";
?>