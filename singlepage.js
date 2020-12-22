angular.module('myapp',['ngRoute'])
.config(function($routeProvider){
    $routeProvider.when('/',{
        templateUrl:'christ/about.html'
    }).when('/home',{
        templateUrl:'christ/home.html',
        controller:'homectrl'}).when('/home/:first/:last',{
            templateUrl:'christ/home.html',
            controller:'homectrl'
        }).when('/contact',{
        templateUrl:'christ/contact.html'
    })
    .otherwise({redirectTo:'/'})
})
.controller('mainController',function(){

})
.controller('homectrl',function($scope,$routeParams) {
    $scope.message="Hello Welcome to the Furiture Website"
    if($routeParams.first&&$routeParams.last)
 {
    $scope.person={
       first:$routeParams.first,
       last:$routeParams.last,
    };
 }
 })