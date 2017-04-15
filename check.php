
<?php


  include 'db.php';

        $dataconnect = new database;

        $dataconnect->database_connect();


//session_start();



if(isset($_SESSION['username'])){

    
 $ro=$_SESSION['username'];
   $query = "SELECT items from user where mobileno='$ro'";
   $get=mysqli_query($dataconnect->database,$query);
   $r=mysqli_fetch_array($get);

  // echo $r['items'];

   echo "<form action='new.php' method='post'>";

   $getitems=explode(",",$r['items']);

   for($i=0;$i<count($getitems);$i++)
   {
 
  echo "<input type='checkbox' checked><label>".$getitems[$i]."</label></br>";

   }  

}

 $query ="SELECT district from user where mobileno='$ro'";

   $get=mysqli_query($dataconnect->database,$query);

   $district=mysqli_fetch_array($get);

   $district=$district['district'];




$getjson =file_get_contents("https://data.gov.in/api/datastore/resource.json?resource_id=9ef84268-d588-465a-a308-a864a43d0070&api-key=d0ee664e14c6b247217976c859f1e03c&filters['district']=".urlencode($district));

 $getjsondecode=json_decode($getjson);
for($i=0;$i<count($getjsondecode->records);$i++){

	   if(!in_array($getjsondecode->records[$i]->commodity,$getitems));
         
         $temp=$getjsondecode->records[$i]->commodity."(".$getjsondecode->records[$i]->variety.")";

          echo "<input type='checkbox' name='checkbox[]' value=".$temp."><label>".$getjsondecode->records[$i]->commodity."(".$getjsondecode->records[$i]->variety.")</label></br>";


}

echo "<input type='submit'>";

  echo "</form>";


?>