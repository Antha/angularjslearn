<!DOCTYPE html>
<html>
<script src="angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl">
<p>This header will change after two second</p>
<h3>{{myHeader}}</h3>
</div>

<p>The timeout service runs a function a specified number of milliseconds</p>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $timeout) {
    $scope.myHeader = "Hello World!";
    $timeout(function(){
        $scope.myHeader = "How Are You Today ???";
    },2000)
    $timeout(function(){
        $scope.myHeader = "How Are You Toda ???";
    },2000)
});
</script>

</body>
</html>
