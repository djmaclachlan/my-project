app.controller('MainController', ['$scope', function($scope) {
    $scope.title = 'Dan\'s web portfolio';
    $scope.promo = 'Dan\'s first app';
    $scope.projects = [
        {
            title: 'Action Telephone',
            subtitle: 'Complete',
            cover: 'carousel2.jpg',
            link: 'http://www.actiontelephone.com'
        },
        {
            title: 'Second Product',
            subtitle: 'Ongoing',
            cover: 'test.jpg',
            link: 'http://warrlock608.github.io/my-project'
        }
    ];
    $scope.plusOne = function(index) {
        $scope.products[index].likes += 1;
    };
    $scope.minusOne = function(index) {
        $scope.products[index].dislikes += 1;
    };
}]);
