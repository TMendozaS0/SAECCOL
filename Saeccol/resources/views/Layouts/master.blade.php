<!-- Creado: Félix Ricardo Oliva Alonso, 24/08/2016. Plantilla base creada con Blade  -->
<!-- Modificado: Félix Ricardo Oliva Alonso, 25/08/2016. Se reservaron los espacios de los que dispondrá la página. No tienen contenido  -->
<!-- Modificado: Félix Ricardo Oliva Alonso, 29/08/2016. Se agregó contenido e imágenes  -->
<!-- Modificado: Félix Ricardo Oliva Alonso, 06/08/2016. Se separó el menú de navegación y el footer de la plantilla principal -->

<!DOCTYPE html>
<html lang="es-ES">
<head>
  <meta charset="utf-8" />
  <title>@yield('titulo','Bienvenido')</title>
  {!!Html::style('/css/default.css')!!}
</head>

<body>
  <header>
    <div id="h_logo">
      <img src="/img/ssa_logo_jul2016.jpg" />
    </div>

    <div id="h_fecha">
      <img src="/img/calendar.gif" />
        <p>
            <?php
            $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
            ?> | <?php echo date('g:ia');?>
        </p>
    </div>
	  @yield('navegacion')
  </header>

    @yield('content')

  <footer>
    @include('layouts.footer')
  </footer>

</body>
</html>
