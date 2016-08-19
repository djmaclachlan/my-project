/**
 * Created by NowWithLessVirus! on 7/19/16.
 */
var app = angular.module('myApp', ['ngRoute']);
app.directive('head', ['$rootScope','$compile',
    function($rootScope, $compile){
        return {
            restrict: 'E',
            link: function(scope, elem){
                var html = '<link rel="stylesheet" ng-repeat="(routeCtrl, cssUrl) in routeStyles" ng-href="{{cssUrl}}" />';
                elem.append($compile(html)(scope));
                scope.routeStyles = {};
                $rootScope.$on('$routeChangeStart', function (e, next, current) {
                    if(current && current.$$route && current.$$route.css){
                        if(!angular.isArray(current.$$route.css)){
                            current.$$route.css = [current.$$route.css];
                        }
                        angular.forEach(current.$$route.css, function(sheet){
                            delete scope.routeStyles[sheet];
                        });
                    }
                    if(next && next.$$route && next.$$route.css){
                        if(!angular.isArray(next.$$route.css)){
                            next.$$route.css = [next.$$route.css];
                        }
                        angular.forEach(next.$$route.css, function(sheet){
                            scope.routeStyles[sheet] = sheet;
                        });
                    }
                });
            }
        };
    }
]);
app.config(function($routeProvider) {
    $routeProvider

        .when('/', {
            templateUrl : 'main.html',
            controller  : 'MainController',
            css : 'style.css'
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
