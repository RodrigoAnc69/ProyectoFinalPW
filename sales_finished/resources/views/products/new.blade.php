@extends("templates.main")
@section("title", "New student")
@section("script")
<script type="text/javascript">
    var app = angular.module('StudentNewModule', [])
    app.controller('StudentNewController', ($scope, $http) => {
        $scope.student = {}

        $scope.postStudent = () => {
            $http.post('/students', $scope.student).then((result) => {
                window.location.href = '/liststudents'
            })
        }
    })
</script>
@stop
@section("content")
<form ng-app="StudentNewModule" ng-controller="StudentNewController">
    <div>
        First name:
        <input type="text" class="form-control" ng-model="student.firstName">
    </div>
    <div>
        Last name:
        <input type="text" class="form-control" ng-model="student.lastName">
    </div>
    <div>
        City:
        <input type="text" class="form-control" ng-model="student.city">
    </div>
    <div>
        Semester:
        <input type="number" class="form-control" ng-model="student.semester">
    </div>
    <div>
        Address:
        <textarea class="form-control" ng-model="student.address"></textarea>
    </div>
    <div>
        <button type="button" ng-click="postStudent()" class="btn btn-primary">Submit</button>
        <a href="/liststudents"  class="btn btn-primary">Go back</a>
    </div>
</form>
@stop