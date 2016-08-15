/**
 * Created by NowWithLessVirus! on 7/19/16.
 */
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
        .when("/index", {
            templateUrl : "index.html"
        })
.when("/about", {
    templateUrl : "aboutme.html"
    })
.when("/education", {
    templateUrl : "education.html"
    });
});