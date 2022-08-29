<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>
    <div class="container-portada" id="home">
        <div class="filtro">
        <div class="capa-gradient"></div>

        <main>
                <div class="contenedor__login-register">
           
                    <form action="reserva_be.php" method="POST" class="formulario__login">
                        <h2>Reserva tu mesa</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo_electronico">
                        <input type="text" placeholder="Nombre" name="nombre">
                        <input type="text" placeholder="Apellido" name="apellido">
                        <input type="number" max="10" min="0" placeholder="Comensales" name="comensales">
                        <input type="time" placeholder="horario" name="horario">
                        <input type="date" placeholder="fecha" name="fecha">
                        <button >Reservar</button> 
                    </form>

                </div>
        </main>
        </div>
        </div>
        </div>
</body>
</html>