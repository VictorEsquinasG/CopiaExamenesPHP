<?php
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c='No se pudo realizar la operación';
    
    if ((isset($a)) && (isset($b)))
    {
        if ((!empty($a)) && (!empty($b)))
        {
            $c= $a + $b;
        }
    }
    echo "<h1>$a + $b = $c</h1>";
?>