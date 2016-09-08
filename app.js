/**
 * Created by NowWithLessVirus! on 7/19/16.
 */
var app = angular.module('myApp', ['ngRoute']);
app.config(function($routeProvider) {
    $routeProvider

        .when('/', {
            templateUrl : 'home.html',
            controller  : 'MainController'
        })

        .otherwise({redirectTo: '/'});
});

/*primary controller */
app.controller('MainController', function($scope) {

    $scope.myName = "Daniel MacLachlan";
    $scope.myPrimaryLanguages = "HTML5, CSS5, PHP, MYSQL, Javascript, AngularJS";
    $scope.myBio = "Hello, and welcome to my web portfolio! I am an aspiring web developer living in Upstate, NY. Take a look around this site to get an idea of my work and style."
    $scope.heroImage = {
        background: 'url(appbg.jpg)'
    };





});