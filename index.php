<?php
	/**
	 * Created by PhpStorm.
	 * User: PabloAntonio
	 * Date: 02/02/2019
	 * Time: 4:25 PM
	 */

	include_once 'Usuario.php';
	session_start();

	if (isset($_POST['usuario'])) {

		$user = $_POST['usuario'];
		$pass = $_POST['password'];

		$usuario = new Usuario();

		$usuario -> setUsuario($user);
		$usuario -> setPassword($pass);

		$logged_in = $usuario -> login();

		if ($logged_in) {
			if (!isset($_SESSION['usuario'])) {
				$_SESSION['usuario'] = $user;
			}
			header('Location: main.php');
		} else {
			$_SESSION['error'] = 'Usuario o Contraseña inválida';
			header('Location: index.php');
		}
	}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2 - Fácil POS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>

<div class="container">
    <div class="row">

        <div class="card">
            <img src="img/puente.jpg" alt="puente">
            <form action="index.php" method="post" autocomplete="off" id="login">
                <div class="form-group col-11">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario" autofocus class="form-control" placeholder="m@m.com">
                </div>
                <div class="form-group col-11">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" autofocus class="form-control"
                           placeholder="123">
                </div>
                <div class="form-group col-4 align-content-center">
                    <input type="submit" value="Ingresar" class="btn btn-success">
                </div>
               <?php
                   if(isset($_SESSION['error'])) {
                      $error = $_SESSION['error'];
	                   echo $error;
//	                   session_unset();
//                      session_destroy();
                   }
                   ?>
            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js" ></script>
<script src="assets/js/validacion.js"></script>
</body>
</html>
