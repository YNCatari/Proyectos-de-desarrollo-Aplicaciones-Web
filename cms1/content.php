<?php
/* Agrega conexion a la base de datos*/
require_once "config/database.php";
/* llama a la funcion que contiene los formatos de fecha */
require_once "config/date_format.php";

// Redireccion al home
if ($_GET['page'] == 'home') {
	include "pages/home/view.php";
}

// Redireccion a la pagina about
if ($_GET['page'] == 'about') {
	include "pages/about/view.php";
}

// Redireccion  la pagina who
if ($_GET['page'] == 'who') {
	include "pages/who/view.php";
}

// Redireccion a la pagina services
if ($_GET['page'] == 'services') {
	include "pages/services/view.php";
}
// Redireccion a la pagina destination
if ($_GET['page'] == 'destination') {
	include "pages/destination/view.php";
}
// Redireccion a la pagina agency
if ($_GET['page'] == 'agency') {
	include "pages/agency/view.php";
}
// Redireccion a la pagina charges
if ($_GET['page'] == 'charges') {
	include "pages/charges/view.php";
}


// Redireccion a la pagina de contact
if ($_GET['page'] == 'contact') {
	include "pages/contact/view.php";
}
?>