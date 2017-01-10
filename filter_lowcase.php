<!DOCTYPE html>
<html>
<script src="angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="personCtrl">

<p>The name is {{ lastName | uppercase }}</p>

<p>The name is {{ firstName | uppercase }}</p>

</div>

<div ng-app="myApp2" ng-controller="carCtrl">

<p>The name is {{ last | uppercase }}</p>

<p>The name is {{ first | uppercase }}</p>

</div>

<script>
angular.module('myApp', []).controller('personCtrl', function($scope) {
    $scope.firstName = "Nasution",
    $scope.lastName = "Angeline"
});

angular.module('myApp2', []).controller('carCtri', function($scope) {
    $scope.first = "Mercedes",
    $scope.last = "Benz"
});
</script>

</body>
</html>
