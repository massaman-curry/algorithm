<?php
//3 3
// .#.
// ###
// .#.
// $H = 3;
// $W = 3;
// $g = [['.', '#', '.'],
//       ['#', '#', '#'],
//       ['.', '#', '.']
//      ];
$g = [];
fscanf(STDIN, "%d %d", $H, $W);
for($i = 0; $i < $H; $i++){
      $in = fgets(STDIN);
      for($j = 0; $j < $W; $j++){
            $g[$i][$j] = $in[$j];
      }
}
$dx = [-1, 1, 0, 0];
$dy = [0, 0, -1, 1];
$ans = true;
for($i = 0; $i < $H; $i++){
for($j = 0; $j < $W; $j++){
      if($g[$i][$j] == '#'){
            $found = false;
            for($k = 0; $k < 4; $k++){
                  $j2 = $j + $dx[$k];
                  $i2 = $i + $dy[$k];
                  if($i2 >= 0 && $j2 >= 0 && $i2 < $H && $j2 < $W && $g[$i2][$j2] == '#'){
                        $found = true;
                  }
            }
      }
}
}
if(!$found) $ans = false;
echo $ans ? "Yes" : "No";