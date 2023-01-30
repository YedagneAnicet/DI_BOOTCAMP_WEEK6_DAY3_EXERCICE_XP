<?php
function eligible_vote()
{
    $name = "Anicet";
    $age = 17;
    if ($age >= 18) {
        echo $name . ", you are eligible for vote";
    } else {
        echo $name . ", you are not eligible for vote. ";
    }
}
eligible_vote();

?>