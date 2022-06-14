@extends('layouts.master')
@section('title', 'Customer List')
@section('content')
<script type="text/javascript">
    var app = angular.module('CustomerListModule', []);
    app.controller('CustomerListController', ($scope, $http) => {
        $scope.customers = [];

        $scope.getCustomer = () => {
            $http.get('/ajaxcustomers').then((result) => {
                $scope.customers = result.data;
            });
        }

        angular.element(document).ready(() => {
            $scope.getCustomer();
        });

        $scope.deleteCustomer = (id) => {
            $http.delete(`/ajaxcustomers/${id}`).then((result) => {
                $scope.getCustomer();
            })
        }
    })
</script>
<div class="container" ng-app="CustomerListModule" ng-controller="CustomerListController">
    <h2>Lista de CLientes</h2>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>
                    NIT
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Primer Apellido
                </th>
                <th>
                    Direccion
                </th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="customer in customers">
                <td>
                    @{{ customer.nit }}
                </td>
                <td>
                    @{{ customer.firstName }}
                </td>
                <td>
                    @{{ customer.lastName }}
                </td>
                <td>
                    @{{ customer.address }}
                </td>
                <td>
                    <a href="@{{ '/ajaxeditcustomer/' + customer.id }}" class="btn btn-warning">Editar</a>
                    <button type="button" ng-click="deleteStudent(employee.id)" class="btn btn-warning">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
    <a href="/ajaxnewcustomer" class="btn btn-warning">Nuevo Cliente</a>
</div>
@stop