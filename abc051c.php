<?php

$input = explode(' ', trim(fgets(STDIN)));
$input = array_map('intval', $input);

$x = $input[2] - $input[0];
$y = $input[3] - $input[1];
$result = '';

for($i = 0; $i < 2; $i++){

    $x += $i;
    $y += $i;

    $result .= str_repeat('L', $i);
    $result .= str_repeat('U', $y);
    $result .= str_repeat('R', $x);
    $result .= str_repeat('D', $i);
    $result .= str_repeat('R', $i);
    $result .= str_repeat('D', $y);
    $result .= str_repeat('L', $x);
    $result .= str_repeat('U', $i);

}

print $result;

