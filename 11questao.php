<?php
$s=0;
$vai=1;
$volta=37;
$volta2=38;

for($i=0; $i<36; $i++){
  $s+=$volta*$volta2/$vai;
  $volta--;
  $volta2--;
  $vai++;
}

echo $s;
//s = 37*38/1 + 36 * 37 / 2 + 35 * 36/3 + ... + 1 * 2 /37

?>