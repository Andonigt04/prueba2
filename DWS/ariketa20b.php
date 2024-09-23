<?php

$bizitatutako1 = array("asdfg00", "asdfg00");
$bizitatutako2 = array("gfdsa00", "asd");

$guztia = array_merge($bizitatutako1, $bizitatutako2);

$desio_zerrenda = array("gfdsa00", "asd","fewrthjyhrewfhy", "rewethjgueagyhikdraerghk,gtuhk,vget54");

$desio_zerrenda = array_diff($desio_zerrenda, $guztia);
sort($desio_zerrenda);
print_r($desio_zerrenda);





?>