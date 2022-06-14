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
    <a href="/newproduct" class="btn btn-primary">New Student</a>
    <table class="table table-primary">
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
                    @{{ product.photo }}
                </td>
                <td>
                    <a href="@{{ '/editproduct/' + product.id }}" class="btn btn-primary">Edit</a>
                    <button type="button" ng-click="deleteProduct(product.id)" class="btn btn-warning">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@stop