<?php

// 5
// CHOKUDAI
// RNG
// MAKOTO
// AOKI
// RINGO
list($m, $a, $r, $c, $h) = [0, 0, 0, 0, 0];

fscanf(STDIN, "%d", $n);
for($i = 0; $i < $n; $i++){
    echo substr(fgets(STDIN), 0, 1);
}