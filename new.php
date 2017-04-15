

<?php

$y="";

session_start();

        //echo $_SESSION['username'];


if($_SERVER['REQUEST_METHOD']=='POST'){

   
    foreach($_POST['checkbox'] as $x ){

    	 $y=$x.",".$y;

// echo $x;
    	    }


}
// echo $x;

$r=strlen($y);
$y=substr($y,0,$r-1);
 
//echo $y;

 if($_SERVER['REQUEST_METHOD']=='POST')

 {

    
         
        include 'db.php';

        $dataconnect = new database;

        $dataconnect->database_connect();

        

        $query =mysqli_query($dataconnect->database,"UPDATE  user SET items='$y' WHERE mobileno='".$_SESSION['username']."'");

    
     
   
 include 'data.php';      
 
 }



?>