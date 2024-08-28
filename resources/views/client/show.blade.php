@extends('adminlte::page')
@extends('layouts.config-app')
@section('title', 'Clientes')

@section('content')
    <div class="card mt-3">
        <div class="card-header text grid grid-cols-2">
            <h2>Editar Cliente</h2>
            <div class="d-flex justify-end">
                <a type="menu" class="bg-yellow-300 p-2 rounded-lg" href="{{ route('client.index') }}">Regresar</a>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('client.update', $client->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nombre Completo</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Correo Electronico</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $client->email }}">
                </div>
                <div class="form-group">
                    <label for="phone">Telefono</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $client->phone }}">
                </div>
                <div class="grid">
                    <div class=" right-0  mr-4">
                        <button type="submit" class="bg-green-300 p-2 rounded-lg" value="Update">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
