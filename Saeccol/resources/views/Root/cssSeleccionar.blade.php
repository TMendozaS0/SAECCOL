<!-- Creado: Félix Ricardo Oliva Alonso, 14/09/2016. Se crea la la vista para la administración del CSS por  parte del usuario root -->

@extends('layouts.master')
@section('titulo')
  {{ 'Root' }}
@endsection

@section('navegacion')
  @include('layouts.navegacion')
@endsection

{!!Html::style('css/admincss.css')!!}
{!!Html::style('css/csscompartido.css')!!}
{!!Html::script('js/jquery-3.1.0.min.js')!!}
{!!Html::script('js/agregarcss.js')!!}

@section('content')
  <div id="contenedor">
    <form name="datospersonales" method="#" action="#">
      <div id="form" >
        <div class="columna">
          <div class="col3">
            Centro de salud
            <select id="lugar_n" required="required" onfocus="javascript: borrar(this);">
              <option selected="selected" disabled="disabled" value="" ></option>
              <option value="01">Opcion 1</option>
              <option value="02">Opcion 2</option>
            </select>
          </div>

          <div class="col1float">
            <label><b>Tipo de cuenta</b></label><br>
            <label><i>Esta es mi cuenta</i></label>
          </div>
        </div>

        <div class="columna_derecha">
          <div class="col2">Estilo: <input type="text" id="estilo" autofocus="" placeholder="Máximo 200 caracteres"/>  </div>
          <div class="col1"><button type="submit" id="btn_listar">Listar</button></div>
        </div>
      </div>
    </form>

    <div id="contenedor_tabla">
      <table border="1">
        <th>N°</th><th>Título</th><th>Descripción</th><th>Subido desde</th><th>Opciones</th></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
      </table>
    </div>
  </div>

@endsection
