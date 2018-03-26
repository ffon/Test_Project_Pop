<?php
// $arrne = "dsds";
// $inp = file_get_contents('respond.json');

// $tempArray = json_decode($inp, true);
// array_push($tempArray["key"],$arrne);

//  var_dump($tempArray);


$str = file_get_contents('respond.json');
$arr = json_decode($str, true);
$arrne['roll_over_image'] = "sadaadad";
array_push( $arr['employees'], $arrne);
$str = json_encode($arr);

var_dump($str);
if (json_decode($str) != null)
 {
   $file = fopen('respond.json','w');
   fwrite($file, $str);
   fclose($file);
 }

