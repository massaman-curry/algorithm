<?php

$a = trim(fgets(STDIN)); //500
$b = trim(fgets(STDIN)); //100
$c = trim(fgets(STDIN)); //50
$x = trim(fgets(STDIN));
$cnt = 0;

// $I < 3とすると、0,1,2と3回繰り返す。
for($i = 0; $i <= $a; $i ++){
    for($j = 0; $j <= $b; $j++){
        for($k = 0; $k <= $c; $k++){

            // if((500 * $i + 100 * $j + 50 * $k) == $x){
            //     $cnt += 1;
            // }
            $cnt = ((500 * $i + 100 * $j + 50 * $k) == $x) ? $cnt + 1 : $cnt;
            // エルビス演算子

        }
    }
}

print($cnt);