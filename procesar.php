<?php
session_start();

if (isset($_POST['username'])) {
    /*echo $_POST['txtIDIncidente'];
    echo $_POST['txtEmpresa'];
    echo $_POST['txtUsuario'];
    echo $_POST['txtResumen'];
    echo $_POST['exampleFormControlTextarea1'];
    echo $_POST['txtSoporte'];
    echo $_POST['txtEstado'];*/
    include('conexion.php');
    $usuarioServicio = new usuarioServicio; 
    $request = new stdClass();
    $request->usuario = $_POST['username'];
    $request->password = $_POST['password'];
    echo json_encode($usuarioServicio->validar_login($request));
    $resultado = $usuarioServicio->validar_login($request);
    $_SESSION['error'] = !$resultado->success;
    if ($resultado->success) {
        $_SESSION['ingreso'] = true;
        $_SESSION['usuario'] = $resultado->data;
        header("Location: index.php");
    } else {
        header("Location: login.php");
    }
    
    // if ($_POST['username'] == 'prueba' && $_POST['password'] == 'prueba') { //Colocar la función que consulte a la BD de usuarios
	// 	$_SESSION['ingreso'] = true;
	// 	//setcookie("user", "Jose", time() + 3600, "/"); // + 1 hora
	// 	//setcookie("user", "Jose", time() + 86400, "/","localhost", false, true); // + 1 día
    //     $_SESSION['nombreUsuario'] = 'Juan';
    //     $_SESSION['error'] = false;
    //     header("Location: agendar.php");
	// } else {
    //     $_SESSION['error'] = true;
    //     header("Location: login.php");
    // }

} else
    echo 'NO SE HA ENVIADO'


?>
