/**
 * Created by NowWithLessVirus! on 7/19/16.
 */
var app = angular.module('myApp', ['ngRoute']);
app.config(function($routeProvider) {
    $routeProvider

        .when('/', {
            templateUrl : 'main.html',
            controller  : 'MainController'
        })

        .when('/about', {
            templateUrl : 'aboutus.html',
            controller  : 'MainController'
        })

        .when('/broadcast', {
            templateUrl : 'broadcast.html',
            controller  : 'MainController'
        })
        .when('/am', {
            templateUrl : 'am.html',
            controller  : 'MainController'
        })
        .when('/antennas', {
            templateUrl : 'antennas.html',
            controller  : 'MainController'
        })
        .when('/fm', {
            templateUrl : 'fm.html',
            controller  : 'MainController'
        })
        .otherwise({redirectTo: '/'});
});

/*primary controller */
app.controller('MainController', function($scope) {


});