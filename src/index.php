<?php
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c='No se pudo realizar la operación';
    
    if ((isset($a)) && (isset($b)) && (!empty($a)) && (!empty($b))) // Si no es null ni ''
    {
        // Si es número
        if (gettype($a) != 'object' && gettype($a) != 'string' && gettype($b) != 'object' && gettype($b) != 'string')
        {
            $c= $a + $b;
        }
    }
    echo "<h1>$a + $b = $c</h1>";
?>