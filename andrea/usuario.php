<?php
    session_start();
    require_once("../conexion/conexion.php");
    $db = new Database();
    $con =$db->conectar();
?>
<?php
    if ((isset($_POST["MM_insert"]))&&($_POST["MM_insert"]=="formreg"))
    {
      $id_usuario= $_POST['id_usuario'];
      $nombre= $_POST['nombre'];
      $correo= $_POST['correo'];
      $contrasena= $_POST['contrasena'];
      $nit_empresa= $_POST['nit_empresa'];

      $sql = $con -> prepare ("SELECT * FROM usuario where id_usuario='$id_usuario'");
      $sql -> execute();
      $fila = $sql -> fetchAll(PDO::FETCH_ASSOC);
      
    
    
      if($id_usuario=="" || $nombre=="" || $correo=="" || $contrasena=="" || $nit_empresa=="")
      {
        echo '<script>alert ("EXISTEN DATOS VACIOS"); </script>';
        echo '<script>window.location="usuarios.php"</script>';
      }
      else if($fila){
        echo '<script>alert ("USUARIO O TELEFONO YA REGISTRADO"); </script>';
        echo '<script>window.location="usuarios.php"</script>';
      }

            
      else
      {
        $pass_cifrado=password_hash($contrasena,PASSWORD_DEFAULT,array("pass"=>12));
        $insertSQL = $con->prepare ("INSERT INTO usuario(id_usuario,nombre, correo,contrasena,nit_empresa) 
        VALUES ('$id_usuario','$nombre', '$correo', '$contrasena','$nit_empresa')");
        $insertSQL->execute();
        echo '<script>alert ("registro exitoso"); </script>';
        echo '<script>window.location="usuarios.php"</script>';
      }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Usuarios</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Usuarios
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese su documento	">
						<input class="input100" type="number" name="id_usuario" id="id_usuario" placeholder="Documento">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese su Nombre">
						<input class="input100" type="text" name="nombre" id="nombre" placeholder="Nombre">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>


					

					<div class="wrap-input100 validate-input" data-validate="Ingrese su Correo">
						<input class="input100" type="text" name="correo" id="correo" placeholder="Correo Electronico">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Ingrese su Contraseña">
						<input class="input100" type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese NIT Empresa">
						<input class="input100" type="number" name="nit_empresa" id="nit_empresa" placeholder="NIT">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
					<input class="login100-form-btn" type="submit" name="validar" value="Registrar">
					<input type="hidden" name="MM_insert" value="formreg">
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	



</body>
</html>
