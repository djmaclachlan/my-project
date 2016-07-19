app.controller('MainController', ['$scope', function($scope) {
    $scope.title = 'Dan\'s Music App';
    $scope.promo = 'First App Attempt';

    $scope.plusOne = function(index) {
        $scope.products[index].likes += 1;
    };
    $scope.minusOne = function(index) {
        $scope.products[index].dislikes += 1;
    };
}]);
