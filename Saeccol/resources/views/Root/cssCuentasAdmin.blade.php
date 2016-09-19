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
    <form name="administrarcuentas" method="#" action="#">
      <div id="form" >
        <div class="columna_derecha">
          <div class="col1"><button type="submit" id="btn_agregar">Agregar</button></div>
          <div class="col2">Usuario: <input type="text" id="usuario" autofocus="" placeholder="Máximo 200 caracteres"/>  </div>
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
        <th>N°</th><th>Centro de Salud</th><th>Usuario</th><th>Personal</th><th>Activo desde</th><th>Opciones</th></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td><a href="#">Activo</a><a href="#">Baja</a><a href="#" class="editarcss">Editar</a></td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td><a href="#">Activo</a><a href="#">Baja</a><a href="#" class="editarcss">Editar</a></td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td><a href="#">Activo</a><a href="#">Baja</a><a href="#" class="editarcss">Editar</a></td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td><a href="#">Activo</a><a href="#">Baja</a><a href="#" class="editarcss">Editar</a></td></tr>
      </table>
    </div>

    <form name="administrarcuentas" method="#" action="#">
      <div id="agregar">
        <div class="bloqueajax_cuentas">
          <div class="columnaajax_cuentas">
            <div class="col2ajax_cuentas">
              <select id="ins_plaza" >
                <option selected="selected" disabled="disabled" value=""></option>
                <option value="01">Opcion 1</option>
                <option value="02">Opcion 2</option>
              </select>Centro de Salud
            </div>
            <div class="col2ajax_cuentas"><input type="text" id="estilo" autofocus="" placeholder="Máximo 50 caracteres" />Nombre </div>
            <div class="col2ajax_cuentas"><input type="text" id="estilo" autofocus="" placeholder="Máximo 50 caracteres" />1er Apellido </div>
            <div class="col2ajax_cuentas"><input type="text" id="estilo" autofocus="" placeholder="Máximo 50 caracteres" />2do Apellido </div>
            <div class="col2addajax">
              <select id="n_estudios" >
                <option selected="selected" disabled="disabled" value=""></option>
                <option value="01">Opcion 1</option>
                <option value="02">Opcion 2</option>
              </select><button type="submit" id="buttonajax">+</button>Nivel Estudios
            </div>
          </div>

          <div class="columnaajax_cuentas">
            <div class="col2ajax_cuentas"><input type="text" id="estilo" autofocus="" placeholder="Máximo 50 caracteres" />Especialidad </div>
            <div class="col2ajax_cuentas"><input type="text" id="estilo" autofocus="" placeholder="Máximo 50 caracteres" />Usuario </div>
            <div class="col2ajax_cuentas"><input type="text" id="estilo" autofocus="" placeholder="Máximo 32 caracteres" />Clave Temporal </div>
            <div class="col3ajax_cuentas">
              <form name="agregarniveles" method="#" action="#">
                <div id="agregar_n_estudios">
                  Agregar nuevo Nivel de Estudios:
                  <input type="text" id="estilo" autofocus="" placeholder="Máximo 50 caracteres" />
                  <button type="submit" id="btn_guardar">Guardar</button>
                  Nivel de Estudios
                </div>
              </form>
            </div>
          </div>
        </div>

        <div id="sombra">
          <div class="col1"><button type="submit" id="btn_upload">Guardar</button></div>
        </div>
      </div>
    </form>

    <form name="administrarcuentas" method="#" action="#">
      <div id="agregar3">
        <div class="bloqueajax_cuentas">
          <div class="columnaajax_cuentas">
            <div class="col2ajax_cuentas">
              <select id="ins_plaza" >
                <option selected="selected" disabled="disabled" value=""></option>
                <option value="01">Opcion 1</option>
                <option value="02">Opcion 2</option>
              </select>Centro de Salud
            </div>
            <div class="col2ajax_cuentas"><input type="text" id="estilo" autofocus="" placeholder="Máximo 50 caracteres" />Nombre </div>
            <div class="col2ajax_cuentas"><input type="text" id="estilo" autofocus="" placeholder="Máximo 50 caracteres" />1er Apellido </div>
            <div class="col2ajax_cuentas"><input type="text" id="estilo" autofocus="" placeholder="Máximo 50 caracteres" />2do Apellido </div>
            <div class="col2addajax">
              <select id="n_estudios" >
                <option selected="selected" disabled="disabled" value=""></option>
                <option value="01">Opcion 1</option>
                <option value="02">Opcion 2</option>
              </select><button type="submit" id="buttonajax">+</button>Nivel Estudios
            </div>
          </div>

          <div class="columnaajax_cuentas">
            <div class="col2ajax_cuentas"><input type="text" id="estilo" autofocus="" placeholder="Máximo 50 caracteres" />Especialidad </div>
            <div class="col2ajax_cuentas"><input type="text" id="estilo" autofocus="" placeholder="Máximo 50 caracteres" />Usuario </div>
            <div class="col2ajax_cuentas"><input type="text" id="estilo" autofocus="" placeholder="Máximo 32 caracteres" />Clave Temporal </div>
          </div>
        </div>

        <div id="sombra">
          <div class="col1"><button type="submit" id="btn_upload">Guardar</button></div>
        </div>
      </div>
    </form>
  </div>

@endsection
