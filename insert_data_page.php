<?php
 $arrne["key"] = "dsds";
$inp = file_get_contents('respond.json');
// $tempArray = json_decode($inp); // ข้อมูลใน json

$tempArray = json_decode($inp, true);
array_push($tempArray,  $arrne);

echo "--------------------\n";
 var_dump($tempArray);
