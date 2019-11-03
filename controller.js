(function(angular){
    'use strict'
    angular.module("MyController", [])
        .controller("HomeController", function($scope, $http){
            
        })
        .controller("PeriodeController", function($scope, $http){
            $scope.DatasPeriode=[];            
            $http({
                method: "GET",
                url: "http://localhost/kuis/restapi/Periode",
                header: {
                    "Content-Type": "application/json"
                }
            }).then(function(response){
                $scope.DatasPeriode= response.data.data;
            })  
        })
        .controller("UserController", function($scope, $http){
            $scope.DatasUser=[];
            $http({
                method: "GET",
                url: "http://localhost/kuis/restapi/user",
                header: {
                    "Content-Type": "application/json"
                }
            }).then(function(response){
                $scope.DatasUser= response.data.data;
            })
        .controller("RoleController", function($scope, $http){
            $scope.DatasRole=[];
            $http({
                method: "GET",
                url: "http://localhost/kuis/restapi/role",
                header: {
                    "Content-Type": "application/json"
                }
            }).then(function(response){
                $scope.DatasRole= response.data.data;
            })
        })
    })
})(window.angular);