<?php
    $a=$_GET['a'];
    $b=$_GET['b'];
    
    if ((isset($a)) && (isset($b)) && (isset($op)))
        {
            if ((!empty($a)) && (!empty($b)) && (!empty($op)))
            {
                $c= $a + $b;
            }
        }
?>