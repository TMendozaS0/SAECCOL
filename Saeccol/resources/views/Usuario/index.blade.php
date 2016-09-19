<!-- Creado: Félix Ricardo Oliva Alonso, 05/09/2016. Se crea una página de bienvenida provisional para el usuario  -->

@extends('layouts.master')
@section('titulo')
  {{ 'Home' }}
@endsection

@section('navegacion')
  @include('layouts.navegacion')
@endsection

<style type="text/css">
  h1{
    font-size:200pt;
  }
</style>

{!!Html::style('css/crearmodificar.css')!!}
{!!Html::style('css/csscompartido.css')!!}

@section('content')

  <div id="contenedor">
    <div id="main">
      <h1>SAECCOL</h1>
    </div>
  </div>

  @endsection
