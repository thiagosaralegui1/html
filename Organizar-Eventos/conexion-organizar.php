<?php 

function conectar_bd(){

    $host = "localhost";
    $dbname = "tuevento";
    $user = "ubuntu";
    $password = "56409226";
    
    
    
    $conn = pg_connect("host=localhost dbname=tuevento user=ubuntu password=56409226");
    
    
    
    if (!$conn) {
        die("Error de conexion " . pg_last_error());
    }
    
    return $conn;
     
    }
    
    
    $con= conectar_bd();

?>