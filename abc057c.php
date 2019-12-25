<?php

$n = trim(fgets(STDIN));
$div_min = strlen($n);

for($i = 1; $i < $n/2; $i++){

    if($n % $i == 0 && strlen(max($i, $n/$i)) < $div_min) $div_min = $i;

}

print $div_min;

