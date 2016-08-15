app.controller('MainController', ['$scope', function($scope) {
    $scope.title = 'Dan\'s web portfolio';
    $scope.promo = 'Dan\'s first app';
    $scope.projects = [
        {
            title: 'Action Telephone',
            subtitle: 'Completed Project',
            cover: 'carousel2.jpg'

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
