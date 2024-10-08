@extends('adminlte::page')
@extends('layouts.config-app')
@section('title', 'Clientes')

@section('content')
    <div class="card mt-3">
        <div class="card-header text grid grid-cols-2">
            <h2>Crear Cliente</h2>
            <div class="d-flex justify-end">
                <a type="menu" class="bg-yellow-300 p-2 rounded-lg" href="{{ route('client.index') }}">Regresar</a>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('client.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre Completo</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Correo Electronico</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Telefono</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="grid">
                    <div class=" right-0  mr-4">
                        <button type="submit" class="bg-green-300 p-2 rounded-lg" value="Create">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
