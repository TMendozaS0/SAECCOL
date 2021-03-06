                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!-- Creado: Félix Ricardo Oliva Alonso, 31/08/2016.   -->
<!-- Modificado: Jorge Antonio Mendoza Salazar, 08/09/2016. Se terminan los 3 apartados  -->

@extends('layouts.master')
@section('titulo')
  {{ 'Modificar Usuario' }}
@endsection

@section('navegacion')
  @include('layouts.navegacion')
@endsection

{!!Html::style('css/crearmodificar.css')!!}
{!!Html::style('css/csscompartido.css')!!}
{{-- <script type="text/javascript" src="/js/validar.js"></script> --}}

@section('content')

  <div id="contenedor">
    <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
    <label for="tab-1" class="tab-label-1">Datos Personales</label>

    <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
    <label for="tab-2" class="tab-label-2">Datos Laborales</label>

    <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
    <label for="tab-3" class="tab-label-3">Datos de contratación</label>

    <div class="content">
      <div class="content-1">
        <form name="datospersonales" method="#" action="#">
          <div id="form_cm" >
            <div class="columna">
              <div class="col3"><strong>* </strong> CURP<input type="text" id="curp" required="required" autofocus="" onfocus="javascript: borrar(this);" ></div>
              <div class="col3">Usuario<input type="text" id="usuario" ></div>
            </div>

            <div class="columna">
              <fieldset>
                <legend>Nombre Completo</legend>
                  <div class="col2"><input type="text" id="nombre"  required="required" onfocus="javascript: borrar(this);"/>
                    <strong>* </strong>Nombre(s)</div>
                  <div class="col2"><input type="text"  id="apellido_p" required="required" onfocus="javascript: borrar(this);"/>
                    <strong>* </strong>Apellido Paterno</div>
                  <div class="col2"><input type="text"  id="apellido_m" />Apellido Materno</div>
              </fieldset>
            </div>

            <div class="columna">
              <div class="col1"><strong>* </strong>L. de Nacimiento
                <select id="lugar_n" required="required" onfocus="javascript: borrar(this);">
                  <option selected="selected" disabled="disabled" value="" ></option>
                  <option value="01">Opcion 1</option>
                  <option value="02">Opcion 2</option>
                </select>
              </div>
              <div class="col1"><strong>* </strong>Sexo
                <select id="sexo" required="required" onfocus="javascript: borrar(this);" >
                  <option selected="selected" disabled="disabled" value=""></option>
                  <option value="01">Opcion 1</option>
                  <option value="02">Opcion 2</option>
                </select>
              </div>
              <div class="col1"><strong>* </strong>F. de Nacimiento <input type="text"  id="fecha_n"  required="required" onfocus="javascript: borrar(this);"/></div>
              <div class="col2"><strong>* </strong>R.F.C <input type="text"  id="rfc"  required="required" onfocus="javascript: borrar(this);"/></div>
              <div class="col1"><strong>* </strong>Nacionalidad
                <select id="nacionalidad" required="required" onfocus="javascript: borrar(this);">
                  <option selected="selected" disabled="disabled" value=""></option>
                  <option value="01">Opcion 1</option>
                  <option value="02">Opcion 2</option>
                </select>
              </div>
            </div>

            <div class="columna">
              <div class="col2">Teléfono         <input type="text"  id="telefono"/ ></div>
              <div class="col2"><strong>* </strong>Especialidad
                <select id="especialidad" required="required" onfocus="javascript: borrar(this);" >
                  <option selected="selected" disabled="disabled" value=""></option>
                  <option value="01">Opcion 1</option>
                  <option value="02">Opcion 2</option>
                </select>
              </div>
              <div class="col2"><strong>* </strong>Universidad de Egreso <input type="text"  id="universidad"  required="required"  onfocus="javascript: borrar(this);"/></div>
            </div>

            <div class="columna">
              <div class="col1">Código del Puesto  <input type="text"  id="codigo_p" /></div>
              <div class="col2">Descripción del Puesto  <input type="text"  id="descripcion_p" /></div>
              <div class="col2">Entidad Federativa de la Plaza
                <select id="ef_plaza">
                  <option selected="selected" disabled="disabled" value=""></option>
                  <option value="01">Opcion 1</option>
                  <option value="02">Opcion 2</option>
                </select>
              </div>
              <div class="col1">Institución de la Plaza
                <select id="ins_plaza" >
                  <option selected="selected" disabled="disabled" value=""></option>
                  <option value="01">Opcion 1</option>
                  <option value="02">Opcion 2</option>
                </select>
              </div>
            </div>

            <div class="columna">
              <div class="col1">Correo Electrónico  <input type="text"  id="correo" /></div>
              <div class="col1">Tipo de Recurso  <input type="text"  id="tipo_rec" /></div>
              <div class="col2">Actividad Principal que Desempeña
                <select id="actividad_d">
                  <option selected="selected" disabled="disabled" value=""></option>
                  <option value="01">Opcion 1</option>
                  <option value="02">Opcion 2</option>
                </select>
              </div>
              <div class="col2">Área/Servicio de Trabajo
                <select id="area_t" >
                  <option selected="selected" disabled="disabled" value=""></option>
                  <option value="01">Opcion 1</option>
                  <option value="02">Opcion 2</option>
                </select>
              </div>
            </div>

            <div class="columna">
              <div class="col3">Formación
                <select id="formacion">
                  <option selected="selected" disabled="disabled" value=""></option>
                  <option value="01">Opcion 1</option>
                  <option value="02">Opcion 2</option>
                </select>
              </div>
            </div>

            <div id="sombra">
              <div class="col1"><button type="submit" id="btn_buscar">Buscar</button></div>
              <div class="col1"><button type="submit" id="btn_modificar">Modificar</button></div>
              <div class="col1"><button type="submit" id="btn_guardar"  onclick="validar(), validarSelect()" >Guardar</button></div>
              <div class="col1"><button type="submit" id="btn_cancelar">Cancelar</button></div>
              <div class="col1"><button type="submit" id="btn_salir">Salir</button></div>
            </div>

          </div>
          <div id="menu_foto">
            <div id="foto">
            </div>
            <nav>
              <ul>
                <li><a href="#">Seleccionar Fotografía</a></li>
                <li><a href="#">Capturar Huella</a></li>
              </ul>
            </nav>
            <div id="vacio">
            </div>
            <div id="nota">
              <strong>Nota: </strong>
                <i>En caso de no contar con más de una Escolaridad
                  favor de especificar con la palabra Ninguno</i>
            </div>
          </div>
        </form>
      </div>

      <div class="content-2">
        <form name="datoslaborales" method="#" action="#">
          <div id="form_cm" >
            <div class="columna">
              <div class="col2">Fecha de Ingreso<input type="text" id="fecha_i" autofocus="" onfocus="javascript: borrar(this);" ></div>
              <div class="col2">Clues de Adscripción Nómina
                <select id="clues_an">
                  <option selected="selected" disabled="disabled" value=""></option>
                  <option value="01">Opcion 1</option>
                  <option value="02">Opcion 2</option>
                </select>
              </div>
              <div class="col2">Clues de Adscripción Real
                <select id="clues_ar">
                  <option selected="selected" disabled="disabled" value=""></option>
                  <option value="01">Opcion 1</option>
                  <option value="02">Opcion 2</option>
                </select>
              </div>
            </div>

            <div class="columna">
              <div class="col2">Jornada
                <select id="jornada">
                  <option selected="selected" disabled="disabled" value=""></option>
                  <option value="01">Opcion 1</option>
                  <option value="02">Opcion 2</option>
                </select>
              </div>
              <div class="colmedia" >Hora Entrada<br><pre><input type="text" id="hora_e"> : <input type="text" id="hora_e"></pre></div>
              <div class="colmedia" >Hora Entrada<br><pre><input type="text" id="hora_e"> : <input type="text" id="hora_e"></pre></div>
              <div class="col2">Dias Laborales<input type="text" id="dias_l" ></div>
            </div>

            <div class="columna">
              <div class="col2"><strong>* </strong>Escolaridad 1<input type="text" id="escolaridad1" required="required"></div>
              <div class="col2"><strong>* </strong>Cedula Profesional 1<input type="text" id="cedula_p1" required="required"></div>
              <div class="col2">Titulo Profesional 1<br>
                <div class="radios">
                  <fieldset id="field">
                    <pre><input type="radio" value="verdadero" name="group1">Si         <input type="radio" checked value="falso" name="group1">No</pre>
                  </fieldset>
                </div>
              </div>
            </div>

            <div class="columna">
              <div class="col2">Escolaridad 2<input type="text" id="escolaridad2" ></div>
              <div class="col2">Cedula Profesional 2<input type="text" id="cedula_p2" ></div>
              <div class="col2">Titulo Profesional 2<br>
                <div class="radios">
                  <fieldset id="field">
                    <pre><input type="radio" value="verdadero" name="group2">Si         <input type="radio" checked value="falso" name="group2">No</pre>
                  </fieldset>
                </div>
              </div>
            </div>

            <div class="columna">
              <div class="col2">Escolaridad 3<input type="text" id="escolaridad3" ></div>
              <div class="col2">Cedula Profesional 3<input type="text" id="cedula_p3" ></div>
              <div class="col2">Titulo Profesional 3<br>
                <div class="radios">
                  <fieldset id="field">
                    <pre><input type="radio" value="verdadero" name="group3">Si         <input type="radio" checked value="falso" name="group3">No</pre>
                  </fieldset>
                </div>
              </div>
            </div>

            <div class="columna">
              <div class="col2">Residencia Médica
                <select id="residencia_m">
                  <option selected="selected" disabled="disabled" value=""></option>
                  <option value="01">Opcion 1</option>
                  <option value="02">Opcion 2</option>
                </select>
              </div>
              <div class="col2">Año de la Residencia
                <select id="a_residencia">
                  <option selected="selected" disabled="disabled" value=""></option>
                  <option value="01">Opcion 1</option>
                  <option value="02">Opcion 2</option>
                </select>
              </div>
              <div class="col2">Especialidad de la Residencia Médica
                <select id="especialidad_rm">
                  <option selected="selected" disabled="disabled" value=""></option>
                  <option value="01">Opcion 1</option>
                  <option value="02">Opcion 2</option>
                </select>
              </div>
            </div>

            <div class="columna">
              <div class="col3">Certificado por:<input type="text" id="escolaridad3" ></div>
            </div>

            <div id="sombra">
              <div class="col1"><button type="submit" id="btn_buscar">Buscar</button></div>
              <div class="col1"><button type="submit" id="btn_modificar">Modificar</button></div>
              <div class="col1"><button type="submit" id="btn_guardar"  onclick="validar(), validarSelect()" >Guardar</button></div>
              <div class="col1"><button type="submit" id="btn_cancelar">Cancelar</button></div>
              <div class="col1"><button type="submit" id="btn_salir">Salir</button></div>
            </div>

          </div>
          <div id="menu_foto">
            <div id="vacio2">
            </div>
            <div id="nota">
              <strong>Nota: </strong>
              <i>En caso de no contar con más de una Escolaridad
                favor de especificar con la palabra Ninguno</i>
            </div>
          </div>
        </form>
      </div>

      <div class="content-3">
        <form name="datoscontratacion" method="#" action="#">
          <div id="form_cm" >
            <div class="columna">
              <div class="col2">Tipo de Contrato
                <select id="t_contrato">
                  <option selected="selected" disabled="disabled" value=""></option>
                  <option value="01">Opcion 1</option>
                  <option value="02">Opcion 2</option>
                </select>
              </div>
              <div class="col2">Tipo de Plaza
                <select id="t_plaza">
                  <option selected="selected" disabled="disabled" value=""></option>
                  <option value="01">Opcion 1</option>
                  <option value="02">Opcion 2</option>
                </select>
              </div>
            </div>

            <div class="columna">
              <div class="col2">Cuenta con FIEL?<br>
                <div class="radios">
                  <fieldset id="field">
                    <pre><input type="radio" value="verdadero" name="group4">Si         <input type="radio" checked value="falso" name="group4">No</pre>
                  </fieldset>
                </div>
              </div>
            </div>

            <div class="columna">
              <div class="col2">Estatus de Registro
                <div class="radios">
                  <fieldset id="field">
                    <pre><input type="radio" checked value="verdadero" name="group5">Activo         <input type="radio" value="falso" name="group5">Inactivo</pre>
                  </fieldset>
                </div>
              </div>
            </div>

            <div class="columna">
              <div class="col2">Salario Mensual (percepción bruta)<input type="text" id="salario" ></div>
              <div class="col2"><strong>* </strong>Número de Empleado<input type="text" id="n_empleado" required="required"></div>
            </div>

            <div id="sombra">
              <div class="col1"><button type="submit" id="btn_buscar">Buscar</button></div>
              <div class="col1"><button type="submit" id="btn_modificar">Modificar</button></div>
              <div class="col1"><button type="submit" id="btn_guardar"  onclick="validar(), validarSelect()" >Guardar</button></div>
              <div class="col1"><button type="submit" id="btn_cancelar">Cancelar</button></div>
              <div class="col1"><button type="submit" id="btn_salir">Salir</button></div>
            </div>

          </div>

          <div id="menu_foto">
            <div id="vacio3">
            </div>
            <div id="nota">
              <strong>Nota: </strong>
              <i>En caso de no contar con más de una Escolaridad
                favor de especificar con la palabra Ninguno</i>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
