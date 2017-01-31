<?php
$langage = array("HTML","CSS","Javascript","PHP");
function trie($madra){
   sort($madra);
   return($madra);
}
$pascontent= trie($langage);
foreach ($pascontent as $toujourspascontent) {
  echo $toujourspascontent. "\n";
}
function trie2($madra){
  implode($madra);
   return($madra);
}
$trunks= trie2($langage);
foreach ($trunks as $goten) {
  echo $goten;
}
 ?>
