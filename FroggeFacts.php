<?php
function array_random($arr, num = 1) 
{
  shuffle($arr);
  
  $r = array();
  for ($i = 0; $i < $num; $i++)
  {
    $r[] = $arr[$i];
    }
  return $num == 1 ? $r[0] : $r;
  }
$a = array(

"Frogge fact #1: A frogge bip a smale beastie wip foure leggys, which liueb bope in water and on londe.",
"Frogge fact #2: A frogge bip often tyme broune or grene or yelowe; or be hit tropyckal, hit may hauen dyeurs coloures lyk reed, blewe, and blak.",


);
print_r(array_random($a));
?>
