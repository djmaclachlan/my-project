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

        .when('/blog', {
            templateUrl : 'pages/blog.html',
            controller  : 'BlogController'
        })

        .when('/about', {
            templateUrl : 'pages/about.html',
            controller  : 'AboutController'
        })

        .otherwise({redirectTo: '/'});
});
app.controller('MainController', function($scope) {
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
            title: 'Second Project',
            subtitle: 'Ongoing',
            cover: 'test.jpg',
            link: 'http://warrlock608.github.io/my-project'
        },
        {
            title: 'Third Project',
            subtitle: 'Ongoing',
            cover: 'carousel3.jpg',
            link: 'http://www.google.com'
        }
    ];
    $scope.myName = 'Daniel J. MacLachlan';
    $scope.myDob = '01/08/1988';
    $scope.myBio = 'Hello, my name is Dan MacLachlan, and welcome to my web portfolio. Within the contents of this page you will find past projects, current projects, and a few things that I hope to begin this year. My specialty is responsive design in a mobile environment and all work I do is mobile first. Over the course of the next year I intend to become very familiar with some of the more interactive javascript extensions such as Angular and Node.';
    $scope.myPrimaryLanguages = 'HTML5, CSS3, Bootstrap, Angularjs, PHP, and MySQL';
    $scope.mySecondaryLanguages = 'C++, C#, Microsoft Batch Script';
    $scope.myImage = 'me.jpeg';
});
