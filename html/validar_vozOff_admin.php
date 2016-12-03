<?php
$valor = $_REQUEST['voz'];


if($valor=='luz sala' || $valor=='fuz sala' || $valor=='suz sala')
{
 exec("sudo python /var/www/html/python/apagar_luz_sala.py");
 echo '<script language="javascript">alert("Se ha apagado la luz de la Sala");</script>'; 
}
 
 
if($valor=='luz cocina' || $valor=='fuz cocina' || $valor=='suz cocina')
{
 exec("sudo python /var/www/html/python/apagar_luz_cocina.py");
 echo '<script language="javascript">alert("Se ha apagado la luz de la Cocina");</script>'; 
}


if($valor=='luz dormitorio' || $valor=='fuz dormitorio' || $valor=='suz dormitorio')
{
 exec("sudo python /var/www/html/python/apagar_luz_dormitorio.py");
 echo '<script language="javascript">alert("Se ha apagado la luz del Dormitorio");</script>'; 
}


if($valor=='luz comedor' || $valor=='fuz comedor' || $valor=='suz comedor')
{
 exec("sudo python /var/www/html/python/apagar_luz_comedor.py");
 echo '<script language="javascript">alert("Se ha apagado la luz del Comedor");</script>'; 
}


if($valor=='luz jardín' || $valor=='fuz jardín' || $valor=='suz jardín')
{
 exec("sudo python /var/www/html/python/apagar_luz_jardin.py");
 echo '<script language="javascript">alert("Se ha apagado la luz del Jardin");</script>'; 
}


if($valor=='luz garaje' || $valor=='fuz garaje' || $valor=='suz garaje')
{
 exec("sudo python /var/www/html/python/apagar_luz_garaje.py");
 echo '<script language="javascript">alert("Se ha apagado la luz del Garaje");</script>'; 
}



if($valor=='todas las luces' || $valor=='todas as luces' || $valor=='fodas las luces')
{
 exec("sudo python /var/www/html/python/apagar_todas_luces.py");
 echo '<script language="javascript">alert("Se han apagado todas las luces de la casa");</script>'; 
}


 echo "<script>window.close();</script>";
 
?>

