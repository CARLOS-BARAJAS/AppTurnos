@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')


<div class="card">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <div class="row d-flex justify-end">
            <button type="button" class="btn btn-success mb-3">Crear</button>
        </div>
        <table id="example1" class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo Electronico</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>
                            <button class="bg-green-400">Editar</button>
                            <button>Eliminar</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No data.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@stop
@include('_partials.datatable')
