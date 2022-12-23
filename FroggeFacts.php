<?php
function array_random($arr, $num = 1) {
  shuffle($arr);
  
  $r = array();
  for ($i = 0; $i < $num; $i++) {
    $r[] = $arr[$i];
  }
  return $num == 1 ? $r[0] : $r;
}
$a = array(

"Frogge fact #1: A frogge biþ a smale beastie wip foure leggys, which liueþ boþe in water and on londe.",
"Frogge fact #2: A frogge biþ often tyme broune or grene or yelowe; or be hit tropyckal, hit may hauen dyeurs coloures lyk reed, blewe, and blak.",
"Frogge fact #3: Tropyckalle frogges liuyn in trewes.",
"Frogge fact #4: A frogge haþ longys and guilles boþe.",
"Frogge fact #5: Þe frogges skyn lokeþ glossi bi cause of his secrecioun, whiche may been poisounous.",
"Frogge fact #6: Moste frogges nauen nought a tayl, an þeire lymes ben yfolden under þeire likame.",
"Frogge fact #7: Þe frogges frounte two feet hauen foure tos and his bak two feet hauen fif tos. Þes tos stiken wele to wode, rocke and glas.",
"Frogge fact #8: Froggen moste ben in þe watere to spawnen.",
"Frogge fact #9: Þe frogge haccheþ from an ey and hit þanne becomeþ a tadpolle. Hit groweþ to þanne a frogge, yef hit ne be nought eten.",
"Frogge fact #10: Some male frogges maken loude souns wiþ þeire mouþys for to maken þeim selven knowen to femmelles. Some þe femmelles refusen.",
"Frogge fact #11: Everich frogge et smale boggys and alyke crikets, fliys, been, and wurms to mete.",
"Frogge fact #12: Þei hauen tungis þat been longe and holden faste to quarrie, þat hit nat escape.",
"Frogge fact #13: A frogge may been yfounde on alle contynens bouten for Antartika. Antartika biþ to coold for the frogge.",
"Frogge fact #14: Frogges ben breþren wiþ toades. Toades ben muchel lyk froggen wiþ drye þicke sken.", 
"Frogge fact #15: Some men weenen þat þou micht biyeten weartes of toades, ac þis nis nat trewe."

);
#This text is taken from Incubator Plus 2.0, "wp/enm/frogge", under the CC BY-SA 3.0 license. 

print_r(array_random($a));
?>
