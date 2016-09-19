<!-- Creado: Félix Ricardo Oliva Alonso, 13/09/2016. Se crea la la vista para la administración del CSS por  parte del usuario root -->
<!-- Modificado: Félix Ricardo Oliva Alonso, 14/09/2016. Se crea la la vista para la administración del CSS por  parte del usuario root -->
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
          <div class="col1e"><button type="submit" id="btn_seleccionar">Seleccionar</button></div>
          <div class="col1"><button type="submit" id="btn_agregar">Agregar</button></div>
          <div class="col2">Estilo: <input type="text" id="estilo" autofocus="" placeholder="Máximo 200 caracteres"/>  </div>
          <div class="col1">
            <div class="checkbox">
              Activo:<input type="checkbox" value="asas">
            </div>
          </div>
          <div class="col1"><button type="submit" id="btn_listar">Listar</button></div>
        </div>
      </div>
    </form>

    <div id="contenedor_tabla">
      <table border="1">
        <th>N°</th><th>Este es el Título</th><th>Esta es la Descripción</th><th>Mi fecha - Subido desde</th><th>Opciones</th></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td> <a href="#">Activo</a><a href="#">Baja</a><a href="#" class="editarcss">Editar</a></td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td> <a href="#">Activo</a><a href="#">Baja</a><a href="#" class="editarcss">Editar</a></td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td> <a href="#">Activo</a><a href="#">Baja</a><a href="#" class="editarcss">Editar</a></td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td> <a href="#">Activo</a><a href="#">Baja</a><a href="#" class="editarcss">Editar</a></td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td> <a href="#">Activo</a><a href="#">Baja</a><a href="#" class="editarcss">Editar</a></td></tr>
      </table>
    </div>

    <form name="datospersonales" method="#" action="#">
      <div id="agregar">
        <div class="bloqueajax">
          <div class="columnaajax">
            <div class="col2ajax">
              <input type="text" id="estilo"  required="required" placeholder="Máximo 200 caracteres" />
              <button type="submit" id="btn_upload">Upload</button>
            </div>
            <div class="col2ajax">Título: <input type="text" id="estilo" required="required" placeholder="Máximo 200 caracteres" />  </div>
          </div>

          <div class="columnaajax">
            Descripción: <br>
            <textarea rows="6" cols="62"></textarea><br />
          </div>
        </div>
        <div id="sombra">
          <div class="col1"><button type="submit" id="btn_upload">Guardar</button></div>
        </div>
      </div>
    </form>

    <form name="datospersonales" method="#" action="#">
      <div id="agregar3">
        <div class="bloqueajax">
          <div class="columnaajax">
            <div class="col2ajax">
              <input type="text" id="estilo"  required="required" placeholder="Máximo 200 caracteres" />
              <button type="submit" id="btn_upload">Upload</button>
            </div>
            <div class="col2ajax">Título: <input type="text" id="estilo" required="required" placeholder="Máximo 200 caracteres" />  </div>
          </div>

          <div class="columnaajax">
            Descripción: <br>
            <textarea rows="6" cols="62"></textarea><br />
          </div>
        </div>
        <div id="sombra">
          <div class="col1"><button type="submit" id="btn_upload">Guardar</button></div>
        </div>
      </div>
    </form>
  </div>

@endsection
