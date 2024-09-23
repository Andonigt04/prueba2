<?php

$algo = array();

$num;

for ($i = 0; $i < 5; $i++) {
    $num = rand(0, 10);
    if (in_array($num, $algo)) {
        echo "Zenbaki $num berriro aukeratu duzu, saiatu berriz..";
        break;
    } else {
        
        array_push($algo, $num);
        echo "$num to correcto, ";
    }
}

?>