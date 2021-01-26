<?php
// Llamar database.php para conexión de base de datos
require_once "../../config/database.php";

if (isset($_POST['send'])) {
    // captura de datos desde un formulario para presentar resultados
    $name    = mysqli_real_escape_string($mysqli, trim($_POST['name']));
    $email   = mysqli_real_escape_string($mysqli, trim($_POST['email']));
    $message = mysqli_real_escape_string($mysqli, trim($_POST['message']));

    // consultar comando para guardar los datos en un mensaje
    $query = mysqli_query($mysqli, "INSERT INTO messages(name,email,message)
                                    VALUES('$name','$email','$message')")
                                    or die('Hubo un error en la consulta de registro : '.mysqli_error($mysqli));    

    // comprobar consulta
    if ($query) {
        // si tiene éxito se indica un mensaje de registros exitoso de los datos
        header("location: ../../contact-success");
    }   
}   
?>