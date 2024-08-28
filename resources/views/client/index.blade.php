@extends('adminlte::page')
@extends('layouts.config-app')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')


<div class="card">
    <div class="card-header">
        <h3>Listado Clientes</h3>
    </div>
    <div class="card-body">
        <div class="row d-flex justify-end">
            <button type="button" class="bg-green-500 hover:first:bg-green-300 p-2 mb-3 rounded-lg">CREAR</button>
        </div>
        <table id="example1" class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre pagina</th>
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
                            <a href="{{route('client.show', $client->id)}}" class="bg-blue-400 p-2 rounded-lg">Ver</a>
                            <a href="{{ route('client.edit', $client->id)}}" class="bg-green-400 p-2 rounded-lg">Editar</a>
                            <button class="bg-red-400 p-2 rounded-lg">Eliminar</button>
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
