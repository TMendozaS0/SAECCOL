<!-- Creado:  -->

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
    <form name="administrarperfiles" method="#" action="#">
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

        <div class="columna">
          <div class="col1e"><button type="submit" id="btn_seleccionar">Agregar Acceso</button></div>
          <div class="col1"><button type="submit" id="btn_agregar">Agregar</button></div>
          <div class="col2">Perfil: <input type="text" id="estilo" autofocus="" placeholder="Máximo 200 caracteres"/>  </div>
          <div class="col1">
            <div class="checkbox">
              Activo<input type="checkbox" value="asas">
            </div>
          </div>
          <div class="col1"><button type="submit" id="btn_listar">Listar</button></div>
        </div>
      </div>
    </form>

    <div id="contenedor_tabla">
      <table border="1">
        <th>N°</th><th>Perfil</th><th>Actividades</th><th>Activo desde</th><th>Opciones</th></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td><a href="#">Activo</a><a href="#">Baja</a><a href="#" class="clonarcss">Clonar</a><a href="#" class="editarcss">Editar</a></td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td><a href="#">Activo</a><a href="#">Baja</a><a href="#" class="clonarcss">Clonar</a><a href="#" class="editarcss">Editar</a></td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td><a href="#">Activo</a><a href="#">Baja</a><a href="#" class="clonarcss">Clonar</a><a href="#" class="editarcss">Editar</a></td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td><a href="#">Activo</a><a href="#">Baja</a><a href="#" class="clonarcss">Clonar</a><a href="#" class="editarcss">Editar</a></td></tr>
      </table>
    </div>

    <form name="administrarperfiles" method="#" action="#">
      <div id="agregar">
        <div class="bloqueajax">
          <div class="columnaajax">
            <div class="col2ajax">
              <select id="lugar_n" required="required" placeholder="Centro Salud" onfocus="javascript: borrar(this);">
                <option selected="selected" disabled="disabled" value="" ></option>
                <option value="01">Opcion 1</option>
                <option value="02">Opcion 2</option>
              </select>
            </div>
            <div class="col2ajax">Perfil:<br><input type="text" id="estilo" required="required" placeholder="Máximo 200 caracteres" /></div>
          </div>

          <div class="columnaajax">
            Actividades: <br>
            <textarea rows="6" cols="62"></textarea><br />
          </div>
        </div>
        <div id="sombra">
          <div class="col1"><button type="submit" id="btn_upload">Guardar</button></div>
        </div>
      </div>
    </form>

    <form name="administrarperfiles" method="#" action="#">
      <div id="agregar2">
        <div class="bloqueajax">
          <div class="columnaajax">
            <div class="col2ajax">
              <select id="lugar_n" required="required" placeholder="Centro Salud" onfocus="javascript: borrar(this);">
                <option selected="selected" disabled="disabled" value="" ></option>
                <option value="01">Opcion 1</option>
                <option value="02">Opcion 2</option>
              </select>
            </div>
            <div class="col2ajax">Perfil:<br><input type="text" id="estilo" required="required" placeholder="Máximo 200 caracteres" /></div>
          </div>

          <div class="columnaajax">
            Actividades: <br>
            <textarea rows="6" cols="62"></textarea><br />
          </div>
        </div>
        <div id="sombra">
          <div class="col1"><button type="submit" id="btn_upload">Guardar</button></div>
        </div>
      </div>
    </form>

    <form name="administrarperfiles" method="#" action="#">
      <div id="agregar3">
        <div class="bloqueajax">
          <div class="columnaajax">
            <div class="col2ajax">
              <select id="lugar_n" required="required" placeholder="Centro Salud" onfocus="javascript: borrar(this);">
                <option selected="selected" disabled="disabled" value="" ></option>
                <option value="01">Opcion 1</option>
                <option value="02">Opcion 2</option>
              </select>
            </div>
            <div class="col2ajax">Perfil:<br><input type="text" id="estilo" required="required" placeholder="Máximo 200 caracteres" /></div>
          </div>

          <div class="columnaajax">
            Actividades: <br>
            <textarea rows="6" cols="62"></textarea><br />
          </div>
        </div>
        <div id="sombra">
          <div class="col1"><button type="submit" id="btn_privilegios">Privilegios</button></div>
          <div class="col1"><button type="submit" id="btn_upload">Guardar</button></div>
        </div>
      </div>
    </form>

    <form name="administrarperfiles" method="#" action="#">
      <div id="agregar4">
        <div class="bloqueajax">
          <div id="perfiles_tabla">
            <table border="1">
              <th>N°</th><th>Módulo</th><th>Título</th><th>Descripción</th><th>Url</th><th>Opciones</th></tr>
              <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td><a href="#">Baja</a><a href="#">Editable</a><a href="#">Excluida</a><a href="#">Visible</a></td></tr>
              <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td><a href="#">Baja</a><a href="#">Editable</a><a href="#">Excluida</a><a href="#">Visible</a></td></tr>
              <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td><a href="#">Baja</a><a href="#">Editable</a><a href="#">Excluida</a><a href="#">Visible</a></td></tr>
              <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td><a href="#">Baja</a><a href="#">Editable</a><a href="#">Excluida</a><a href="#">Visible</a></td></tr>
            </table>
          </div>
        </div>
      </div>
    </form>
  </div>

@endsection
