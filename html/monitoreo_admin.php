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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--     webcam server    -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
    <script src='http://api.html5media.info/1.1.8/html5media.min.js'></script>
    
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
                    <a href="luces_admin.php">
                        <i class="pe-7s-light"></i>
                        <p>Iluminación</p>
                    </a>
                </li>
                <li class="active">
                    <a href="monitoreo_admin.php">
                        <i class="pe-7s-video"></i>
                        <p>Monitoreo</p>
                    </a>
                </li>
                <li>
                    <a href="sonido_admin.php">
                        <i class="pe-7s-music"></i>
                        <p>Sonido Multizona</p>
                    </a>
                </li>
                <li>
                    <a href="voz_admin.php">
                        <i class="pe-7s-micro"></i>
                        <p>Control por Voz</p>
                    </a>
                </li>
                <li>
                    <a href="usuario.php">
                        <i class="pe-7s-users"></i>
                        <p>Registro de Usuarios</p>
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
                   
                      <a class="navbar-brand"><strong>Monitoreo</strong></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="admin.php">
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



<div class="content" >
        <div class="container-fluid">
            <div class="row">

<center>

<div class="col s12 m6">
          <div class="card z-depth-5">
            <div class="card-image z-depth-5">
              <img id="myImage" src="images/zona_interior.png">
           
              <div align="center" class="card">

               <button style= "position:absolute; top:-70px; left:45px; visibility:visible z-index:1" class="btn-floating z-depth-4 btn-large waves-effect waves-light blue darken-1 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Mostrar" onclick="document.getElementById('myImage').src='http://192.168.1.5:8081'"><i class="material-icons">videocam</i></button>
               <button style= "position:absolute; top:-70px; left:110px; visibility:visible z-index:1" class="btn-floating z-depth-4 btn-large waves-effect waves-light blue darken-1 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ocultar" onclick="document.getElementById('myImage').src='images/zona_interior.png'"><i class="material-icons">videocam_off</i></button>

            </div>

            
          </div>
        </div>
            </div>
</center>

 <center>

<div class="col s12 m6">
          <div class="card z-depth-5">
            <div class="card-image z-depth-5">
              <img id="myImage2" src="images/zona_exterior.png">
           
              <div align="center" class="card">

               <button style= "position:absolute; top:-70px; left:45px; visibility:visible z-index:1" class="btn-floating z-depth-4 btn-large waves-effect waves-light blue darken-1 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Mostrar" onclick="document.getElementById('myImage2').src='images/no_signal.jpg'"><i class="material-icons">videocam</i></button>
               <button style= "position:absolute; top:-70px; left:110px; visibility:visible z-index:1" class="btn-floating z-depth-4 btn-large waves-effect waves-light blue darken-1 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ocultar" onclick="document.getElementById('myImage2').src='images/zona_exterior.png'"><i class="material-icons">videocam_off</i></button>

            </div>

            
          </div>
        </div>
            </div>
</center>

      
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
    $('.tooltipped').tooltip({delay: 50});
 	 });

	</script>
	
</html>
