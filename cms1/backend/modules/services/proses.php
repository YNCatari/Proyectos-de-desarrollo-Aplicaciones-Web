<?php
session_start();

// Llamar el archivo de conexion a la base de datos
require_once "../../../config/database.php";

// función para comprobar el estado del usuario conectado
// si el usuario no está conectado, cambie a la página de inicio de sesión y envie mensaje en pantalla = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
//  el usuario ya ha iniciado sesión, a continuación, ejecutar el comando para insertar, actualizar y borrar
else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['save'])) {
            // captura de datos desde un formulario 
            $title              = mysqli_real_escape_string($mysqli, trim($_POST['title']));
            
            $nama_file          = $_FILES['image']['name'];
            $ukuran_file        = $_FILES['image']['size'];
            $tipe_file          = $_FILES['image']['type'];
            $tmp_file           = $_FILES['image']['tmp_name'];
            
            // determinar la extensión permisible
            $allowed_extensions = array('jpg','jpeg','png');
            
            // Establecer una ruta de carpeta para almacenar la imagen
            $path               = "../../../images/servicios/".$nama_file;
            
            // Comprobar la extensión
            $file               = explode(".", $nama_file);
            $extension          = array_pop($file);

            // Compruebe si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas
            if(in_array($extension, $allowed_extensions)) {
                // Si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas:
                if($ukuran_file <= 1000000) { // Comprueba si el tamaño del archivo subido menos igual a 1 MB
                    //Si el tamaño del archivo es menor o igual a 1 MB, hacer:
                    //El proceso de carga
                    if(move_uploaded_file($tmp_file, $path)) { // Compruebe si la imagen fue subida o no con éxito
                        // Si la imagen ha cargado correctamente, Marca:
                        // consultar comando para guardar los datos en la tabla is_portfolio
                        $query = mysqli_query($mysqli, "INSERT INTO services(title,image)
                                                        VALUES('$title','$nama_file')")
                                                        or die('Hubo un error en la consulta de inserción : '.mysqli_error($mysqli));    

                        // comprobar consulta
                        if ($query) {
                            // si tiene éxito mensaje indican exitosa almacén de datos
                            header("location: ../../main.php?module=services&alert=1");
                        }   
                    } else {
                        // Si la imagen no se ha subido, mostrar un mensaje no se ha subido
                        header("location: ../../main.php?module=services&alert=4");
                    }
                } else {
                    // Si el tamaño del archivo es de menos de 1 MB, mostrar un mensaje no se ha subido
                    header("location: ../../main.php?module=services&alert=5");
                }
            } else {
                //Si el tipo de archivo subido no es JPG / JPEG / PNG, mostrar un mensaje no se ha subido
                header("location: ../../main.php?module=services&alert=6");
            }  
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['save'])) {
            if (isset($_POST['services_id'])) {
                // Captura de datos desde el formulario
                $services_id       = mysqli_real_escape_string($mysqli, trim($_POST['services_id']));
                $title              = mysqli_real_escape_string($mysqli, trim($_POST['title']));
                
                $nama_file          = $_FILES['image']['name'];
                $ukuran_file        = $_FILES['image']['size'];
                $tipe_file          = $_FILES['image']['type'];
                $tmp_file           = $_FILES['image']['tmp_name'];
                
                // determinar la extensión permisible
                $allowed_extensions = array('jpg','jpeg','png');
                
                // Establecer una ruta de carpeta para almacenar portfolio
                $path               = "../../../images/servicios/".$nama_file;
                
                // Comprobar la extensión
                $file               = explode(".", $nama_file);
                $extension          = array_pop($file);

                // si la imagen no se cambia
                if (empty($nama_file)) {
                    // consultar comando para cambiar los datos de la tabla is_portfolio
                    $query = mysqli_query($mysqli, "UPDATE services SET title        = '$title'
                                                                      WHERE services_id = '$services_id'")
                                                    or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

                    // ejecutar consulta
                    if ($query) {
                        // si tiene éxito mensaje indican exitosa actualización de datos
                        header("location: ../../main.php?module=services&alert=2");
                    } 
                }
                // si la imagen se ha cambiado
                else {
                    //Compruebe si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas
                    if(in_array($extension, $allowed_extensions)) {
                        // Si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas, hacer:
                        if($ukuran_file <= 1000000) { // Comprueba si el tamaño del archivo subido menos igual a 1 MB
                            // Si el tamaño del archivo es menor o igual a 1 MB, hacer:
                            // El proceso de carga
                            if(move_uploaded_file($tmp_file, $path)) { // Compruebe si la imagen subida o no con éxito
                                // Si la imagen ha cargado correctamente, Marca:
                                // consultar comando para cambiar los datos sobre la tabla is_portfolio
                                $query = mysqli_query($mysqli, "UPDATE services SET title        = '$title',
                                                                                        image        = '$nama_file'
                                                                                  WHERE services_id = '$services_id'")
                                                                or die('e produjo un error en una consulta de actualización : '.mysqli_error($mysqli));

                                // Ejecutar consulta
                                if ($query) {
                                    // si tiene éxito mensaje indican exitosa actualización de datos
                                    header("location: ../../main.php?module=services&alert=2");
                                }
                            } else {
                                // Si la imagen no se ha subido, mostrar un mensaje no se ha subido
                                header("location: ../../main.php?module=services&alert=4");
                            }
                        } else {
                            // Si el tamaño del archivo es de menos de 1 MB, mostrar un mensaje no se ha subido
                            header("location: ../../main.php?module=services&alert=5");
                        }
                    } else {
                        //Si el tipo de archivo subido no es JPG / JPEG / PNG, mostrar un mensaje no se ha subido
                        header("location: ../../main.php?module=services&alert=6");
                    } 
                }      
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $services_id = $_GET['id'];
    
            // consultar comando para eliminar los datos de la tabla is_portfolio
            $query = mysqli_query($mysqli, "DELETE FROM services WHERE services_id='$services_id'")
                                            or die('Hubo un error en la consulta de eliminación : '.mysqli_error($mysqli));

            // comprobar los resultados de la consulta
            if ($query) {
                // si tiene éxito mensaje se indican los datos de eliminación con éxito
                header("location: ../../main.php?module=services&alert=3");
            }
        }
    }       
}       
?>