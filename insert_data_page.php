<?php
$arrne = "dsds";

echo $arrne;
$inp = file_get_contents('respond.json');
// $tempArray = json_decode($inp); // ข้อมูลใน json

$tempArray = json_decode($inp, true);
array_push($tempArray["key"],"123");

 var_dump($tempArray);
