<?php
/* Agrega conexion a la base de datos*/
require_once "../config/database.php";
/* llama a la funcion que contiene los formatos de fecha */
require_once "../config/date_format.php";

//función para comprobar el estado del usuario conectado
// si el usuario no está conectado, cambie a la página de inicio de sesión y envie mensaje en pantalla = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// si el usuario ya ha iniciado sesión, a continuación, ejecutar el script para llamar el contenido del archivo de paginación
else {
	// Si el contenido es home llamar la vista correspondiente
	if ($_GET['module'] == 'home') {
		include "modules/home/view.php";
	}
	// Si el contenido es covers llamar la vista correspondiente
	elseif ($_GET['module'] == 'covers') {
		include "modules/covers/view.php";
	}
	elseif ($_GET['module'] == 'form_covers') {
		include "modules/covers/form.php";
	}
    // Si el contenido es about llamar la vista correspondiente
	elseif ($_GET['module'] == 'about') {
		include "modules/about/view.php";
	}
	 // Si el contenido es who llamar la vista correspondiente
	elseif ($_GET['module'] == 'who') {
		include "modules/who/view.php";
	}
     // Si el contenido es services llamar la vista correspondiente
	elseif ($_GET['module'] == 'services') {
		include "modules/services/view.php";
	}
	elseif ($_GET['module'] == 'form_services') {
		include "modules/services/form.php";
	}
	// Si el contenido es destination llamar la vista correspondiente
	elseif ($_GET['module'] == 'destination') {
		include "modules/destination/view.php";
	}
	elseif ($_GET['module'] == 'form_destination') {
		include "modules/destination/form.php";
	}
	// Si el contenido es agency llamar la vista correspondiente
	elseif ($_GET['module'] == 'agency') {
		include "modules/agency/view.php";
	}
	elseif ($_GET['module'] == 'form_agency') {
		include "modules/agency/form.php";
	}
	// Si el contenido es charges llamar la vista correspondiente
	elseif ($_GET['module'] == 'charges') {
		include "modules/charges/view.php";
	}
	elseif ($_GET['module'] == 'form_charges') {
		include "modules/charges/form.php";
	}
	// Si el contenido es tariffs llamar la vista correspondiente
	elseif ($_GET['module'] == 'tariffs') {
		include "modules/tariffs/view.php";
	}
	elseif ($_GET['module'] == 'form_tariffs') {
		include "modules/tariffs/form.php";
	}
	// Si el contenido es subcriptions llamar la vista correspondiente
	elseif ($_GET['module'] == 'subcriptions') {
		include "modules/subcriptions/view.php";
	}
	elseif ($_GET['module'] == 'form_subcriptions') {
		include "modules/subcriptions/form.php";
	}
	// Si el contenido es message llamar la vista correspondiente
	elseif ($_GET['module'] == 'message') {
		include "modules/message/view.php";
	}

	// Si el contenido es form_message llamar la vista correspondiente
	elseif ($_GET['module'] == 'form_message') {
		include "modules/message/form.php";
	}
	// -----------------------------------------------------------------------------

	// Si el contenido es password llamar la vista correspondiente
	elseif ($_GET['module'] == 'password') {
		include "modules/password/view.php";
	}
}
?>