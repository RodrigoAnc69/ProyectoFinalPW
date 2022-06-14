@extends('layouts.master')
@section('title', 'Productos')
@section('content')
<script type="text/javascript">
    var app = angular.module('ProductNewModule', [])
    app.controller('ProductNewController', ($scope, $http) => {
        $scope.product = {}

        $scope.postProduct = () => {
            $http.post('/products', $scope.product).then((result) => {
                window.location.href = '/listproducts'
            })
        }
    })
</script>
<form ng-app="ProductNewModule" ng-controller="ProductNewController">
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
        <button type="button" ng-click="postProduct()" class="btn btn-primary">Submit</button>
        <a href="/liststudents"  class="btn btn-primary">Go back</a>
    </div>
</form>
@stop