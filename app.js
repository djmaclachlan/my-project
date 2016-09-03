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
        {mix:'<iframe width="560" height="315" src="https://www.youtube.com/embed/ZUpUD2JJe0U" frameborder="0" allowfullscreen></iframe>'},
        {mix:'<iframe width="560" height="315" src="https://www.youtube.com/embed/C0vksDKSaRE" frameborder="0" allowfullscreen></iframe>'},
        {mix:'<iframe width="560" height="315" src="https://www.youtube.com/embed/DlkO768mDfQ" frameborder="0" allowfullscreen></iframe>'},
        {mix:'<iframe width="560" height="315" src="https://www.youtube.com/embed/zspxB1AUTjs" frameborder="0" allowfullscreen></iframe>'},
        {mix:'<iframe width="560" height="315" src="https://www.youtube.com/embed/RDLSuP0-se0" frameborder="0" allowfullscreen></iframe>'}
         ];




});