/**
 * Created by NowWithLessVirus! on 7/19/16.
 */
var app = angular.module('myApp', ['ngRoute', 'ngAnimate']);
app.config(function($routeProvider) {
    $routeProvider

        .when('/', {
            templateUrl : 'main.html',
            controller  : 'MainController'
        })

        .when('/web', {
            templateUrl : 'web.html',
            controller  : 'MainController',
            css : 'style.css'
        })

        .when('/about', {
            templateUrl : 'pages/about.html',
            controller  : 'AboutController',
            css : 'style.css'
        })

        .otherwise({redirectTo: '/'});
});
app.controller('MainController', function($scope) {
    $scope.title = 'Dan\'s web portfolio';
    $scope.promo = 'Here are a list of some of my web projects';
    $scope.projects = [
        {
            title: 'Action Telephone',
            subtitle: 'Ongoing',
            cover: 'carousel2.jpg',
            link: 'http://www.actiontelephone.com'
        },
        {
            title: 'Second Project',
            subtitle: 'TBA',
            cover: 'placeholder.png',
            link: 'http://warrlock608.github.io/my-project'
        },
        {
            title: 'Third Project',
            subtitle: 'TBA',
            cover: 'placeholder.png',
            link: 'http://warrlock608.github.io/my-project'
        }
    ];
    $scope.myName = 'Daniel J. MacLachlan';
    $scope.myBio = 'Hello, my name is Dan MacLachlan, and welcome to my web portfolio. Within the contents of this page you will find past projects, current projects, and a few things that I hope to begin this year. My specialty is responsive design in a mobile environment and all work I do is mobile first. Over the course of the next year I intend to become very familiar with some of the more interactive javascript extensions such as Angular and Node.';
    $scope.myPrimaryLanguages = 'HTML5, CSS3, Bootstrap, Javascript, Angularjs, PHP, and MySQL';
    $scope.mySecondaryLanguages = 'C++, C#, Microsoft Batch Script';
    $scope.myImage = 'me.jpeg';
});
