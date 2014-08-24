TestApp.config(['$routeProvider', function($routeProvider)
{
    $routeProvider
      .when('/', {
        templateUrl: '/templates/login.html',
        controller: 'LoginController'
      })
      .when('/login', {
        templateUrl: '/templates/login.html',
        controller: 'LoginController'
      })
      .when('/view1', {
        templateUrl: '/templates/view1.html',
      })
      .when('/view2', {
        templateUrl: '/templates/view2.html',
        controller: 'BooksController'
      })
      .when('/logout', {
        templateUrl: '/templates/logout.html',
        controller: 'LoginController'
      })
      .otherwise({
        templateUrl: '/templates/login.html',
        controller: 'LoginController'
      });
}]);

TestApp.run(function($rootScope, $location, AuthenticationService) {

  var routesThatRequireAuth = ['/view2'];

  $rootScope.$on('$routeChangeStart', function(event, next, current) {
      for(var i = 0, max = routesThatRequireAuth.length ; i < max ; i++){
        if ( ($location.path() === routesThatRequireAuth[i]) && (!AuthenticationService.isLoggedIn() ) ) {
            $location.path('/login');
        }
      }﻿
  });

});