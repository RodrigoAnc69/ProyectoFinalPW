@extends('layouts.master')
@section('title', 'Customer List')
@section('content')
<script type="text/javascript">
    var app = angular.module('EmployeeListModule', []);
    app.controller('EmployeeListController', ($scope, $http) => {
        $scope.employees = [];

        $scope.getEmployees = () => {
            $http.get('/ajaxemployees').then((result) => {
                $scope.employees = result.data;
            });
        }

        angular.element(document).ready(() => {
            $scope.getEmployees();
        });

        $scope.deleteEmployee = (id) => {
            $http.delete(`/ajaxemployees/${id}`).then((result) => {
                $scope.getEmployees();
            })
        }
    })
</script>
<div class="container" ng-app="EmployeeListModule" ng-controller="EmployeeListController">
    <h2>Lista Empleados</h2>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Primer Apellido
                </th>
                <th>
                    Direccion
                </th>
                <th>
                    Fecha de Nacimiento
                </th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="employee in employees">
                <td>
                    @{{ employee.firstName }}
                </td>
                <td>
                    @{{ employee.lastName }}
                </td>
                <td>
                    @{{ employee.address }}
                </td>
                <td>
                    @{{ employee.birthDate }}
                </td>
                <td>
                    <a href="@{{ '/ajaxeditemployee/' + employee.id }}" class="btn btn-warning">Editar</a>
                    <button type="button" ng-click="deleteEmployee(employee.id)" class="btn btn-warning">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
    <a href="/ajaxnewemployee" class="btn btn-warning">Nuevo Empleado</a>
</div>
@stop
