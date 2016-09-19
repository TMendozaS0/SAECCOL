// Creado: Félix Ricardo Oliva Alonso, 14/09/2016. Función paar agregar nuevo css

$(document).ready(function(){

  $(function(){
      $("#agregar").hide();
      $("#btn_agregar").click(function(){
          $("#agregar").toggle();
          $("#agregar2").hide();
          $("#agregar3").hide();
          $("#agregar4").hide();
      });

      $(function(){
          $("#agregar_modulo").hide();
          $("#buttonajax").click(function(){
              $("#agregar_modulo").toggle();
          });
      });

      $(function(){
          $("#agregar_n_estudios").hide();
          $("#buttonajax").click(function(){
              $("#agregar_n_estudios").toggle();
          });
      });
  });

  $(function(){
      $("#agregar2").hide();
      $(".clonarcss").click(function(){
          $("#agregar2").toggle();
          $("#agregar").hide();
          $("#agregar3").hide();
          $("#agregar4").hide();
      });
  });

  $(function(){
      $("#agregar3").hide();
      $(".editarcss").click(function(){
          $("#agregar3").toggle();
          $("#agregar").hide();
          $("#agregar2").hide();
          $("#agregar4").hide();
      });
  });

  $(function(){
      $("#agregar4").hide();
      $("#btn_privilegios").click(function(){
          $("#agregar4").toggle();
          $("#agregar").hide();
          $("#agregar2").hide();
          $("#agregar3").hide();
      });
  });
});
