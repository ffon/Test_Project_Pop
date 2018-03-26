<?php

// $data['คำร้องทั่วไป'] = "data1";
$data['test'] = "data1";
echo "data \n";
var_dump($data);
echo "-------------------------------------\n";

$inp = file_get_contents('respond.json');
$tempArray = json_decode($inp); // ข้อมูลใน json
echo "tempArray be \n";
var_dump($tempArray);

echo "-------------------------------------\n";
array_push($tempArray, $data);
$jsonData = json_encode($tempArray);
echo "jsonData \n";
var_dump(json_decode($jsonData)); 
echo "-------------------------------------\n";
file_put_contents('respond.json', $jsonData);
