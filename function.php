<?php

function aeg(){
    date_default_timezone_set("Europe/Tallinn");
    $time = date("H:i:s");
    echo $time;
    if ($time >= "16:00"){
        echo " Aeg on koju minna<br>";
    } else {
        echo " Peab veel kannatama!<br>";
    }
}
    
function home(){
    echo '<li><a href="index.php">Tagasi koju</a></li>';
}


//$_SERVER - globaalne muutuja 
//$file - faili funt
function GetVisitorIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $time = date("H:i:s");
    $visitor = $ip." : ".$time;
    $file = fopen('visitor.txt',"a") or 
        die ("Ei saanud avada");
    fwrite($file, $visitor); 
        echo "Kylastasite seda saiti aadressilt: ".$ip;
        fclose($file);
    }
    


?>