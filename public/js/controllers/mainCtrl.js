angular.module('mainCtrl', [])

.controller('mainController', function($scope, $http, User) {
    
    $scope.userData = {};

    // loading variable to show the spinning loading icon
    $scope.loading = true;

    User.get()
        .success(function(data) {
            $scope.users = data;
            $scope.loading = false;
        });

    // function to handle submitting the form
    $scope.submitUser = function() {
        $scope.loading = true;

        User.save($scope.userData)
            .success(function(data) {

                User.get()
                    .success(function(getData) {
                        $scope.users = getData;
                        $scope.loading = false;
                    });

            })
            .error(function(data) {
                console.log(data);
            });
    };

    
    $scope.deleteUser = function(id) {
        $scope.loading = true; 

        // use the function we created in our service
        User.destroy(id)
            .success(function(data) {

                User.get()
                    .success(function(getData) {
                        $scope.users = getData;
                        $scope.loading = false;
                    });

            });
    };

});
