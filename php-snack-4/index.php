<!-- Scrivi una funzione che accetti tre argomenti:
un array e due numeri ("a" più piccolo di "b" e "b" grande al massimo quanto il numero di elementi dell'array).

La funzione ritornerà un nuovo array con i valori che hanno la posizione compresa 
tra "a" e "b" -->

<?php 

$array = ['a', 'b', 'c', 'd', 'e'];
function createArray($array1, $a, $b){

    $newArray = [];

    if($a < $b && $b <= count($array1)){

        for($i = $a; $i < $b; $i++){
            $newArray[] = $array1[$i];
        }
        
    }
    return $newArray;
}

$generatedArray = [createArray($array, 1, 3)];
var_dump($generatedArray);


?>