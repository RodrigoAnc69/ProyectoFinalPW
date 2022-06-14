@extends('layouts.master')
@section('title', 'New Customer')

@section('content')
<div class="container pl-5 pr-5">
    <form action="/customers" method="POST">
        @csrf
        <div class="form-group">
            <label for="txtFirstName">Nombre</label>
            <input id="txtFirstName" class="form-control" name="firstName" />
        </div>
        <div class="form-group">
            <label for="txtLastName">Apellido</label>
            <input id="txtLastName" class="form-control" name="lastName" />
        </div>
        <div class="form-group">
            <label for="txtNit">NIT</label>
            <input id="txtNit" class="form-control" name="nit" />
        </div>
        <div class="form-group">
            <label for="txtAddress">Direccion</label>
            <input id="txtAddress" class="form-control" name="address" />
        </div>
        <div class="form-group">
            <label for="txtBirthDate">Fecha de Nacimiento</label>
            <input id="txtBirthDate" class="form-control" type="date" name="birthDate" />
        </div>
        <div class="form-group">
            <label for="txtUsername">Nombre de Usuario</label>
            <input id="txtUsername" class="form-control" name="username" />
        </div>
        <div class="form-group">
            <label for="txtEmail">Email</label>
            <input id="txtEmail" class="form-control" name="email" />
        </div>
        <div class="form-group">
            <label for="txtPassword">Contador</label>
            <input id="txtPassword" class="form-control" type="password" name="password" />
        </div>
        <input type="submit" class="btn btn-primary" value="Send" />
        <a href="/customers" class="btn btn-primary">Atras</a>
    </form>
</div>
@stop