<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <title>Restaurante</title>

</head>
<body>
   <div class="limiter">
		<div class="container-login100" style="background-image: url('img/fondoLogin.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form id="valid-usersdsd" method="post" action="procesar.php">
            <span class="login100-form-title p-b-49">
						Iniciar Sesion
					</span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Usuario</span>
                        <input class="input100" type="text" name="username" placeholder="Escribe tu usuario">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Contraseña</span>
                        <input class="input100" type="password" name="password" placeholder="Escribe tu contraseña">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="text-right p-t-8 p-b-31">
						<a href="#">
                        Olvidaste la Contraseña?
						</a>
                        
					</div>
                    
                    <div class="text-right p-t-8 p-b-31">
						<a href="#">
                        Crear Cuenta
						</a>                       
					</div>
                    <div class="text-right p-t-8 p-b-31">
						<a href="index.php">
                        Pagina principal
						</a>
                        
					</div>

                    <input  type="submit" value="Ingresar" style="background-color: orange;"  class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">

            </form>
            <script src="js/validar_usuario.js"></script>
            <?php
                if (isset($_SESSION['error']) && $_SESSION['error'])
                    echo "<script>alert('Credenciales incorrectas');</script>"
            ?>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
	
    <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script src="js/main2.js"></script>
</body>
</html>