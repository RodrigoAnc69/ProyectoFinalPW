@extends('layouts.master')
@section('title', 'Customers List')

@section('content')
<table class="table table-dark table-striped table-hover">
    <thead>
        <tr>
            <th>
                Nombre
            </th>
            <th>
                Primer Apellido
            </th>
            <th>
                NIT
            </th>
            <th>
                Fehca de Nacimiento
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
        <tr>
            <td>
                {{ $customer->firstName }}
            </td>
            <td>
                {{ $customer->lastName }}
            </td>
            <td>
                {{ $customer->nit }}
            </td>
            <td>
                {{ $customer->birthDate }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/newcustomer" class="btn btn-primary">New Customer</a>
@stop