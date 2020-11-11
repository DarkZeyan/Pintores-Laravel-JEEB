@extends('layouts.master')
@section('title', $title)
@section('header')
@section('tituloHeader', $tituloHeader)
@stop
@section('navegacion')
<li class="nav-item">
    <a class="nav-link" href="{{action('PintoresController@principal')}}">Inicio</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{action('PintoresController@datos')}}">Datos del Alumno</a>
</li>
@stop
@section('contenido')
<h4 CLASS="centrar">
    Esta pagina fue hecha por {{$nombre}} del grupo {{$grupo}}.
    <br>
    Espero le haya gustado esta fea página  M.S.I. Raul Toledo Alberto Piñón
</h4>
<img src="images/fotitodecreditos.png" class="centrar">
@endsection
@section('footer')
    @section('nombre', $nombre)
    @section('grupo', $grupo)
@stop