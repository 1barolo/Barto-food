<?php

include ('conexion_be.php');

$correo_electronico= $_POST['correo_electronico'];
$nombre= $_POST['nombre'];
$apellido =$_POST['apellido'];
$comensales = $_POST['comensales'];
$horario = $_POST['horario'];
$fecha = $_POST['fecha'];

$query = "INSERT INTO clientes(correo_electronico,nombre,apellido,comensales,horario,fecha)
        VALUES('$correo_electronico','$nombre','$apellido','$comensales','$horario','$fecha')";



$destino= $_POST['correo_electronico'];
$correo= "from: bartoofood@gmail.com";
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$comensales= $_POST['comensales'];
$horario= $_POST['horario'];
$fecha= $_POST['fecha'];
$mensaje="Su reserva se ha realizado con exito, lo esperamos";
$contenido="Nombre:".$nombre. "\nApellido:". $apellido . "\nCorreo:" .$correo . "\nComensales:" .$comensales. "\nHorario:" .$horario. "\nfecha:" .$fecha."\n".$mensaje;
$rta=mail($destino,"contacto",$contenido);
var_dump($rta);
if(mail($destino,$nombre,$contenido))
{
        echo "correo enviado";
}
else
{
        echo "Error";
}



?>