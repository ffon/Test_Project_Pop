<?php


// $str = file_get_contents('respond.json');
// $arr = json_decode($str, true);
array_push( $arr['employees'], "sadaadad");

var_dump($arr);

if (count($arr)>0)
 {
   var_dump($arr);
   $file = fopen('respond.json','a+');
   fwrite($file, $arr);
   fclose($file);
 }

