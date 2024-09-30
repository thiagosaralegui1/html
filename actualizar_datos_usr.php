<?php
require("RF_registro_usr.php");

session_start();
if (!isset($_SESSION['cedula'])) {
    
    exit();
} else {

    $cedula = $_SESSION["cedula"];
}

echo $_SESSION["cedula"];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $password = $_POST["pass"];

    
$exite_email= consultar_existe_usr($con,$email);

function editar($nombre,$apellido,$telefono,$password,$cedula,$con){



    $query = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', telefono='$telefono',  contraseña='$password' WHERE cedula='$cedula'";
    $result = pg_query($con, $query);

    if ($result) {
        
        echo "Los datos se han actualizado correctamente.";
    } else {
       
        echo "Error al actualizar los datos: " . pg_last_error($con);
    }

   
    

}
}
?>