<?php 

$district = "NAGALAND";

    $getdata = file_get_contents("http://api.openweathermap.org/data/2.5/forecast?q=".$district.",IN&appid=6be438477f45ae9678774a055ca6e636");
 

   $getjsondecode = json_decode($getdata);
      


  echo $count = count($getjsondecode->list);
 //echo $getjsondecode->list[0]->weather[0]->main;

  for($i=0;$i<39;$i++){


  $getjsondecode->list[$i]->weather[0]->description;

  $getlen=strlen($getjsondecode->list[$i]->dt_txt);
  $time=substr($getjsondecode->list[$i]->dt_txt,10,$getlen);
 echo $time=trim($time);


  }

 
 


?>