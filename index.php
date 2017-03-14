<?php

require 'function.php';
require 'components.php';
$name = "Beatrice";

//tagasi algusesse
home();
menu($menu_begin, $menu_arr, $menu_end);

//naitame praegust aega ja anname soovitusi
aeg();
//naited teksti kuvamise kohta
echo "$name esimene PHP sissekanne<br>";
echo '$name esimene PHP sissekanne<br>';


GetVisitorIp();
    
?>