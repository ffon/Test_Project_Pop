<?php

// $data[] = $_POST['data'];

$inp = file_get_contents('respond.json');
$tempArray = json_decode($inp);
var_dump($tempArray);
// array_push($tempArray, $data);
// $jsonData = json_encode($tempArray);
// file_put_contents('respond.json', $jsonData);