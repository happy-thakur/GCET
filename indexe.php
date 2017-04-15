<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
	<title>Kishann </title>
</head>
<body>
    
    <div id="form" >
     <form action="reg.php" method="post">
  <div class="form-group">


       <label for="name">Name</label>
       <input type="text" name="name" class="form-control" id="name">
       </div>
      <div class="form-group">
    <label for="pwd">Mobile No</label>
    <input type="mobileno" class="form-control" name="mobileno" id="mobileno">
    
    <label for="pwd">Password</label>
    <input type="password" class="form-control" name="password" id="pwd">
    
    <label for="district">District</label>
    <input type="text" class="form-control" name="district" id="district">
    
    <label for="state">State</label>
    <select type="text"  class="form-control" name="state" id="state">


  

    </select>
 
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
  </div>
</body>
</html>