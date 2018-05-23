<!DOCTYPE html>
<html ng-app="Aplicacion">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb18030">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <!--<link rel="shortcut icon" href="./assets/img/sep.ico" />-->
  <link rel="stylesheet" type="text/css" href="./assets/css/estilo.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.css">
  <title>{{titulo}}</title>
  <script src="./assets/js/angularjs/angular.min.js"></script>
  <script src="./assets/js/angularjs/angular-route.min.js"></script>
  <script src="./assets/js/jquery/jquery.min.js"></script>
  <script src="./assets/js/util.js"></script>
  <script src="./assets/js/Chart.boundle.js"></script>

  <link rel="stylesheet" type="text/css" href="./assets/css/editable.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/angular-datepicker.css">
  <script src="./assets/js/angular-datepicker.js"></script>

  <?php
  		include './controller/user/controller.php';
  	?>
</head>

<body>
  <nav class="menu">
    <div class="side-bar show">
      <div class="side-bar-encabezado">
        <!--<img src="./assets/img/logo-unah-azul.png" />-->
      </div>
      <ul>
        <li class="activo">
          <a href="#!index">
  		        <i class="fa fa-desktop"></i>
  			    <p>Inicio</p>
  		    </a>
        </li>
      </ul>
    </div>
    <div class="encabezado">
      <a class="titulo">{{titulo}}</a>
      <ul class="menu-derecho">
        <li onclick="cerrar()">
          <a>
  		        <i class="fa fa-power-off" title="Cerrar Sesión" style="color:red"></i>
  			</a>
        </li>
        <li class="btn-menu">
          <a>
  		        <i class="fa fa-bars" ></i>
  			</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="contenido ng-scope" ng-view="">
  </div>
  <script>
    function cerrar() {
      //if (confirm('¿Desea cerrar sesión?')){
      localStorage.removeItem('cuenta');
      window.location.href = "login.php";
      // }
    }
  </script>
  <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKDUTz8Uq47j1NLhJIvd0DRfD4hREetCA&callback=teEncuentras"></script>-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKDUTz8Uq47j1NLhJIvd0DRfD4hREetCA&libraries=places" async defer></script>
  <!--<script src="http://maps.googleapis.com/maps/api/js?sensor=false&language=en"></script>-->
</body>

</html>