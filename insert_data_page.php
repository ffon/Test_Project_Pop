<?php


$str = file_get_contents('respond.json');
$arr = json_decode($str, true);
$arrne['roll_over_image'] = "sadaadad";
array_push( $arr['employees'], $arrne);

var_dump($arr);
echo "str\n\n";

$str = json_encode($arr);
var_dump($str);

if (json_decode($str) != null)
 {
 echo "y";
   $file = fopen('respond.json','w');
   fwrite($file, $str);
   fclose($file);
 }

