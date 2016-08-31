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

        .when('/web', {
            templateUrl : 'web.html',
            controller  : 'MainController'
        })

        .when('/cpp', {
            templateUrl : 'cpp.html',
            controller  : 'CPPController'
        })

        .otherwise({redirectTo: '/'});
});

/*primary controller */
app.controller('MainController', function($scope) {


});