app.controller('MainController', ['$scope', function($scope) {
    $scope.title = 'Dan\'s web portfolio';
    $scope.promo = 'Dan\'s first app';
    $scope.products = [
        {
            title: 'First Product',
            subtitle: 'test',
            cover: 'test.jpg'

        },
        {
            title: 'Second Product',
            subtitle: 'CEREAL',
            cover: 'test.jpg'
        }
    ];
    $scope.plusOne = function(index) {
        $scope.products[index].likes += 1;
    };
    $scope.minusOne = function(index) {
        $scope.products[index].dislikes += 1;
    };
}]);
