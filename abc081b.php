<?php

$n = fgets(STDIN);
// $array = [5, 6, 8, 10];
$array = [];
$array = explode(' ', trim(fgets(STDIN)));

$judge = true;
$result = 0;

while($judge){

    $counter = 0;

    foreach($array as $value){

        $array[$counter] /= 2;

        if ($value  % 2 == 0){
            $counter += 1;
        }
        // counter =123
    }

    $judge = ($counter == $n) ? true : false;
    $result = ($judge == true) ? $result += 1 : $result;

}

print($result);

// function division$n, $array){

//     $result = 0;

//     while()

//     for($i = 0; $i < count($array); $i ++){

//         if($array[$i]%2 != 0){
//             break;
//         }

//     $array[i] /= 2;

//     division($n, $array);

//     }

//     $result += 1;

// }