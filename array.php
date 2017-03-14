<?php

require 'function.php';
require 'components.php';
home();


$month = "veebruar";

$test = array('kolmapaev', 3.14, $month, 8, "Klass nr A210");

print_r($test);
echo "<br>";
var_dump($test);
echo "<br>";

echo $test[0];
echo "<br>";
$test[] = "uus massiivi liige";
print_r($test);

$test_a = array('esimene' => 'Tauno',
            'teine' => 'Ragnar',
            'kolmas' => 'Kevin');
print_r($test_a);           

//esimese massivi väljatrükk kultuursel kombel
for ($i=0; $i < count($test); $i++) {
        echo "<li>".$test[$i]. "</li><br>";
}


//sidusmassiivi (associative array) väljatrükk, punktid liidavad kokku
foreach($test_a as $jrk => $name) {
    echo "<li>".$name." on jarjekorras ".$jrk."</li>";
}

$esta = "Eesti keel";
$mata = "Matemaatika";
$fysa = "Fyysika";

$hinded = array(
            "Peeter" => 
                array($esta => 4, 
                      $mata => 4, 
                     $fysa => 3),
            "Mari" => 
                array($esta => 5, 
                      $mata => 3, 
                     $fysa => 4),
            "Jyri" => 
                array($esta => 3, 
                      $mata => 2, 
                     $fysa => 2),
            "Pille" => 
                array($esta => 3, 
                      $mata => 2, 
                     $fysa => 2)
    );

echo $hinded['Peeter'][$esta]."<br>";

var_dump($hinded);


//print_r on massiivide v2ljatrykiks
//massiivide (k6ige k6rgema) v2ljatrykk
echo print_r(array_keys($hinded));
echo "<br>";
echo print_r(array_values($hinded));

//kahem66tmelise massiviv kultuurne v2ljatrykk
$hinded_id = array_keys($hinded);
echo "<br>";
for ($i = 0; $i < count($hinded_id); $i++) {
    echo $hinded_id[$i]."<br>";
    foreach($hinded[$hinded_id[$i]] as $aine => $hinne) {
        echo $aine." : ".$hinne."<br>";
    }
}


    
?>