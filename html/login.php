
<!DOCTYPE html>

<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Home Automation System</title>
 
  <!-- CSS  -->
  <link href="images/graphicloads.ico" rel="shortcut icon">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="login/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="login/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <link rel="stylesheet" href="login/responsive-full-background-image.css">

</head>

<!-- LOGIN  -->
<body class="page-login">

   <div class="center">
      <div class="card bordered z-depth-2" style="margin:0% auto; max-width:400px;">
        <div class="card-header">
        <img src="images/logo.jpg" alt="" class="z-depth-2 responsive-img valign profile-image-login">
   </div>
        <div class="card-content">
          <form method="POST" action="validar.php">
            <div class="input-field col s12">
              <input name="usuario" type="text" class="validate">
              <label for="usuario">Usuario</label>
            </div>
            <div class="input-field col s12">
              <input name="pass" type="password" class="validate">
              <label for="pass">Contraseña</label>
            </div>
            <br>
              <input type="checkbox" class="filled-in" id="filled-in-box"/>
              <label for="filled-in-box">Recordar Contraseña</label>
            <button type="submit" class="z-depth-2 btn btn-sucess blue-grey right waves-effect waves-light white-text">Iniciar</button>
          </form>
        </div>
        
        <div class="card-content">

    </div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="login/js/materialize.min.js"></script>
  
  </body>
</html>
