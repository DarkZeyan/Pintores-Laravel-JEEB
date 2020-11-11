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
<section class="pintores">
    <div class="pintor">
        <a href="{{action('PintoresController@davinci')}}">
            <img src="images/pintor1.jpg" alt="Da Vinci">
            <h4>Leonardo Da Vinci</h4>
        </a>
    </div>
    <div class="pintor">
        <a href="{{action('PintoresController@velazquez')}}">
            <img src="/images/pintor2.jpg" alt="Velazquez">
            <h4 class="cTexto">Diego Velazquez</h4>
        </a>
    </div>
    <div class="pintor">
        <a href="{{action('PintoresController@picasso')}}">
            <img src="images/pintor3.jpg" alt="Picasso">
            <h4 class="cTexto">Pablo Picasso</h4>
        </a>
    </div>
    <div class="{{action('PintoresController@vangogh')}}">
        <a href="vangogh">
            <img src="images/pintor4.jpg" alt="van Gogh">
            <h4 class="cTexto">Vincent van Gogh</h4>
        </a>
    </div>

</section>
@endsection
@section('footer')
    @section('nombre', $nombre)
    @section('grupo', $grupo)
@stop