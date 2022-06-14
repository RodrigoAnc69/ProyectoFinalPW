@extends('layouts.master')
@section('title', 'Employee Edit')
@section('content')
<script>
    var app = angular.module('EmployeeEditModule', [])
    app.controller('EmployeeEditController', ($scope, $http) => {
        $scope.employee = {}
        angular.element(document).ready(function() {
            let ids = window.location.href.split('/')
            let id = ids[ids.length - 1]

            $http.get(`/ajaxemployees/${id}`).then((result) => {
                $scope.employee = result.data
            })
        })

        $scope.putEmployee = () => {
            $http.put('/ajaxemployees', $scope.employee).then((result) => {
                window.location.href = '/ajaxcustomerlist'
            })
        }
    })
</script>
<div ng-app="EmployeeEditModule" ng-controller="EmployeeEditController">
    <form>
        <div>
            Nombre:
            <input type="text" ng-model="employee.firstName" class="form-control">
        </div>
        <div>
            Primer Apellido:
            <input type="text" ng-model="employee.lastName" class="form-control">
        </div>
        <div>
            Fecha de Nacimiento:
            <input type="text" ng-model="employee.birthDate" class="form-control">
        </div>
        <div>
            Ciudad:
            <input type="text" ng-model="employee.city" class="form-control">
        </div>
        <div>
            Direccion:
            <input type="text" ng-model="employee.address" class="form-control">
        </div>
        <div>
            Foto:
            <input type="text" ng-model="employee.photo" class="form-control">
        </div>
        <div>
            Nombre de Usuario:
            <input type="text" ng-model="employee.username" class="form-control">
        </div>
        <div>
            Email:
            <input type="text" ng-model="employee.email" class="form-control">
        </div>
        <div>
            Contraseña:
            <input type="password" ng-model="employee.password" class="form-control">
        </div>
        <div>
            <button type="button" ng-click="putEmployee()" class="btn btn-warning">Guardar</button>
        </div>
    </form>
</div>
@stop