<?php

$inp = file_get_contents('respond.json');
$tempArray = json_decode($inp); // ข้อมูลใน json
var_dump($tempArray);
 $arr = json_decode($tempArray, true);
 $arrne = array("key"=>"dsds");
 array_push( $tempArray, $arrne );
echo "--------------------\n";
 var_dump($arr);
