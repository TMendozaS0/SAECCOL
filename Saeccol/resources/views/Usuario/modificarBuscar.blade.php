<!-- Creado: Félix Ricardo Oliva Alonso, 09/09/2016. Se crea la vista buscar  -->
<!-- Modificado: Jorge Antonio Mendoza Salazar, 12/09/2016. Se termina la primera versión de esta vista  -->

@extends('layouts.master')
@section('titulo')
  {{ 'Buscar Usuario' }}
@endsection

@section('navegacion')
  @include('layouts.navegacion')
@endsection

{!!Html::style('css/modificarbuscar.css')!!}
{!!Html::style('css/csscompartido.css')!!}

@section('content')

  <div id="contenedor">
    <form name="datospersonales" method="#" action="#">
      <div id="form_buscar" >
        <div class="columna">
          <fieldset>
            <legend>Nombre Completo</legend>
              <div class="col2"><input type="text" id="nombre" autofocus="" onfocus="javascript: borrar(this);"/> Nombres(s) </div>
              <div class="col2"><input type="text"  id="apellido_p" onfocus="javascript: borrar(this);"/> Apellido Paterno </div>
              <div class="col2"><input type="text"  id="apellido_m" onfocus="javascript: borrar(this);"/> Apellido Materno </div>
          </fieldset>
        </div>
      </div>

      <div id="menu_buscar">
        <nav>
          <ul>
            <li><a href="#">Buscar</a></li>
            <li><a href="#">Cancelar</a></li>
          </ul>
        </nav>
      </div>
    </form>

    <div id="contenedor_tbuscar">
      <table border="1">
        <th>A</th><th>B</th><th>C</th><th>D</th><th>E</th><th>F</th><th>G</th><th>H</th></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
      </table>
    </div>

    <div id="sombra">
      <div class="col1"><button type="submit" id="btn_guardar">Seleccionar</button></div>
    </div>
  </div>

@endsection
