@extends('layouts.master')
@section('title', 'Productos')
@section('content')
<script type="text/javascript">
    var app = angular.module('ProductListModule', []);
    app.controller('ProductListController', ($scope, $http) => {
        $scope.products = [];

        $scope.getProducts = () => {
            $http.get('/products').then((result) => {
                $scope.products = result.data;
            })
        }

        angular.element(document).ready(function() {
            $scope.getProducts();
        })

        $scope.deleteProduct = (id) => {
            $http.delete(`/products/${id}`).then((result) => {
                $scope.getProducts();
            })
        }
    })
</script>
<div ng-app="ProductListModule" ng-controller="ProductListController">
    <a href="/newproduct" class="btn btn-warning">NuevoProducto</a>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Price
                </th>
                <th>
                    Description
                </th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="product in products">
                <td>
                    @{{ product.name }}
                </td>
                <td>
                    @{{ product.price }}
                </td>
                <td>
                    @{{ product.description }}
                </td>
                <td>
                    <a href="@{{ '/editproduct/' + product.id }}" class="btn btn-warning">Editar</a>
                    <button type="button" ng-click="deleteProduct(product.id)" class="btn btn-warning">Modificar</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@stop