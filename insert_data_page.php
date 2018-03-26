<?php

<<<<<<< HEAD
$data['คำร้องทั่วไป'] = "data1";
=======
$data['test'] = "data1";
>>>>>>> 15dff5c828ffd980b1c51b3038323ab495911893
echo "data \n";
var_dump($data);
echo "-------------------------------------\n";

$inp = file_get_contents('respond.json');
$tempArray = json_decode($inp); // ข้อมูลใน json
echo "tempArray be \n";
var_dump($tempArray);

echo "-------------------------------------\n";
array_push($tempArray, $data);
<<<<<<< HEAD
echo "tempArray after \n";
var_dump($tempArray);
echo "-------------------------------------\n";
=======
>>>>>>> 15dff5c828ffd980b1c51b3038323ab495911893
$jsonData = json_encode($tempArray);
echo "jsonData \n";
var_dump(json_decode($jsonData)); 
echo "-------------------------------------\n";
<<<<<<< HEAD
file_put_contents('respond.json', $jsonData);
=======
file_put_contents('respond.json', $jsonData);
>>>>>>> 15dff5c828ffd980b1c51b3038323ab495911893
