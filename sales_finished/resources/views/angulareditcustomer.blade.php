@extends('layouts.master')
@section('title', 'Customer Edit')
@section('content')
<script>
    var app = angular.module('CustomerEditModule', [])
    app.controller('CustomerEditController', ($scope, $http) => {
        $scope.customer = {}
        angular.element(document).ready(function() {
            let ids = window.location.href.split('/')
            let id = ids[ids.length - 1]

            $http.get(`/ajaxcustomers/${id}`).then((result) => {
                $scope.customer = result.data
            })
        })

        $scope.putCustomer = () => {
            $http.put('/ajaxcustomers', $scope.customer).then((result) => {
                window.location.href = '/ajaxcustomerlist'
            })
        }
    })
</script>
<div ng-app="CustomerEditModule" ng-controller="CustomerEditController">
    <form>
        <div>
            Nombre:
            <input type="text" ng-model="customer.firstName" class="form-control">
        </div>
        <div>
            Primer Apellido:
            <input type="text" ng-model="customer.lastName" class="form-control">
        </div>
        <div>
            NIT:
            <input type="text" ng-model="customer.nit" class="form-control">
        </div>
        <div>
            Fecha de Nacimiento:
            <input type="text" ng-model="customer.birthDate" class="form-control">
        </div>
        <div>
            Direccion:
            <input type="text" ng-model="customer.address" class="form-control">
        </div>
        <div>
            Nombre de Usuario:
            <input type="text" ng-model="customer.username" class="form-control">
        </div>
        <div>
            Email:
            <input type="text" ng-model="customer.email" class="form-control">
        </div>
        <div>
            Contraseña:
            <input type="password" ng-model="customer.password" class="form-control">
        </div>
        <div>
            <button type="button" ng-click="putCustomer()" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>
@stop