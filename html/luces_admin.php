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
                   
                      <a class="navbar-brand"><strong>Iluminacion</strong></a>
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


<center>
<img class="materialboxed" with="10%" src="images/sala-de-estar-cortina.jpg">
</center>

<!-- Botones encender y apagar -->
					<form action="" method="post">
						<br>
						<br>
						<div  align="center">
						<!-- El name debe ser el mismo que el php -->
							<button type="submit" name="luz_sala_on" class="btn-floating btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center">ON</button>
							<button type="submit" name="luz_sala_off" class="btn-floating btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center">OFF</button>
						</div>
						<br>
					</form>
					


					<!-- PHP Donde si se pula el boton encender cuyo name es encender, se ejecuta el script que se encuentra en el directorio indicado -->
					

									<?php

									if (isset($_POST['luz_sala_on'])) {
									
										exec("sudo python /var/www/html/python/encender_luz_sala.py");
										/*echo "<img src=images/light-bulb-on2.png>"; */ 
									}
									elseif (isset($_POST['luz_sala_off'])) {
										
										exec("sudo python /var/www/html/python/apagar_luz_sala.py");
										/*echo "<img src=images/light-bulb-off2.png>"; */
										
										}
									?>
									
									
									
<center>
<img class="materialboxed" with="10%" src="images/interior_casa_cocina.jpg">
</center>

<!-- Botones encender y apagar -->
					<form action="" method="post">
						<br>
						<br>
						<div  align="center">
						<!-- El name debe ser el mismo que el php -->
							<button type="submit" name="luz_cocina_on" class="btn-floating btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center">ON</button>
							<button type="submit" name="luz_cocina_off" class="btn-floating btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center">OFF</button>
						</div>
						<br>
					</form>
					


					<!-- PHP Donde si se pula el boton encender cuyo name es encender, se ejecuta el script que se encuentra en el directorio indicado -->
					

									<?php

									if (isset($_POST['luz_cocina_on'])) {
									
										exec("sudo python /var/www/html/python/encender_luz_cocina.py");
										/*echo "<img src=images/light-bulb-on2.png>"; */ 
									}
									elseif (isset($_POST['luz_cocina_off'])) {
										
										exec("sudo python /var/www/html/python/apagar_luz_cocina.py");
										/*echo "<img src=images/light-bulb-off2.png>"; */
										
										}
									?>
									
<center>
	
<img class="materialboxed" with="10%" src="images/bed-bedroom-home.jpg">

</center>

<!-- Botones encender y apagar -->
					<form action="" method="post">
						<br>
						<br>
						<div  align="center">
						<!-- El name debe ser el mismo que el php -->
							<button type="submit" name="luz_dormitorio_on" class="btn-floating btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center">ON</button>
							<button type="submit" name="luz_dormitorio_off" class="btn-floating btn-large z-depth-2 btn btn-sucess btn-info btn-fill pull-center">OFF</button>
						</div>
						<br>
					</form>
					


					<!-- PHP Donde si se pula el boton encender cuyo name es encender, se ejecuta el script que se encuentra en el directorio indicado -->
					

									<?php

									if (isset($_POST['luz_dormitorio_on'])) {
									
										exec("sudo python /var/www/html/python/encender_luz_dormitorio.py");
										/*echo "<img src=images/light-bulb-on2.png>"; */ 
									}
									elseif (isset($_POST['luz_dormitorio_off'])) {
										
										exec("sudo python /var/www/html/python/apagar_luz_dormitorio.py");
										/*echo "<img src=images/light-bulb-off2.png>"; */
										
										}
									?>																	
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
	
	

	<!--<script type="text/javascript">
    	
        $(document).ready(function(){

        	demo.initChartist();

    	});

	</script>-->

</html>
