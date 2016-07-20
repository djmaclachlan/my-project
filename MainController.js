app.controller('MainController', ['$scope', function($scope) {
    $scope.title = 'Dan\'s first app';
    $scope.promo = 'Carousel audio app';
    $scope.products = [
        {
            title: 'First Product',
            subtitle: 'test'

        }
    ];
    $scope.plusOne = function(index) {
        $scope.products[index].likes += 1;
    };
    $scope.minusOne = function(index) {
        $scope.products[index].dislikes += 1;
    };
}]);
