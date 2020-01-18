<?php

$nums = str_split(trim(fgets(STDIN)));
$nums = array_map(function($a){
    return (int)$a;
}, $nums);

for($i = 0; $i < 8; $i++){
    $s = $sum = $nums[0];
    // $cal = decbin($i);
    for($j = 0; $j < 3; $j++){
       if(decbin($i & (1 << $j))){
           //+のとき
           $sum += $nums[$j + 1];
           $s .= '+' .$nums[$j + 1];
       }else{
           //-のとき
           $sum -= $nums[$j + 1];
           $s .= '-' .$nums[$j + 1];
       }
    }
    if($sum == 7) {echo $s .= '=7'; break;}
}

