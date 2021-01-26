<?php
session_start();

// Llamar el archivo de conexion a la base de datos
require_once "../../../config/database.php";

// función para comprobar el estado del usuario conectado
// si el usuario no está conectado, cambie a la página de inicio de sesión y envie mensaje en pantalla = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// Si esta conectado, entonces actualizo los datos 
else {
    if (isset($_POST['save'])) {
        if (isset($_POST['about_id'])) {
            // Captura de datos
            $about_id = mysqli_real_escape_string($mysqli, trim($_POST['about_id']));
            $title    = mysqli_real_escape_string($mysqli, trim($_POST['title']));
            $content  = mysqli_real_escape_string($mysqli, trim($_POST['content']));

            // Realizo la actualizacion en la tabla is_about
            $query = mysqli_query($mysqli, "UPDATE about SET title    = '$title',
                                                                content  = '$content'
                                                          WHERE about_id = '$about_id'")
                                            or die('Se produjo un error en una consulta de actualización : '.mysqli_error($mysqli));
            
            // Ejecuto la consulta
            if ($query) {
                // Redireccio al modulo respectivo
                header("location: ../../main.php?module=about");
            }       
        }
    }   
}       
?>