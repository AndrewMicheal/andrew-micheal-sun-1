<?php
    $numbers = [1 , 2 , -1 , 0 , 80 , 70 , -50];
    $min = 0;
    $max = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($min > $numbers[$i]) 
            $min = $numbers[$i];
    }
    echo "Min : $min";
    echo "<br>";
    for ($i = 0; $i < count($numbers); $i++) {
        if ($max < $numbers[$i]) 
            $max = $numbers[$i];
    }
    echo "Max : $max";
?>