<?php

$n = fgets(STDIN);
for($i =0; $i < $n; $i++){
    $dia[] = fgets(STDIN);
}
// $dia =  [10, 6, 8, 6];

print count(array_unique($dia));
