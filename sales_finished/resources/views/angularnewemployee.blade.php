@extends('layouts.master')
@section('title', 'New Customer')
@section('content')
<script type="text/javascript">
    var app = angular.module('EmployeeAddModule', []);
    app.controller('EmployeeAddController', ($scope, $http) => {
        $scope.employee = {};

        $scope.addEmployee = () => {
            $http.post('/ajaxemployees', $scope.employee).then((result) => {
                if (result.data.result === 1) {
                    window.location.href = '/ajaxemployeelist';
                }
            });
        }
    })
</script>
<div class="container" ng-app="EmployeeAddModule" ng-controller="EmployeeAddController">
    <form>
        <div class="form-group">
            <label for="txtFirstName">Nombre</label>
            <input id="txtFirstName" class="form-control" ng-model="employee.firstName" />
        </div>
        <div class="form-group">
            <label for="txtLastName">Primer Apellido</label>
            <input id="txtLastName" class="form-control" ng-model="employee.lastName" />
        </div>
        <div class="form-group">
            <label for="txtBirthDate">Fecha de Nacimiento</label>
            <input id="txtBirthDate" class="form-control" ng-model="employee.birthDate" />
        </div>
        <div class="form-group">
            <label for="txtCity">Ciudad</label>
            <input id="txtCity" class="form-control" ng-model="employee.city" />
        </div>
        <div class="form-group">
            <label for="txtAddress">Direccion</label>
            <input id="txtAddress" class="form-control" ng-model="employee.address" />
        </div>
        <div class="form-group">
            <label for="txtPhoto">Foto</label>
            <input id="txtPhoto" class="form-control" ng-model="employee.photo" />
        </div>
        <div class="form-group">
            <label for="txtUsername">Nombre de Usuario</label>
            <input id="txtUsername" class="form-control" ng-model="employee.username" />
        </div>
        <div class="form-group">
            <label for="txtEmail">Email</label>
            <input id="txtEmail" class="form-control" ng-model="employee.email" />
        </div>
        <div class="form-group">
            <label for="txtPassword">Contraseña</label>
            <input id="txtPassword" class="form-control" type="password" ng-model="employee.password" />
        </div>
        <input type="button" class="btn btn-warning" value="Send" ng-click="addEmployee()" />
        <a href="/employees" class="btn btn-warning">Atras</a>
    </form>
</div>
@stop