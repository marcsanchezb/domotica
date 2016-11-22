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
                <li class="active">
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
                   
                      <a class="navbar-brand"><strong>Iluminación</strong></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="admin.php">
                           <i class="pe-7s-home"></i>
                               <strong>Inicio</strong>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">
                            <i class="pe-7s-power"></i>
                                <strong>Salir</strong>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


  <div class="content">
        <div class="container-fluid">
            <div class="row">



                  <div class="col s12 m4">
          <div class="card z-depth-5">
            <div class="card-image z-depth-5">
              <img src="images/sala1.jpg">
            <center>
            <div class="header">
                <h4 class="title">Sala</h4>
                <p class="category">Solo para usuarios Administradores</p>
            </div>
            </center>
              <div align="center" class="card-action">
             
            <!-- Botones encender y apagar -->
               <form action="" method="post">

            <!-- El name debe ser el mismo que el php -->
               <button type="submit" name="encender_sala" class="btn-floating disabled btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center blue darken-1">ON</button>
               <button type="submit" name="apagar_sala" class="btn-floating disabled btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center blue darken-1">OFF</button>

               </form>
            </div>

            <div class="footer">
            </div>
          </div>
        </div>
            </div>


                <div class="col s12 m4">
          <div class="card z-depth-5">
            <div class="card-image z-depth-5">
              <img src="images/cocina.jpg">
            <center>
            <div class="header">
                <h4 class="title">Cocina</h4>
                <p class="category">Control para la iluminación de la Cocina</p>
            </div>
            </center>
              <div align="center" class="card-action">
             
            <!-- Botones encender y apagar -->
               <form action="" method="post">

            <!-- El name debe ser el mismo que el php -->
               <button type="submit" name="encender_cocina" class="btn-floating btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center blue darken-1">ON</button>
               <button type="submit" name="apagar_cocina" class="btn-floating btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center blue darken-1">OFF</button>

               </form>
            </div>

            <div class="footer">
            </div>
          </div>
        </div>
            </div>

             <div class="col s12 m4">
          <div class="card z-depth-5">
            <div class="card-image z-depth-5">
              <img src="images/comedor.jpg">
            <center>
            <div class="header">
                <h4 class="title">Comedor</h4>
                <p class="category">Control para la iluminación del Comedor</p>
            </div>
            </center>
              <div align="center" class="card-action">
             
            <!-- Botones encender y apagar -->
               <form action="" method="post">

            <!-- El name debe ser el mismo que el php -->
               <button type="submit" name="encender" class="btn-floating btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center blue darken-1">ON</button>
               <button type="submit" name="apagar" class="btn-floating btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center blue darken-1">OFF</button>

               </form>
            </div>

            <div class="footer">
            </div>
          </div>
        </div>
            </div>


  <div class="col s12 m4">
          <div class="card z-depth-5">
            <div class="card-image z-depth-5">
              <img src="images/dormitorio.jpg">
            <center>
            <div class="header">
                <h4 class="title">Dormitorio</h4>
                <p class="category">Control para la iluminación del Dormitorio</p>
            </div>
            </center>
              <div align="center" class="card-action">
             
            <!-- Botones encender y apagar -->
               <form action="" method="post">

            <!-- El name debe ser el mismo que el php -->
               <button type="submit" name="encender_dormitorio" class="btn-floating btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center blue darken-1">ON</button>
               <button type="submit" name="apagar_dormitorio" class="btn-floating btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center blue darken-1">OFF</button>

               </form>
            </div>

            <div class="footer">
            </div>
          </div>
        </div>
            </div>


  <div class="col s12 m4">
          <div class="card z-depth-5">
            <div class="card-image z-depth-5">
              <img src="images/jardin1.jpg">
            <center>
            <div class="header">
                <h4 class="title">Jardin</h4>
                <p class="category">Solo para usuarios Administradores</p>
            </div>
            </center>
              <div align="center" class="card-action">
             
            <!-- Botones encender y apagar -->
               <form action="" method="post">

            <!-- El name debe ser el mismo que el php -->
               <button type="submit" name="encender_jardin" class="btn-floating disabled btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center blue darken-1">ON</button>
               <button type="submit" name="apagar_jardin" class="btn-floating disabled btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center blue darken-1">OFF</button>

               </form>
            </div>

            <div class="footer">
            </div>
          </div>
        </div>
            </div>

 <div class="col s12 m4">
          <div class="card z-depth-5">
            <div class="card-image z-depth-5">
              <img src="images/garaje.jpg">
            <center>
            <div class="header">
                <h4 class="title">Garaje</h4>
                <p class="category">Control para la iluminación del Garaje</p>
            </div>
            </center>
              <div align="center" class="card-action">
             
            <!-- Botones encender y apagar -->
               <form action="" method="post">

            <!-- El name debe ser el mismo que el php -->
               <button type="submit" name="encender_garaje" class="btn-floating btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center blue darken-1">ON</button>
               <button type="submit" name="apagar_garaje" class="btn-floating btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center blue darken-1">OFF</button>

               </form>
            </div>

            <div class="footer">
            </div>
          </div>
        </div>
            </div>



        </div>
  </div>



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
	
	

	<!--<script type="text/javascript">
    	
        $(document).ready(function(){

        	demo.initChartist();

    	});

	</script>-->



<!-- PHP Donde si se pula el boton encender cuyo name es encender, se ejecuta el script que se encuentra en el directorio indicado -->
                    
                                    <?php

                                    if (isset($_POST['encender_sala'])) {
                                    
                                        exec("sudo python /var/www/html/encender_luz_sala.py");
                                        /*echo "<img src=images/light-bulb-on2.png>";*/
                                        /*echo '<script>alert("Se ha encendido la luz de la Sala")</script>';*/ 
                                    }

                                    elseif (isset($_POST['apagar_sala'])) {
                                        
                                        exec("sudo python /var/www/html/apagar_luz_sala.py");
                                        /*echo "<img src=images/light-bulb-off2.png>";*/ 
                                        /*echo '<script>alert("Se ha apagado la luz de la Sala")</script>';*/ 
                                        
                                        }

 									elseif (isset($_POST['encender_cocina'])) {
                                        
                                        exec("sudo python /var/www/html/encender_luz_cocina.py");
                                        /*echo "<img src=images/light-bulb-off2.png>";*/ 
                                        /*echo '<script>alert("Se ha encendido la luz de la Cocina")</script>';*/ 
                                        
                                        }

                                    elseif (isset($_POST['apagar_cocina'])) {
                                        
                                        exec("sudo python /var/www/html/apagar_luz_cocina.py");
                                        /*echo "<img src=images/light-bulb-off2.png>";*/ 
                                        /*echo '<script>alert("Se ha apagado la luz de la Cocina")</script>';*/ 
                                        
                                        }

                                    elseif (isset($_POST['encender_dormitorio'])) {
                                        
                                        exec("sudo python /var/www/html/encender_luz_dormitorio.py");
                                        /*echo "<img src=images/light-bulb-off2.png>";*/ 
                                        /*echo '<script>alert("Se ha encendido la luz de la Dormitorio")</script>';*/ 
                                        
                                        }

                                    elseif (isset($_POST['apagar_dormitorio'])) {
                                        
                                        exec("sudo python /var/www/html/apagar_luz_dormitorio.py");
                                        /*echo "<img src=images/light-bulb-off2.png>";*/ 
                                        /*echo '<script>alert("Se ha apagado la luz de la Dormitorio")</script>';*/ 
                                        
                                        }



                                    ?>



</html>

