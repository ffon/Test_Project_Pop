<?php



$str = '{ 

"players":[
   {

        "name":"Moldova",
        "image":"/Images/Moldova.jpg",
        "roll_over_image":"tank.jpg"
   },
   {

        "name":"Georgia",
        "image":"/Images/georgia.gif",
        "roll_over_image":"tank.jpg"
   } ]}';


 $arr = json_decode($str, true);
 $arrne = array("key"=>"dsds");
 array_push( $arr['players'], $arrne );
 print_r($arr);
