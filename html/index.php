<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['user']) {
    header("Location:login.php");
}
?>

<html lang="es">
<head>
    <meta charset="utf-8" />
    <link href="images/graphicloads.ico" rel="shortcut icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Home Automation System</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

    <!-- Animation library for notifications   -->
    <!-- <link href="assets/css/animate.min.css" rel="stylesheet"/>-->

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="assets/css/demo.css" rel="stylesheet" />-->

</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar.jpg">

  <!-- data-color="blue | azure | green | orange | red | purple"-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                    Home Automation System
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="luces.php">
                        <i class="pe-7s-light"></i>
                        <p>Iluminación</p>
                    </a>
                </li>
                <li>
                    <a href="monitoreo.php">
                        <i class="pe-7s-video"></i>
                        <p>Monitoreo</p>
                    </a>
                </li>
                <li>
                    <a href="sonido.php">
                        <i class="pe-7s-music"></i>
                        <p>Sonido Multizona</p>
                    </a>
                </li>
                <li>
                    <a href="voz.php">
                        <i class="pe-7s-micro"></i>
                        <p>Control por Voz</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>
                   
                    <a class="navbar-brand">Bienvenido <strong><?php echo $_SESSION['user'];?></strong></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="index.php">
                           <div class="pe-7s-home"></div>
                               <b>Inicio</b>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">
                            <div class="pe-7s-power"></div>
                                <b>Salir</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

<div class="slider fullscreen">
    <ul class="slides">
      <li>
        <img src="images/home.jpg">
        <div class="caption center-align" style="text-shadow: 10px 8px 18px #000;">
          <br></br>
          <br></br>
          <h3>Bienvenido a</h3>
          <h2>Home Automation System</h2>
          <h5 class="light grey-text text-lighten-5">El sistema de domótica para su hogar, en el cual puede encontrar:</h5>
        </div>
      </li>
      <li>
        <img src="images/iluminacion.jpg">
        <div class="caption right-align" style="text-shadow: 10px 8px 18px #000;">
          <h3><strong>Control de Iluminación</strong></h3>
          <h5 class="light grey-text text-lighten-3">Controla la iluminación de las diferentes zonas del hogar</h5>
        </div>
      </li>
      <li>
        <img src="images/cctv.jpg">
        <div class="caption center-align" style="text-shadow: 10px 8px 18px #000;">
          <h3><strong>Monitoreo</strong></h3>
          <h5 class="light grey-text text-lighten-3">Monitorea cada zona de tu hogar por medio</h5>
          <h5 class="light grey-text text-lighten-3">de cámaras de seguridad</h5>
        </div>
      </li>
      <li>
        <img src="images/sonido.jpg">
        <div class="caption left-align" style="text-shadow: 10px 8px 18px #000;">
          <h3><strong>Sonido Multizona</strong></h3>
          <h5 class="light grey-text text-lighten-3">Elije y escucha la música que más te guste</h5>
          <h5 class="light grey-text text-lighten-3">en las diferentes zonas del hogar</h5>
        </div>
      </li>
      <li>
        <img src="images/voz.jpg">
        <div class="caption left-align" style="text-shadow: 10px 8px 18px #000;">
          <h3><strong>Control por Voz</strong></h3>
          <h5 class="light grey-text text-lighten-3">Controla la iluminación del hogar por medio</h5>
          <h5 class="light grey-text text-lighten-3">de comandos de voz</h5>
        </div>
      </li>
    </ul>
  </div>

      
</body>


      <!--   Core JS Files   -->  
      <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
      <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

      <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
      <script src="assets/js/light-bootstrap-dashboard.js"></script>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>


      <!--  Checkbox, Radio & Switch Plugins -->
      <!--<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>-->

      <!--  Charts Plugin -->
      <!--<script src="assets/js/chartist.min.js"></script>-->

      <!--  Notifications Plugin    -->
      <!-- <script src="assets/js/bootstrap-notify.js"></script>-->

      <!--  Google Maps Plugin    -->
      <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>-->

      <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
      <!--<script src="assets/js/demo.js"></script>-->


<script type="text/javascript">


  $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
        
      
   </script> 


</html>
