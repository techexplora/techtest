<!doctype html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8">
<title>Lara4</title>

    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <style>
        body        { padding-top:30px; }
        form        { padding-bottom:20px; }
        .user       { padding-bottom:20px; }
    </style>
    
    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->
    
    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
        <script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
        <script src="js/services/userService.js"></script> <!-- load our service -->
        <script src="js/app.js"></script> <!-- load our application -->
    

</head> 
<!-- declare our angular app and controller --> 
<body class="container" ng-app="userApp" ng-controller="mainController"> <div class="col-md-8 col-md-offset-2">

    <!-- PAGE TITLE =============================================== -->
    <div class="page-header">
        <h2>Pelago Tech</h2>
    </div>
    
    <!-- NEW FORM =============================================== -->
    <form ng-submit="submitUser()"> <!-- ng-submit will disable the default form action and use our function -->
    
        <div class="form-group">
            <input type="text" class="form-control input-sm" name="name" ng-model="userData.name" placeholder="Name">
        </div>
    
        <div class="form-group">
            <input type="text" class="form-control input-lg" name="phone" ng-model="userData.phone" placeholder="Phone">
        </div>
	
	<div class="form-group">
	    <input type="text" class="form-control input-lg" name="nationality" ng-model="userData.nationality" placeholder="Nationality">
	</div>
    
        <!-- SUBMIT BUTTON -->
        <div class="form-group text-right">   
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>
    
    <!-- LOADING ICON =============================================== -->
    <!-- show loading icon if the loading variable is set to true -->
    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
    
    <!-- hide these if the loading variable is true -->
    <div class="user" ng-hide="loading" ng-repeat="user in users">
        <h3>User #{{ user.id }} - {{ user.name }}</h3>
        <p>Phone: {{ user.phone }}</p>
	<p>Nationality: {{ user.nationality }}</p>
    
        <p><a ng-click="deleteUser(user.id)" class="text-muted">Delete</a></p>
    </div>
    
</div> 
</body> 
</html>
