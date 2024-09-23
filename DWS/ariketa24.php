<?php


function masUno() {
    static $stat = 0;
    return $stat++;
}

print_r(masUno());
print_r(masUno());
print_r(masUno());


?>