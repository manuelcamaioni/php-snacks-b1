<?php 
$arrayWords = ['a','b','c','d','e'];
$arrayNums = [1,2,3,4,5];

function mergeArrays($array1, $array2){
    $newArray = [];
    for($i = 0; $i < count($array1); $i++){
        $newArray[] = $array1[$i];
        $newArray[] = $array2[$i];
    }
    return $newArray;
}

$mergedArray = [mergeArrays($arrayWords, $arrayNums)];
var_dump($mergedArray);
?>