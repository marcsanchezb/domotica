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

	<!--Dialogs-->
    <link href="dialogs/css/sweetalert.css" rel="stylesheet" type="text/css"/>


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
                <li>
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
                <li class="active">
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
                   
                     <a class="navbar-brand"><strong>Control por Voz</strong></a>
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


 <div class="content">
        <div class="container-fluid">
            <div class="row">

                  <div class="col s12 m2">
          <div class="card">
        </div>
            </div>


               <div class="col s12 m8">
          <div class="card z-depth-5">
            <div class="card-image z-depth-5">
              <img id="myImage" src="images/home2.jpg">
           
              <div align="center" class="card">

              <button style= "position:absolute; top:-75px; left:100px; visibility:visible z-index:1" class="btn-floating btn-large waves-effect waves-light red" onclick="funcion(), Materialize.toast('Hable ahora', 5000)"><i class="material-icons">mic</i></button>
              <button style= "position:absolute; top:-75px; left:30px; visibility:visible z-index:1" class="btn-floating btn-large waves-effect waves-light blue tooltipped" data-position="bottom" data-delay="50" data-tooltip="Instrucciones" onclick="dialog()"><i class="material-icons">message</i></button>
      
      <script>
      function dialog() {

       swal("", "*************************************************************** INSTRUCCIONES PARA EL CONTROL POR VOZ *************************************************************** Para encender la luz de alguna de las zonas del hogar, primero debe presionar el boton rojo con el simbolo del micrófono e inmediatamente debe de decir el comando ENCENDER LUZ y seguido de esto debe de decir la zona del hogar que requiere que se encienda la luz. Ejemplo: Encender Luz Sala. *************************************************************** Si requiere apagar la luz de alguna de las zonas del hogar debe de decir el comando APAGAR LUZ y seguido de esto debe de decir la zona del hogar que requiere que se apague la luz. Ejemplo: Apagar Luz Dormitorio. *************************************************************** El usuario administrador dispone de todo el control de iluminación del hogar, si requiere encender todas las luces del hogar al mismo tiempo debe de indicar el comando ENCENDER TODAS LAS LUCES, por el contrario si requiere apagar todas las luces del hogar al mismo tiempo, debe de indicar el comando APAGAR TODAS LAS LUCES.")

       }

    </script>


             </div>

            </div>

  		  </div>

              </div>

  			</div>

  		</div>

  </div>








              
          

</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	
	<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>
	
	<!-- Control por Voz  -->
	<script type="text/javascript" src="voz/voice_admin.js"></script>
	<script src="voz/annyang.min.js"></script>
	
	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

	<!--Dialogs-->
    <script src="dialogs/js/sweetalert.min.js"></script>

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
