<?php
session_start();

// Llamar el archivo de conexion a la base de datos
require_once "../../../config/database.php";
// función para comprobar el estado del usuario conectado
// si el usuario no está conectado, cambie a la página de inicio de sesión y envie mensaje en pantalla = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// si el usuario ya ha iniciado sesión, a continuación, ejecutar el comando para actualizar y borrar
else {
    if ($_GET['act']=='update_status') {
        if (isset($_GET['id'])) {
            // captura de datos desde el formulario
            $subcriptions_id = mysqli_real_escape_string($mysqli, trim($_GET['id']));
            $status     = "y";

            // Consulta a la tabla is_message
            $query = mysqli_query($mysqli, "UPDATE subcriptions SET status     = '$status'
                                                            WHERE subcriptions_id = '$subcriptions_id'")
                                            or die('Se produjo un error en las actualizaciones de estado de consulta : '.mysqli_error($mysqli));
            
            // Ejecutar consulta
            if ($query) {
                //Si se actualizo los datos correctamente
                header("location: ../../main.php?module=form_message&form=detail&id=$message_id");
            }       
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $subcriptions_id = $_GET['id'];
    
            // Consulta para eliminar datos
            $query = mysqli_query($mysqli, "DELETE FROM subcriptions WHERE subcriptions_id='$message_id'")
                                            or die('Hubo un error en la consulta de eliminación : '.mysqli_error($mysqli));

            // Ejecutar consulta
            if ($query) {
                // Si se elimina correctamente
                header("location: ../../main.php?module=subcriptions&alert=1");
            }
        }
    }       
}       
?>