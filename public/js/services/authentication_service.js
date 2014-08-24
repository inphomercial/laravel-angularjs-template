TestApp.factory('AuthenticationService', function($http, CSRF_TOKEN, SessionService) {

	var cacheSession = function() {
		SessionService.set('authenticated', true);
	};

	var uncacheSession = function() {
		SessionService.unset('authenticated');
	};

    var AuthenticationService = {

        login: function( credentials ) {
        	$http.post("/auth/login", angular.extend(credentials, CSRF_TOKEN))
        		.success(function(data) {
        			cacheSession();
        		})
        		.error(function(status) {
        			console.log(status);
        		})
        },

        logout: function() {
        	$http.get("/auth/logout");
        	uncacheSession();
        },

        isLoggedIn: function() {
        	return SessionService.get('authenticated');
        }
    };

    return AuthenticationService;
});