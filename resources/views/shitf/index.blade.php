@extends('adminlte::page')
@extends('layouts.config-app')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Turnos</h1>
@stop

@section('content')


    <h1>Gestion de Turnos</h1>

    <div class="mb-5">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <div class="card-body">
                    <form method="POST" action="{{ route('client.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="date">Fecha</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="place">Selecciona Lugar Atencion</label>
                            </div>
                            <select id="place" name="place">
                                <option value="Consultorio 1">Consultorio 1</option>
                                <option value="Consultorio 2">Consultorio 2</option>
                                <option value="Consultorio 3">Consultorio 3</option>
                                <option value="Consultorio 4 ">Consultorio 4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="name">Seleccionar Cliente:</label>
                            </div>
                            <select id="name" name="name">
                                @foreach ($nameClients as $name)
                                    <option value="{{ $name }}">{{$name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="grid">
                            <div class=" right-0  mr-4">
                                <button type="submit" class="bg-green-300 p-2 rounded-lg" value="Create">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div>

            </div>
        </div>


    </div>

    <table id="example1" class="table table-striped">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Turno</th>
                <th>lugar</th>
                <th>Estado</th>
                <th>Cliente</th>
            </tr>
        </thead>
        <tbody>
            @forelse($shitfs as $shitf)
                <tr>
                    <td>{{ $shitf->date }}</td>
                    <td>{{ $shitf->shitf }}</td>
                    <td>{{ $shitf->place }}</td>
                    <td>{{ $shitf->state }}</td>
                    <td>{{ $shitf->client->name}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No data.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@stop
@include('_partials.datatable')
