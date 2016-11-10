
<?php
$valor = $_REQUEST['voz'];


if($valor=='luz sala' || $valor=='fuz sala' || $valor=='suz sala')
{
 exec("sudo python /var/www/html/python/encender_luz_sala.py");
 echo '<script language="javascript">alert("Se ha encendido la luz en la Sala");</script>'; 
}
 
 
if($valor=='luz cocina' || $valor=='fuz cocina' || $valor=='suz cocina')
{
 exec("sudo python /var/www/html/python/encender_luz_cocina.py");
 echo '<script language="javascript">alert("Se ha encendido la luz en la Cocina");</script>'; 
}


if($valor=='luz dormitorio' || $valor=='fuz dormitorio' || $valor=='suz dormitorio')
{
 exec("sudo python /var/www/html/python/encender_luz_dormitorio.py");
 echo '<script language="javascript">alert("Se ha encendido la luz en el Dormitorio");</script>'; 
}

if($valor=='todas las luces' || $valor=='todas as luces' || $valor=='fodas las luces')
{
 exec("sudo python /var/www/html/python/encender_todas_luces.py");
 echo '<script language="javascript">alert("Se han encendido todas las luces de la casa");</script>'; 
}


/*
if($valor=='luz sala y cocina' || $valor=='fuz sala y cocina' || $valor=='suz sala y cocina' || 'luz cocina y sala' || $valor=='fuz cocina y sala' || $valor=='suz cocina y sala')
{
 exec("sudo python /var/www/html/python/encender_luz_sala_cocina.py");
 echo '<script language="javascript">alert("Se han encendido las luces de la Sala y de la Cocina");</script>'; 
}


if($valor=='luz sala y dormitorio' || $valor=='fuz sala y dormitorio' || $valor=='suz sala y dormitorio' || 'luz dormitorio y sala' || $valor=='fuz dormitorio y sala' || $valor=='suz dormitorio y sala')
{
 exec("sudo python /var/www/html/python/encender_luz_sala_dormitorio.py");
 echo '<script language="javascript">alert("Se han encendido las luces de la Sala y del Dormitorio");</script>'; 
}

if($valor=='luz cocina y dormitorio' || $valor=='fuz cocina y dormitorio' || $valor=='suz cocina y dormitorio' || 'luz dormitorio y cocina' || $valor=='fuz dormitorio y cocina' || $valor=='suz dormitorio y cocina')
{
 exec("sudo python /var/www/html/python/encender_luz_cocina_dormitorio.py");
 echo '<script language="javascript">alert("Se han encendido las luces de la Cocina y del Dormitorio");</script>'; 
}
*/

 echo "<script>window.close();</script>";
 
?>
