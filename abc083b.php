<?php

fscanf(STDIN, "%d %d %d", $n, $a, $b);
$op = 0;

for($i = 1; $i <= $n; $i++){

    $i_ary = str_split($i);
    $sum_i = array_sum($i_ary);

    if($a <= $sum_i && $sum_i <= $b){
        $op += $i;
    }

}

print($op);



/*

fscanf(STDIN, "%d %d %d", $n, $a, $b);
$result = 0;

for($i = 1; $i <= $n; $i++){ //1,2,3...20

    // $i_array = [];
    $i_array = [];

    // $i_array = str_split($i);

    foreach(str_split($i) as $value){

        $value = intval($value);
        $i_array[] = $value;

        

        if(count($i_array) == strlen($i)){

            $sum_array = array_sum($i_array);

            if($a <= $sum_array && $sum_array <= $b){
                $result += $i;
            }

        }
    
    }

    // if($a <= $i_sum && $i_sum <= $b){
    //     $result += $i_sum;
    // }

}

print($result);

*/