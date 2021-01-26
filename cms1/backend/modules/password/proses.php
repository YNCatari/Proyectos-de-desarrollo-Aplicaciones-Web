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
        if (isset($_SESSION['user_id'])) {
            // Captura de datos del formulario
            $old_pass    = md5(mysqli_real_escape_string($mysqli, trim($_POST['old_pass'])));
            $new_pass    = md5(mysqli_real_escape_string($mysqli, trim($_POST['new_pass'])));
            $retype_pass = md5(mysqli_real_escape_string($mysqli, trim($_POST['retype_pass'])));

            // descargar los datos de la sesión de usuario
            $user_id = $_SESSION['user_id'];

            // contraseñas de selección de la tabla de usuario se comprueban
            $sql = mysqli_query($mysqli, "SELECT password FROM user WHERE user_id=$user_id")
                                          or die('Ada kesalahan pada query seleksi password : '.mysqli_error($mysqli));
            $data = mysqli_fetch_assoc($sql);

            // función para comprobar una contraseña antes de cambiar
            // Si la entrada no es la misma que la contraseña antigua en la base de datos de contraseñas, 
            // cambiar a cambiar la contraseña la página y mostrar un mensaje = 1
            if ($old_pass != $data['password']){
                header("Location: ../../main.php?module=password&alert=1");
            }

            // Si la misma entrada antigua contraseña con la contraseña de la base de datos, ejecute el comando de nuevos controles
            else {

                // si la nueva introducción de la contraseña no es la misma que la entrada repetir la nueva contraseña,
                // cambiar a cambiar la contraseña la página y mostrar un mensaje = 2
                if ($new_pass != $retype_pass){
                        header("Location: ../../main.php?module=password&alert=2");
                }

               // ejecutar la actualización de la contraseña
                else {
                    // consultar comando para cambiar los datos en la tabla de usuario
                    $query = mysqli_query($mysqli, "UPDATE user SET password = '$new_pass'
                                                                 WHERE user_id  = '$user_id'")
                                                    or die('Ada kesalahan pada query update password : '.mysqli_error($mysqli));   

                    // Ejecutar consulta
                    if ($query) {
                        // si tiene éxito mensaje indican exitosa actualización de datos
                        header("location: ../../main.php?module=password&alert=3");
                    }   
                }
            }
        }
    }   
}               
?>