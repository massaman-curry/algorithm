<?php
// 4
// 12 13 1
// 44 17 17
// 66 4096 64
$in = [];

fscanf(STDIN, "%d", $n);
for($i = 0; $i < $n - 1; $i++){
    $in[] = explode(' ', fgets(STDIN));
}

var_dump($in);