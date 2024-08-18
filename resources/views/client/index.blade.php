@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    @forelse($clients as $client)


        <table id="example1" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo Electronico</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->email }}</td>

                </tr>
            </tbody>
        </table>
    @empty

        <p>No data. </p>

    @endempty

@stop
@section('js')
    <script>
        $(document).ready(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>

@stop
