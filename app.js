/**
 * Created by NowWithLessVirus! on 7/19/16.
 */
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl : "home.html",
            controller  : "MainController"
        })
        .when("/green", {
            templateUrl : "green.htm"
        })
        .when("/blue", {
            templateUrl : "blue.htm"
        })
        .otherwise({
            templateUrl : "home.html",
            controller  :  "MainController"
        });
});
var controllers = {};
controllers.testController = function($scope){
    $scope.title = 'Dan\'s web portfolio';
    $scope.promo = 'Here are a list of some of my web projects';
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
}

demo.controller(controllers)