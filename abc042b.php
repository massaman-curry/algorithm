<?php

// 3 3
// dxx
// axx
// cxx
fscanf(STDIN, "%d %d", $n, $l);

for($i = 0; $i < $n; $i++){
    $input[] = trim(fgets(STDIN));
}

// $input = ['dxx', 'axx', 'cxx'];

sort($input);

for($i = 0; $i < $n; $i++){
    print $input[$i];
}