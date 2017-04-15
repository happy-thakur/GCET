<?php


 $get=file_get_contents("https://data.gov.in/api/datastore/resource.json?resource_id=9ef84268-d588-465a-a308-a864a43d0070&lat=28.680662&long=70.488861&api-key=d0ee664e14c6b247217976c859f1e03c");



$getdata= json_decode($get);


echo("<hr></hr>");


echo $count=count($getdata->records);

$a=[];
 
for($i=0;$i<$count;$i++){


         echo $getdata->records[$i]->district;

   
     if(in_array($getdata->records[$i]->district,$a)){


          for($i=0;$i<$count;$i++){

            

              if($a[$i]!=$getdata->records[$i]->district)

              {

                 
                 for($j=$i+1;$j<$count+1;$j++){

               
                      $a[$j]=$a[($j-1)];

                      $count++;

                 }

                 $a[$i] = $getdata->records[$i]->district;

                   

              }


          }
          
         
            

     }
       else{

         
         array_push($a,$getdata->records[$i]->district);

       }
         

}










 







  






?>