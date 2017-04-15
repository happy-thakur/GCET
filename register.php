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

<style type="text/css">
  div#form{
       
    background: white;
   
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
    overflow:hidden;

  }
</style>
<body>
<img src="u.png" width="10%" style="z-index:1;position:fixed">
    <div class="row">
      <div class="col-sm-4"></div>
<div class="col-sm-8">
  <div id="form" >
        <h1 class="heading" >Register as Farmer</h1>
      <form action="reg.php" method="post">
    <div class="form-group">


        <label for="name">Name</label>
        <input type="text" name="name" required class="form-control" id="name">
        </div>
        <div class="form-group">
      <label for="pwd">Mobile No</label>
      <input type="tel" class="form-control" required name="mobileno" id="mobileno">
      
      <label for="pwd">Password</label>
      <input type="password" class="form-control" required name="password" id="pwd">
      
      <label for="district">District</label>
      <input type="text" class="form-control" required name="district" id="district">
      
      <label for="state">State</label>
      <select type="text"  class="form-control" required name="state" id="state">

    <option value="" >Select State</option>
    <option>Andhra Pradesh</option>
    <option>Arunachal Pradesh</option>
    <option>Assam</option>
    <option>Bihar</option>
    <option>Chhattisgarh</option>
    <option>Chandigarh</option>
    <option>Dadra and Nagar Haveli</option>
    <option>Daman and Diu</option>
    <option>Delhi</option>
    <option>Goa</option>
    <option>Gujarat</option>
    <option>Haryana</option>
    <option>Himachal Pradesh</option>
    <option>Jammu and Kashmir</option>
    <option>Jharkhand</option>
    <option>Karnataka</option>
    <option>Kerala</option>
    <option>Madhya Pradesh</option>
    <option>Maharashtra</option>
    <option>Manipur</option>
    <option>Meghalaya</option>
    <option>Mizoram</option>
    <option>Nagaland</option>
    <option>Orissa</option>
    <option>Punjab</option>
    <option>Pondicherry</option>
    <option>Rajasthan</option>
    <option>Sikkim</option>
    <option>Tamil Nadu</option>
    <option>Tripura</option>
    <option>Uttar Pradesh</option>
    <option>Uttarakhand</option>
    <option>West Bengal</option>


      </select>
  
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>

</div>

<div class="col-sm-2"></div>

    </div>
    
</body>
</html>