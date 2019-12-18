<?php

$input = explode(' ', trim(fgets((STDIN))));

$counted = array_count_values($input);

print ($counted[5] == 2) && ($counted[7] ==1) ? 'YES' : 'NO';

