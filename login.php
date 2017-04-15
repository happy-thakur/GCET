<?php

session_start();

if(isset($_GET['x'])==1){

   session_unset();
   session_destroy();

   unset($_SESSION['username']);
  

}



if(isset($_SESSION['username'])){
 
    header("Location:main.php");

}

if(isset($_GET['w'])){

  echo "<script>alert('Wrong Username Or Password')</script>";
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Login..</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        div.carousel-inner img {
            margin: auto;
        }

          div#form{
        margin: auto;
    background: white;
    display: table;
    width: 53%;
    /* vertical-align: middle; */
    margin-top: 6%;
    padding: 21px;
    border: 1px solid rgba(200,200,200,0.5);
    border-radius: 7px;
  }
  h1.heading{
        text-align: center;
    margin-bottom: 20px;
    margin-top: -39px;
    background: rgba(209, 126, 30, 0.9);
    color: white;
    padding: 4px;
    border-radius: 5px;
  }
  body{


}
    </style>
  
</head>
<body>
    <!--Header-->

    
 <div id="form" >
        <h1 class="heading" >Login</h1>
      <form action="reg1.php" method="post">

        <div class="form-group">
      <label for="pwd">Mobile No</label>
      <input type="tel" class="form-control" required name="mobileno" id="mobileno">
      
      <label for="pwd">Password</label>
      <input type="password" class="form-control" required name="password" id="pwd">
      
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
</body>
</html>