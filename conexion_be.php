<?php
    $conexion = mysqli_connect("localhost","root","","reserva_db");
    
    if($conexion){
        echo 'Efectivamente llegaste a la base de datos. sos un crack';
    } else{
        echo 'No se pudo conectar a la base. No se que estara pasando pero suerte pa :D';
    }
?>