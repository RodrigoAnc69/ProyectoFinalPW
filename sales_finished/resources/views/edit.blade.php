@extends('layouts.master')
@section('title', 'Productos')
@section('content')
<script type="text/javascript">
    function getParameterByName(url = window.location.href) {
        // Obtener el valor numerico del id al final de la direccion url
        return url[url.lastIndexOf('/') + 1]
    }

    var app = angular.module('ProductEditModule', [])
    app.controller('productEditController', ($scope, $http) => {
        $scope.product = {}
        angular.element(document).ready(() => {
            id = getParameterByName()
            $http.get(`/products/${id}`).then((result) => {
                $scope.product = result.data
            })
        })

        $scope.putProduct = () => {
            $http.put('/products', $scope.product).then((result) => {
                window.location.href = '/listproducts'
            })
        }
    })
</script>
@stop
@section("content")
<form ng-app="ProductEditModule" ng-controller="productEditController">
<div>
        Name:
        <input type="text" class="form-control" ng-model="product.name">
    </div>
    <div>
        Price:
        <input type="number" class="form-control" ng-model="product.price">
    </div>
    <div>
        Description:
        <input type="text" class="form-control" ng-model="product.description">
    </div>
    <div>
        Photo:
        <input type="text" class="form-control" ng-model="product.photo">
    </div>
    <div>
        <button type="button" ng-click="putProduct()" class="btn btn-warning">Submit</button>
        <a href="/listproducts"  class="btn btn-warning">Go back</a>
    </div>
</form>
@stop