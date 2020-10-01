<?php
$x=array(array(7,3),array(8,4));
$y=array(array(6,5),array(1,2));

    echo "Matrix Addition <br>";

    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $x[$i][$j]+$y[$i][$j]." ";
        }
        echo "<br>";
    }
?>