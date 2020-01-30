<?php

$m = [];
for($i = 0; $i < 3; $i++){
    $m[$i] = array_map('intval', explode(' ', fgets(STDIN)));
}
$a[0] = 0;
for($i = 0; $i < 3; $i++) $b[$i] = $m[0][$i] - $a[0];
for($i = 0; $i < 3; $i++) $a[$i] = $m[$i][0] - $b[0];
$jdge = 'Yes';
for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        if($a[$i] + $b[$j] != $m[$i][$j]) $jdge = 'No';
    }
}

echo $jdge;