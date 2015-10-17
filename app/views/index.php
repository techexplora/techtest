<!doctype html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8">
<title>Welcome to Pelago</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <style>
        body        { 
	background-image:url(img/bg.jpg);
	}
	h1 { font-size:4em; }
	.page-header {
	background-color:rgba(0,0,0,0.4);
	margin-top:-30px;
	}
	.header-content {
	margin-top:-240px;
	text-align:center;
	}
	.event-title {
	position:absolute;
	top: 30px;
	left: 10%;
	color: white;
	text-shadow: 0px 0px 5px rgba(150, 150, 150, 1);
	}
	.event-subtitle {
	position:absolute;
	top: 120px;
	left: 10%;
	color: white;
	text-shadow: 0px 0px 5px rgba(150, 150, 150, 1);
	}
        form        { padding-bottom:20px; }
	.text-muted {
	cursor:pointer;
	}	
    </style>
    
    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->

    <script src="bower_components/phoneformat/dist/phone-format.min.js"></script>
 
    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
        <script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
        <script src="js/services/userService.js"></script> <!-- load our service -->
	<script src="js/filters/all.js"></script> <!-- filters -->
        <script src="js/app.js"></script> <!-- load our application -->
    

</head> 
<!-- declare our angular app and controller --> 
<body ng-app="userApp" ng-controller="mainController"> 
<div class="main-content container">

	<!-- PAGE TITLE =============================================== -->
    	<div class="page-header">
		<img src="img/header.jpg" width="100%"/>
		<div class="header-content">
        		<h1 class="event-title">Pelago Unite!</h1>
        		<h4 class="event-subtitle">Get your ticket for this event at only USD $10000</h4>
		</div>
    	</div>

<div class="col-md-2"></div>
<div class="col-md-6">

    
    <!-- NEW FORM =============================================== -->
    <form ng-submit="submitUser()"> 
    
        <div class="form-group">
            <input type="text" class="form-control input" name="name" ng-model="userData.name" placeholder="Name">
        </div>
    
        <div class="form-group">
            <input type="number" class="form-control input" name="phone" ng-model="userData.phone" placeholder="Phone">
        </div>
	
	<div class="form-group">
	    <input type="text" class="form-control input" name="nationality" ng-model="userData.nationality" placeholder="Nationality">
	</div>
    
        <div class="form-group text-right">   
            <button type="submit" class="btn btn-danger btn-lg btn-block">Register</button>
        </div>
    </form>
    
    <!-- LOADING ICON =============================================== -->
    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
    
    <!-- hide these if the loading variable is true -->
    <div class="user" ng-hide="loading" ng-repeat="user in users">
        <h3>Attendee #{{ user.id }} - {{ user.name | uppercase }}</h3>
        <p>Phone: {{ user.phone | num | tel }}</p>
	<p>Nationality: {{ user.nationality }}</p>
    
        <p><a ng-click="deleteUser(user.id)" class="text-muted">Delete</a></p>
    </div>

    
</div>
<div class="col-md-2"></div>
 
</div>
</body> 
</html>
