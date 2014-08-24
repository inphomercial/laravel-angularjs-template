TestApp.factory('BookService', function($http, $location) {

    var BookService = {

        books : [],

        get: function() {
        	return $http.get("/books")
                .then(function(books) {
                    if(typeof books.data === 'object')
                    {
                        return books.data;
                    }
                    else
                    {
                        // invalid response
                        return $q.reject(books.data);
                    }
                    /*.success(function(books) {
                    return books.data;
                    })
                    .error(function(data) {
                        console.log("Error getting books from GET:/books");
                    });*/
                });
        }
    };

    return BookService;
});