<!DOCTYPE html>
<html lang="en" ng-app="TestApp">
<head>
    <title>Test App</title>

  	<link rel="stylesheet" type="text/css" href="/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
            </div>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#login"><i class="fa fa-home"></i> Login </a></li>
                <li><a href="#view1"><i class="fa fa-home"></i> Public To All</a></li>
                <li><a href="#view2"><i class="fa fa-home"></i> Requires API + client authentication</a></li>
                <li><a href="#logout"><i class="fa fa-home"></i> Logout</a></li>
            </ul>
        </div>
    </div>

    <br><br>

    <!-- All of our Angular views go here /public/templates/* -->
    <div class="container" class="row">
        <div class="col-xs-12">
	       <div ng-view></div>
        </div>
    </div>

    <br><br>

    <!-- Source Venders -->
    <script type="text/javascript" src="/js/vendors/angular.min.js"></script>
    <script type="text/javascript" src="/js/vendors/jquery-2-1-0.min.js"></script>
    <script type="text/javascript" src="/js/vendors/angular-route.min.js"></script>

    <!-- Source TestApp -->
    <script type="text/javascript" src="/js/apps/test.js"></script>

    <!-- Source Services -->
    <script type="text/javascript" src="/js/services/authentication_service.js"></script>
    <script type="text/javascript" src="/js/services/session_service.js"></script>
    <script type="text/javascript" src="/js/services/book_service.js"></script>

    <!-- Source Controllers -->
    <script type="text/javascript" src="/js/controllers/login_controller.js"></script>
    <script type="text/javascript" src="/js/controllers/books_controller.js"></script>

    <!-- Source Directives -->

    <!-- Source Routes -->
    <script type="text/javascript" src="/js/routes/routes.js"></script>

    <!-- CSRF Token used for AuthenticationService -->
    <script>
        angular.module("TestApp").constant("CSRF_TOKEN", {
            csrf_token: '<?php echo csrf_token(); ?>'
        });
    </script>

</body>
</html>
