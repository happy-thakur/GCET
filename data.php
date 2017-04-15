<?php

  //echo $getcropsdetails=file_get_contents("https://data.gov.in/api/datastore/resource.json?resource_id=9ef84268-d588-465a-a308-a864a43d0070&api-key=d0ee664e14c6b247217976c859f1e03c&filters['state']=Uttar%20Pradesh");

// GET JSON
//echo "yes";


$state=[ "Andhra Pradesh",
   "Arunachal Pradesh",
   "Assam",
   "Bihar",
   "Chhattisgarh",
   "Chandigarh",
   "Dadra and Nagar Haveli",
   "Daman and Diu",
   "Delhi",
   "Goa",
   "Gujarat",
   "Haryana",
   "Himachal Pradesh",
   "Jammu Kashmir",
   "Jharkhand",
   "Karnataka",
   "Kerala",
   "Madhya Pradesh",
   "Maharashtra",
   "Manipur",
   "Meghalaya",
   "Mizoram",
   "Nagaland",
   "Orissa",
   "Punjab",
   "Pondicherry",
   "Rajasthan",
   "Sikkim",
   "Tamil Nadu",
   "Tripura",
   "Uttar Pradesh",
   "Uttarakhand",
   "West Bengal"];


    $total_state = count($state);


      $dis=[];
//for($i=0;$i<count($state);$i++){

     //$newstate=$state[$i];

  $query =mysqli_query($dataconnect->database,"SELECT * FROM user ");




while($y=mysqli_fetch_array($query,MYSQLI_ASSOC)){


 sendmsg($y['items'],$y['mobileno'],$y['district'],$y['state']);
  

    /*$district=$r['district'];
    echo ("here");

    $query2=mysqli_query($dataconnect->database,"SELECT * FROM user where district='".$r['district']."' and state='$newstate'"); 

       while($y=mysqli_fetch_array($query2, MYSQLI_ASSOC)){
  

       	echo("------------------------------<br/>");
          
       	echo $y['mobileno'];
    // sendmsg($y['items'],$y['mobileno'],$y['district'],$y['state']);
       	echo("----------------------------*******************************--<br/>");
         

       }*/
  
 
}
   


//}




function sendmsg($x,$mobileno,$district_name,$state_name){
 $str="";
    
  //  echo "</br>".$mobileno."ss</br>"; 
     //echo $x."/".$mobileno."/".$district_name."/".$state_name."/";
 

      $getitem=explode(",",$x);


     $totamitem  = count($getitem);


 $len=""; 

      for($l=0;$l<$totamitem;$l++)
       
    {
      // echo $getitem[$l].'<br/>';
      $temp_var = strpos($getitem[$l], '(')+1;
      $temp_var2 = strpos($getitem[$l], ')');
      $temp_var3 = substr($getitem[$l], $temp_var, $temp_var2-$temp_var);
     // echo $temp_var3;
      $temp_var4 = substr($getitem[$l], 0, $temp_var-1);
     // echo $temp_var4;
 
    

$data='';
   

     $req=file_get_contents("https://data.gov.in/api/datastore/resource.json?resource_id=9ef84268-d588-465a-a308-a864a43d0070&api-key=d0ee664e14c6b247217976c859f1e03c&filters['state']=".urlencode($state_name)."&filters['district']=".urlencode($district_name)."&filters['commodity']=".urlencode($temp_var4)."&filters['variety']=".urlencode($temp_var3));

      //echo "https://data.gov.in/api/datastore/resource.json?resource_id=9ef84268-d588-465a-a308-a864a43d0070&api-key=d0ee664e14c6b247217976c859f1e03c&filters['state']=".urlencode($state_name)."&filters['district']=".urlencode($district_name)."&filters['commodity']=".urlencode($getitem[$l])



      $new = json_decode($req);
         
         //echo json_encode($new);   



    for($k=0;$k<count($new->records);$k++){
        


          $data.="NAYA DAAM:DATE: ".$new->records[$k]->arrival_date."MARKET:".$new->records[$k]->market."ITEM : ".$new->records[$k]->commodity." (".$new->records[$k]->variety.")MINPRICE:".$new->records[$k]->min_price."MAXPRICE:".$new->records[$k]->max_price."AVGPRICE:".$new->records[$k]->modal_price;





  }
   
   $len.=$data; 

 


 }
     

   if($len!=""){

//echo $len."////////";
   exmsg($len,$mobileno);

}

}



function exmsg($q,$w){
   

    //  echo $q;

    //echo "</br>".$w;





$post_data = array(
    // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
    // For promotional, this will be ignored by the SMS gateway
    'From'   => '09243422233',
    'To'    => $w,
    'Body'  => $q //Incase you are wondering who Dr. Rajasekhar is http://en.wikipedia.org/wiki/Dr._Rajasekhar_(actor)
);
 
//echo "asdasd///////////////////////".$w;

$exotel_sid = "hashslash"; // Your Exotel SID - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
$exotel_token = "ef6b5fe8cb442cb46816536f9dc820f9754e20f2"; // Your exotel token - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
 
$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
 
$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
 
curl_close($ch);

 $getres = $http_result;

 if($getres==0){


 
  echo "<h2 style='text-align:center'>MSG HAS BEEN SEND TO - ".$_SESSION['username']." &nbsp;And You Are succesfully Logged In</h2>";

 }
 
//print "Response = ".print_r($http_result);


   // echo file_get_contents("ex.php?mobile=".$w."&data=".urlencode($q));



}


/*
for($i=0;$i<$total_state;$i++){


     $getdistrict=file_get_contents("https://data.gov.in/api/datastore/resource.json?resource_id=9ef84268-d588-465a-a308-a864a43d0070&api-key=d0ee664e14c6b247217976c859f1e03c&filters['state']=".urlencode($state[$i]));

      $getjsondecode = json_decode($getdistrict);
     
      $total_district = count($getjsondecode->records);

       for($j=0;$j<$total_district;$j++){

          $getcropsdetails=file_get_contents("https://data.gov.in/api/datastore/resource.json?resource_id=9ef84268-d588-465a-a308-a864a43d0070&api-key=d0ee664e14c6b247217976c859f1e03c&filters['district']=".urlencode($getjsondecode->records[$j]->district));

      $getjsondecodedetails = json_decode($getcropsdetails);
     
      $total_details = count($getjsondecode->records);
          
         for($k=0;$k<$total_details;$k++){


              echo json_encode($getjsondecodedetails->records[$k]);


         }


            
      
          









      }
     


   










}


 









/*

$getdata= json_decode($get);

//GETTING OLD

$getold = file_get_contents("state.json");

$getjsonold = json_decode($getold);



echo $countold = count($getdata->records);
 echo $count = count($getdata->records);

echo("<hr></hr>");
$newsenddata=[];



for($i=0;$i<$countold;$i++)

{

 

   for($j=0;$j<$count;$j++)

   {
     
     if(

     	($getjsonold->records[$i]->state==$getdata->records[$j]->state)&&
     	($getjsonold->records[$i]->district==$getdata->records[$j]->district)
&&($getjsonold->records[$i]->market==$getdata->records[$j]->market)
&&($getjsonold->records[$i]->commodity==$getdata->records[$j]->commodity)
&&($getjsonold->records[$i]->variety==$getdata->records[$j]->variety)
     	)
     {
 
        
           if(($getjsonold->records[$i]->min_price!=$getdata->records[$j]->min_price)||($getjsonold->records[$i]->max_price!=$getdata->records[$j]->max_price)||($getjsonold->records[$i]->modal_price!=$getdata->records[$j]->modal_price)){

             
         
               echo $getjsonold->records[$i]->id."</br>";
            

              array_push($newsenddata,json_encode($getjsonold->records[$i]));
              

           }



     }




   }
     // echo $count;
       



}




$newcountchange=count($newsenddata);

 include 'db.php';

        $dataconnect = new database;

        $dataconnect->database_connect();

       

for($i=0;$i<$newcountchange;$i++){

   
     echo "yes";
     

    $new = json_decode($newsenddata[$i]);   // JSON DECODE FOR NEW CHANGES JSON
  

         $query =mysqli_query($dataconnect->database,"SELECT * FROM user where district='$new->district' and state='$new->state'");


 
        while($r=mysqli_fetch_array($query)){
 
         echo $mo=$r['mobileno'];
            
       $data ="NAYA DAAM:
         DATE: ".$new->arrival_date."
         MARKET:".$new->market."
         ITEM : ".$new->commodity." (".$new->variety.")
         MINPRICE:".$new->min_price."
         MAXPRICE:".$new->max_price."
         AVGPRICE:".$new->modal_price."
         ";
 
        echo $mo.$data."</br>";
    //echo file_get_contents("ex.php?$m=".$mo."&data=".)



        }
   

 







         
  



  }




// UPDATE DATA OLD

// $getfile =fopen("state.json","w");
// fwrite($getfile,$get);



*/

?>