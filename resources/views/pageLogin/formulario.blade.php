@extends('layouts.master')
@section('title', $title)
@section('header')
@section('tituloHeader', $tituloHeader)
@stop

@section('contenido')
<form action="{{action('PintoresController@validarLogin')}}" method="POST">
    {{ csrf_field() }}
   
    <label for="user">Usuario</label>
    <input type="text" name="user">
    <br>
    <label for="password">Contraseña</label>
    <input type="password" name="password">
    <br>
    <label for="key">Key</label>
    <input type="text" name="key">
    <br>    
    <input type="submit" value="Iniciar sesion">
</form>
@endsection
@section('footer')
    @section('nombre', $nombre)
    @section('grupo', $grupo)
@stop