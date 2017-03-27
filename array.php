<?php

include 'view.php';

    
back_home();
menu();

// massiivi tegevused, kommentaarid

$name = "Tarmo";
$arr = array ("Nimi", "Esmaspäev", 8, 3.14, $name);
$begin = "<ol>";
$end = "</ol>";

// massiivi väljatrükk listina
    echo $begin;
    for ($i = 0; $i < count($arr); $i++){
        echo '<li>'.$arr[$i].'</li>';}
    echo $end;


$assoc_array = array('esimene' => "Rando-Juku",
                'teine' => "Andri",
                'kolmas' => "Andres",
                'neljas' => "Tarmo",
                'viies' => "Tarmo"
                );
print_r($arr);
echo "<br>";
print_r($assoc_array);

foreach ($assoc_array as $key => $value){
    echo $value." on ".$key."<br>";
}


echo implode(" ",$assoc_array);

/*

echo $arr[1]; kommentaar

*/

$mat = "matemaatika";
$est = "eesti keel";
$fys = "füüsika";
$hinded = array("Peeter"=>array($mat=>4, $est=>4, $fys=>3),
                "Mari"=>array($mat=>4, $est=>4, $fys=>3),
                "Jüri"=>array($mat=>4, $est=>4, $fys=>3));
echo "<br>Mari hinne aines ".$mat." on ".$hinded['Mari'][$est]."<br>";

$hinded_id = array_keys($hinded);

for ($i=0; $i < count($hinded_id); $i++){
    echo $hinded_id[$i]."<br>";
    foreach ($hinded[$hinded_id[$i]] as $aine => $hinne ){
        echo $aine." : ".$hinne."<br>";
    }
}


?>