<?php

include("conexion_be.php");

$id=$_POST['id'];
$correo_electronico=$_POST['correo_electronico'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$comensales=$_POST['comensales'];
$horario=$_POST['horario'];
$fecha=$_POST['fecha'];

$sql="UPDATE clientes SET  correo_electronico='$correo_electronico',nombre='$nombre',apellido='$apellido',comensales='$comensales',horario='$horario',fecha='$fecha' WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: administrar.php");
    }

?>