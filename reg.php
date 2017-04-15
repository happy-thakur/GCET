<?php

 if($_SERVER['REQUEST_METHOD']=='POST')

 {

     $name = $_POST['name'];

     $password = $_POST['password'];
   
       $mobileno = $_POST['mobileno'];
       
        $district = $_POST['district'];

          $state = $_POST['state'];

         
        include 'db.php';

        $dataconnect = new database;

        $dataconnect->database_connect();

        $query =mysqli_query($dataconnect->database,"INSERT INTO user (name,password,mobileno,district,state)
VALUES('$name','$password','$mobileno','$district','$state')");
    
      
       session_start();

    $_SESSION['username']=$mobileno;

 

    header("location:setting.php");

   

      
 
 }









?>