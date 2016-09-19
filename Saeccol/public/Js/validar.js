
function validar(){

  var curp = document.getElementById('curp').value;
  var t_curp = document.getElementById('curp');
  var nombre = document.getElementById('nombre').value;
  var t_nombre = document.getElementById('nombre');
  var apellido_p = document.getElementById('apellido_p').value;
  var t_apellido_p = document.getElementById('apellido_p');
  var fecha_n = document.getElementById('fecha_n').value;
  var t_fecha_n = document.getElementById('fecha_n');
  var rfc = document.getElementById('rfc').value;
  var t_rfc = document.getElementById('rfc');
  var universidad = document.getElementById('universidad').value;
  var t_universidad = document.getElementById('universidad');


  if (curp.length == 0 ) {
    var error_m = document.getElementById('curp').value = "CURP es un campo obligatorio";
    t_curp.style.borderColor = "rgba(250, 62, 62, 0.5)";
    t_curp.style.borderWidth = "1px";
    t_curp.style.borderStyle = "solid";
    t_curp.style.color=" #ada9a9";
    curp.focus;


  }


  if (nombre.length == 0 ) {
    var error_m = document.getElementById('nombre').value = "Nombre es un campo obligatorio";
    t_nombre.style.borderColor = "rgba(250, 62, 62, 0.5)";
    t_nombre.style.borderWidth = "1px";
    t_nombre.style.borderStyle = "solid";
    t_nombre.style.color=" #ada9a9";
  }

  if (apellido_p.length == 0 ) {
    var error_m = document.getElementById('apellido_p').value = "Apellido Paterno es un campo obligatorio";
    t_apellido_p.style.borderColor = "rgba(250, 62, 62, 0.5)";
    t_apellido_p.style.borderWidth = "1px";
    t_apellido_p.style.borderStyle = "solid";
    t_apellido_p.style.color=" #ada9a9";
  }

  if (fecha_n.length == 0 ) {
    var error_m = document.getElementById('fecha_n').value = " Fecha de Nacimiento es un campo obligatorio";
    t_fecha_n.style.borderColor = "rgba(250, 62, 62, 0.5)";
    t_fecha_n.style.borderWidth = "1px";
    t_fecha_n.style.borderStyle = "solid";
    t_fecha_n.style.color=" #ada9a9";
  }

  if (rfc.length == 0 ) {
    var error_m = document.getElementById('rfc').value = "RFC es un campo obligatorio";
    t_rfc.style.borderColor = "rgba(250, 62, 62, 0.5)";
    t_rfc.style.borderWidth = "1px";
    t_rfc.style.borderStyle = "solid";
    t_rfc.style.color=" #ada9a9";
  }

  if (universidad.length == 0 ) {
    var error_m = document.getElementById('universidad').value = "Universidad es un campo obligatorio";
    t_universidad.style.borderColor = "rgba(250, 62, 62, 0.5)";
    t_universidad.style.borderWidth = "1px";
    t_universidad.style.borderStyle = "solid";
    t_universidad.style.color=" #ada9a9";
  }

}


function validarSelect(){
    var lugar_n=document.getElementById("lugar_n").value;
    var t_lugar_n = document.getElementById('lugar_n');
    var sexo=document.getElementById("sexo").value;
    var t_sexo = document.getElementById('sexo');
    var nacionalidad=document.getElementById("nacionalidad").value;
    var t_nacionalidad = document.getElementById('nacionalidad');
    var especialidad=document.getElementById("especialidad").value;
    var t_especialidad = document.getElementById('especialidad');



  if (lugar_n=="")
  {

    t_lugar_n.style.borderColor = "rgba(250, 62, 62, 0.5)";
    t_lugar_n.style.borderWidth = "1px";
    t_lugar_n.style.borderStyle = "solid";
    t_lugar_n.style.color=" #ada9a9";
  }

  if (sexo=="")
  {

    t_sexo.style.borderColor = "rgba(250, 62, 62, 0.5)";
    t_sexo.style.borderWidth = "1px";
    t_sexo.style.borderStyle = "solid";
    t_sexo.style.color=" #ada9a9";
  }

  if (nacionalidad=="")
  {

    t_nacionalidad.style.borderColor = "rgba(250, 62, 62, 0.5)";
    t_nacionalidad.style.borderWidth = "1px";
    t_nacionalidad.style.borderStyle = "solid";
    t_nacionalidad.style.color=" #ada9a9";
  }

  if (especialidad=="")
  {

    t_especialidad.style.borderColor = "rgba(250, 62, 62, 0.5)";
    t_especialidad.style.borderWidth = "1px";
    t_especialidad.style.borderStyle = "solid";
    t_especialidad.style.color=" #ada9a9";
  }

}



function borrar(caja)
{
  caja.value = "";
  caja.style.borderColor =  "#acacac";
  caja.style.borderWidth = "1px";
  caja.style.borderStyle = "solid";
  caja.style.color=" #555555";
}
