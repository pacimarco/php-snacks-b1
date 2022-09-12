<?php
/*
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

*/

$random=array();

for($i=0; $i<15; $i++)
{
    $number=rand(0,100);

    if (!in_array($number,$random)){
        $random[] = $number;
    }

}
echo '<pre>';
print_r($random);
echo '</pre>';


?>