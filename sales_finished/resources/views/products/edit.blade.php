@extends("templates.main")
@section("title", "Edit student")
@section("script")
<script type="text/javascript">
    function getParameterByName(url = window.location.href) {
        // Obtener el valor numerico del id al final de la direccion url
        return url[url.lastIndexOf('/') + 1]
    }

    var app = angular.module('StudentEditModule', [])
    app.controller('StudentEditController', ($scope, $http) => {
        $scope.student = {}
        angular.element(document).ready(() => {
            id = getParameterByName()
            $http.get(`/students/${id}`).then((result) => {
                $scope.student = result.data
            })
        })

        $scope.putStudent = () => {
            $http.put('/students', $scope.student).then((result) => {
                window.location.href = '/liststudents'
            })
        }
    })
</script>
@stop
@section("content")
<form ng-app="StudentEditModule" ng-controller="StudentEditController">
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
        <button type="button" ng-click="putStudent()" class="btn btn-primary">Submit</button>
        <a href="/liststudents"  class="btn btn-primary">Go back</a>
    </div>
</form>
@stop