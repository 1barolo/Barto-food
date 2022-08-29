<?php

include("conexion_be.php");
$ejecutar = mysqli_query($conexion,$query);

$id=$_GET['id'];

$sql="DELETE FROM clientes  WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: administrar.php");
    }
?>