<!DOCTYPE html>
<html>
<script src="angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="namesCtrl">

<p> Type a letter in the input field : </p>

<p> <input type="text" ng-model="test"></p>

<ul>
    <li ng-repeat="x in names | filter:test">
        {{x}}
    </li>
</ul>

</div>

<script>
angular.module('myApp',[]).controller('namesCtrl',function($scope){
    $scope.names = [
       'jani',
       'cari',
       'margareth',
       'hege',
       'gustav',
       'burgit',
       'mary',
       'kai'
   ];
})
</script>


</body>
</html>