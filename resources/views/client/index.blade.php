@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    @forelse($clients as $client)
     <li><a href="#">{{ $client -> name}}</a></li>
     <li><a href="#">{{ $client -> email}}</a></li>   
     <li><a href="#">{{ $client -> phone}}</a></li> 
    @empty

    <p>No data. </p>

    @endempty

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop