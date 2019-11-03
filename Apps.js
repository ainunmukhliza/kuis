(function (angular) {
    'use strict'
    angular.module("MyApp", ["MyController", "ngAnimate", "ui.router"])
    .config(function($stateProvider, $urlRouterProvider){
        $urlRouterProvider.otherwise('Home');
        $stateProvider
            .state('Home', {
                url: "/Home",
                templateUrl: "apps/view/Home.html",
                controller: "HomeController"
            })
            .state('Periode', {
                url: "/Periode",
                templateUrl: "apps/view/Periode.html",
                controller: "PeriodeController"
            })
            .state('User', {
                url: "/User",
                templateUrl: "apps/view/User.html",
                controller: "UserController"
            })
            .state('Role', {
                url: "/Role",
                templateUrl: "apps/view/Role.html",
                controller: "RoleController"
            });
    })
    
})(window.angular);
