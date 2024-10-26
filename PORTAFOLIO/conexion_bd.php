<?php
try{
$servidor = "localhost";
$usuario = "root";
$password = "xbox360gtav";
$bd = "portafolio";
$conexion = mysqli_connect($servidor, $usuario, $password, $bd);
    
} catch (\Throwable $th) {
    echo($th);
}