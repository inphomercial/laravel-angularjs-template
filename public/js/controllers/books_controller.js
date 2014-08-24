TestApp.controller('BooksController', function ($scope, AuthenticationService, BookService) {

	$scope.books = [],

	// service returns a promise
	BookService.get().then(function(books) {
		$scope.books = books;
	});
});