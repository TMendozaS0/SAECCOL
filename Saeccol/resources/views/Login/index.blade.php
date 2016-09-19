<!-- Creado: Félix Ricardo Oliva Alonso, 25/08/2016. Formulario de inicio de sesión  -->

@extends('layouts.master')
@section('content')
  {!!Html::style('css/login.css')!!}

  <div id="contenedor">
    <div id="main">
      <form action="#">
        <table>
          <th><h4>INICIAR SESIÓN</h4></th>
          <tr><td>Usuario</td></tr>
          <tr><td> <input type="text" id="usuario" placeholder="Ingrese su nombre de usuario" autofocus="" required="required"><br><br> </td></tr>
          <tr><td>Contraseña</td></tr>
          <tr><td> <input type="password"  id="password" placeholder="Ingrese su contraseña" required="required"><br><br> </td></tr>
          <tr><td> <button type="submit" name="button">Acceder</button> </td></tr>
        </table>
      </form>
    </div>
  </div>
@endsection
