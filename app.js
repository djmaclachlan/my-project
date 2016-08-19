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
            controller  : 'MainController',
        })

        .when('/cpp', {
            templateUrl : 'cpp.html',
            controller  : 'CPPController',
        })

        .otherwise({redirectTo: '/'});
});

/*primary controller */
app.controller('MainController', function($scope) {
    $scope.title = 'Dan\'s web portfolio';
    $scope.promo = 'Here is a list of some of my web projects';
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


/*Secondary Controller */
app.controller('CPPController', function($scope) {
    $scope.title = 'Dan\'s web portfolio';
    $scope.promo = 'Here is a list of some of my C++ projects';
    $scope.projects = [
        {
            title: 'Calculates Area of a Rectangle',
            link: 'https://drive.google.com/file/d/0B8uAm7zc58m6WGhNby0xdEhidUU/view?usp=sharing'
        },
        {
            title: 'Calculates the Average of Three Numbers',
            link: 'https://drive.google.com/file/d/0B8uAm7zc58m6VFFvajM3NjNob1U/view?usp=sharing'
        },
        {
            title: 'Converts Farenheit Into Celcius',
            link: 'https://drive.google.com/file/d/0B8uAm7zc58m6VEhGMXNhalg4WEU/view?usp=sharing'
        },
        {
            title: 'Calculates the Cost of Car Rental',
            link: 'https://drive.google.com/file/d/0B8uAm7zc58m6ZFBGRkRYaEs5SFk/view?usp=sharing'
        },
        {
            title: 'Calculates the Average of a Gradebook',
            link: 'https://drive.google.com/file/d/0B8uAm7zc58m6bVJsMXVkUXc2V0E/view?usp=sharing'
        },
        {
            title: 'Calculates the Distance Between Two Points',
            link: 'https://drive.google.com/file/d/0B8uAm7zc58m6cE9nMEJYSDZ6ckU/view?usp=sharing'
        },
        {
            title: 'Splits a Float Number Into A Whole Number and Fraction',
            link: 'https://drive.google.com/file/d/0B8uAm7zc58m6SHZqTHFLRzdLMGs/view?usp=sharing'
        },
    ];
});