<?php
function test($number){
 $test_resultat = $number > 30 ? "greater than 30" : ($number > 20 ? "greater than 20" :($number >10 ? "greater than 10"
: "is less than 10!")); 
echo $number." ".$test_resultat."\n";
}

test(3)
?>
