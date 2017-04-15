﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Clean Single Page Template</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICON STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- PRETTYPHOTO STYLE  -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- CUSTOM THEME COLOR -- YOU CAN USE LIGHT & DARK THEMES  -->
    <link href="assets/css/themes/dark.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <style type="text/css">
        div.overlay{
            background: url(one33.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        #img-head{

            margin: 0px;
    height: 40px;
    width: 40px;
    margin-top: -8px;
        }
    </style>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top scrollclass">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img id="img-head" src="u.png" ></a>
            </div>
            <div class="navbar-collapse collapse">

            <?php
           session_start();


           if(isset($_SESSION['username'])){
           
           echo '<ul class="nav navbar-nav navbar-right">
                    
                    <li><a href="./main.php">Setting</a></li>
                    <li><a href="./login.php?x=1">Logout</a></li>
                </ul> ';
           

           }
             else{



        echo '<ul class="nav navbar-nav navbar-right">
                    <li><a href="index-dark.html">Home</a></li>
                    <li><a href="./login.php">Login</a></li>
                    <li><a href="./register.php">Register</a></li>
                </ul>';


             }
                

                ?>
            </div>

        </div>
    </div>
    <!--END NAB BAR SECTION-->
    <div id="home-sec">
        <div class="overlay">
            <div class="container">
                <div class="col-md-8 pad-top scrollclass">

                    <h1>
                        <strong>Simple way to get <mark>Notified</mark>about Current <mark> Mandi </mark> price and <mark>Climate</mark> conditions.. </strong>
                    </h1>
                    <p class="home-p">
                       This will notify about the current mandi price of your locality and also Climate condition...
                    </p>
                    <a class="btn btn-primary btn-lg btn-home" href="./register.php">Register Now.. </a>
                </div>
                
            </div>
        </div>

    </div>
    <!--END HOME SECTION-->
    <section id="features-sec">
        <div class="container">
            <div class="row text-center min-set">
                <div class="col-md-12">
                    <h2><mark class="head-glow">Awesome </mark>Features </h2>
                    <hr class="sub-hr" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="weather.jpg" class="img-set" />
                    <h3>Weather Forecast </h3>
                    <hr />
                    <p>
                        Get Weather Forecast for next 6 days..
                    </p>
                </div>
                <div class="col-md-6 text-center" style="padding-top: 10px;">
                    <img src="mandi.jpg" class="img-set" />
                    <h3>Mandi Rate</h3>
                    <hr />
                    <p>
                        Get Current Mandi rate of your locality..
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!--END FEATURES SECTION-->
    
    <section id="location-sec">
        <div class="container">
            <div class="row text-center min-set">
                <div class="col-md-12">
                    <h2><mark class="head-glow">Contact </mark>Us </h2>
                    <hr class="sub-hr" />
                </div>
            </div>
            <div class="row">

                <div class="col-md-12 text-center">
                    <h3>hashslash@gmail.com</h3>
                    <br />
                    <h4>Block - E </h4>
                    <h4>Govindpuram </h4>
                    <h4>Ghaziabad(UP)</h4>
                    <br />
                    <a href="http://www.binarytheme.com/" target="_blank" style="color: #fff; font-size: 12px;">Design by : hashslash.com</a>
                </div>
            </div>

        </div>
    </section>
    <!-- END LOCATION  SECTION -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- PRETTYPHOTO SCRIPTS -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!-- PORTFOLIO FILTER PLUGIN  -->
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <!-- NICE SCROLL SCRIPTS   -->
    <script src="assets/js/jquery.nicescroll.min.js"></script>
    <!-- EASING SCROLL SCRIPTS   -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
