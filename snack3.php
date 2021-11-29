<!-- Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere
 lo stesso numero più di una volta -->

<?php

// Creo array vuoro dove aggiungo gli elementi tramite ciclo while
$arrNums = [];

// cin il ciclo while inserisco all'interno dell'array 
// precedente 15 numeri random da 0 a 100 compresi
while (count($arrNums) < 15) {
    $randomNum = rand(0, 100);

    if (!in_array($randomNum, $arrNums)) {
        $arrNums[] += $randomNum;
    }
}

// Infine stampo il tutto in pagina
echo "<pre>";
var_dump($arrNums);
echo "</pre>";

?>