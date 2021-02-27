<?php
     $myArray = [1 , 2 , 1 , 3 ,2 , 5 , 6 , 10];
   
    
     for ($i = 0; $i < count($myArray); $i++) {
            for ($j = $i + 1; $j < count($myArray); $j++) {
                if ($myArray[$i] == $myArray[$j]) {
                     array_splice($myArray, $i, 1);
                }
            }
     }
     for ($k = 0; $k < count($myArray);$k++){
         echo $myArray[$k]."<br>";
     }
?>