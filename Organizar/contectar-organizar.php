<?php 

function conectar_bd(){

    $host = "localhost";
    $dbname = "tuEvento";//pone el nombre de tu base de datos que se tendria que llamar tuEvento en mi caso
    $user = "postgres";
    $password = "56409226"; //pone tu contraseña chapuis no la mia 
    
    
    
    $conn = pg_connect("host=localhost dbname=tuEvento user=postgres password=56409226");
    
    
    
    if (!$conn) {
        die("Error de conexion " . pg_last_error());
    }
    
    return $conn;
     
    }
    
    
    $con= conectar_bd();

?>