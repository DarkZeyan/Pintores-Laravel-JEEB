@extends('layouts.master')
@section('title', $title)
@section('header')
@section('tituloHeader', $tituloHeader)
@stop
@section('contenido')

@endsection
@section('footer')
    @section('nombre', $nombre)
    @section('grupo', $grupo)
@stop