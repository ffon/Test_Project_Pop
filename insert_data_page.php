<?php
 $arrne = "dsds";
$inp = file_get_contents('respond.json');
// $tempArray = json_decode($inp); // ข้อมูลใน json

$tempArray = json_decode($inp, true);
// array_push($tempArray["key"],$arrne);
array_push($tempArray["key"] , $arrne);

 var_dump($tempArray);
