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

        .otherwise({redirectTo: '/'});
});

/*primary controller */
app.controller('MainController', function($scope) {

    $scope.mixes = [
        {mix:'ZUpUD2JJe0U'},
        {mix:'C0vksDKSaRE'},
        {mix:'DlkO768mDfQ'},
        {mix:'zspxB1AUTjs'},
        {mix:'RDLSuP0-se0'}
         ];




});