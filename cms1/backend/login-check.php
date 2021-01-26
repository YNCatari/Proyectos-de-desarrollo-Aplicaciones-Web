<?php
/* Agrega conexion a la base de datos*/
require_once "../config/database.php";

// datos enviados desde el formulario de inicio de sesion
$username = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['username'])))));
$password = md5(mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['password']))))));

// asegúrese de que el nombre de usuario y la contraseña es en forma de letras o números.
if (!ctype_alnum($username) OR !ctype_alnum($password)) {
	header("Location: index.php?alert=1");
}
else {
	// comprobación de los datos
	$query = mysqli_query($mysqli, "SELECT * FROM user WHERE username='$username' AND password='$password'")
									or die('Ada kesalahan pada query user: '.mysqli_error($mysqli));
	$rows  = mysqli_num_rows($query);

	// Si los datos estan correctos, entonces inicio sesion
	if ($rows > 0) {
		$data  = mysqli_fetch_assoc($query);

		session_start();
		$_SESSION['user_id']  = $data['user_id'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['fullname'] = $data['fullname'];
		
		// Redirecciona a la pagina principal
		header("Location: main.php?module=home");
	}

	// Sino existen los datos entonces envio de nuevo al login mostrando un error alert=1
	else {
		header("Location: index.php?alert=1");
	}
}
?>