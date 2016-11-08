<?php

	$realname=$_POST['realname'];
	$usuario=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkuser=mysqli_query($mysqli,"SELECT * FROM login WHERE user_name='$usuario'");
	$check_user=mysqli_num_rows($checkuser);
		if($pass==$rpass){
			if($check_user>0){
				echo ' <script language="javascript">alert("Atencion, ya existe este usuario, verifique sus datos.");</script> ';
			    echo "<script>location.href='usuario.php'</script>";
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO login VALUES(null,'$realname','$pass','$usuario','')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				echo "<script>location.href='usuario.php'</script>";	
				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
			echo "<script>location.href='usuario.php'</script>";
		}

	
?>
