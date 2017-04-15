<?php
session_start();

if(isset($_SESSION['username'])){
 
    header("Location:main.php");

}


if($_SERVER['REQUEST_METHOD']=='POST'){

        
        $mobileno=$_POST['mobileno'];
        $password =$_POST['password'];

  include 'db.php';

        $dataconnect = new database;

        $dataconnect->database_connect();

 $query="SELECT password from  user where mobileno='$mobileno'";

 $reqquery=mysqli_query($dataconnect->database,$query);
 
 $r=mysqli_fetch_array($reqquery);
echo count($r);
 if(count($r)==0){
 
    
    header("location:login.php?w=1");

   


 }
 else{

     if($r['password']==$password){

     session_start();
        $_SESSION['username']=$mobileno;
         
     	header('location:index.php');
     	

     }else{

     	 
    header("location:login.php?w=1");

     }

 }



}














?>