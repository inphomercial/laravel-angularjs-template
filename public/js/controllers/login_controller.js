TestApp.controller('LoginController', function ($scope, $location, AuthenticationService) {

	$scope.credientials = {
		email : null,
		password : null
	},

	$scope.login = function() {
		AuthenticationService.login($scope.credientials);

		// If auth, redirect to main page
		$location.path('/view1');
	},

	$scope.logout = function() {
		AuthenticationService.logout();
		$location.path('/');
	}
});