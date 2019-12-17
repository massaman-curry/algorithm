<?php

fscanf(STDIN, "%d", $n);
$result = FALSE;
$cnt = 0;

for($i = 0; $i < $n; $i++){

        fscanf(STDIN, "%d %d %d",$t, $x, $y);
        $far = $x + $y;
        
        if(($t >= $far) && (($t - $far) %2 == 0)){
            $result = TRUE;
            $cnt += 1;
        }

}

print ($result == TRUE) && ($cnt == $n) ? 'Yes' : 'No';


/*
// 2
// 5 1 1
// 100 1 1
// $before_time = 5;
// $after_time = 100;
// $input =[[0, 0, 0], [5, 1, 1], [100, 1, 1]];
$input = [[0, 0, 0]];
$n = fgets(STDIN);
// $input[] = fgets();

for($i = 0; $i < $n; $i++){

    $line = trim(fgets(STDIN));
    $input[] = explode(" ", $line);

}

// print_r($input);

$result = 'No';

for($i =1; $i < count($input); $i++){

    $between = $input[$i][0] - $input[$i - 1][0];
    $moved = abs($input[$i][1] - $input[$i -1][1]) + abs($input[$i][2] - $input[$i - 1][2]);

    if(($between >= $moved) && (($between - $moved) % 2 == 0)){
        $result = 'Yes';
    }

}

print($result);

// $before_pos = [1,1];
// $after_pos = [1, 1];

// $moved = abs(($after_pos[0] - $before_pos[0])) + abs(($after_pos[1] - $before_pos[1] ));
// $between_time = $after_time - $before_time;

// if($moved <= $between_time){
//     if(($between_time - $moved) %2 == 0){
//         print 'Yes';
//     }
// }

*/