<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/iniciosesion.css">
    <title>AIRWATCH</title>
</head>
<style>
    .tittle{
        font-family: sans-serif;
    }

    h2 {
        font-family: sans-serif;
    }

    .label{
        font-family: sans-serif;
    }
</style>
<body>
    <div class="fondo">
           <video muted autoplay loop>
        <source src="img\fondo.mp4" type="video/mp4">
         </video>
        <div class="capa"></div> 
    </div>

    <div class="container">
        <form action="" method="post" class="formulario">
            <h2 class="titulo">REGISTRO</h2>
            <?php
            include("modelo/conexion_bd.php");
            include("controlador/controlador_registrar_usuario.php");
            ?>
            <div class="padre">
                <div class="nombre">
                    <label for="nombre">Nombre</label>
                    <input type="text" name= "nombre">
                </div>
                <div class="apellido">
                    <label for="apellido">Apellido</label>
                    <input type="text" name= "apellido">
                </div>
                <div class="edad">
                    <label for="apellido">Edad</label>
                    <input type="text" name= "edad">
                </div>
                <div class="correo">
                    <label for="apellido">Correo</label>
                    <input type="text" name= "correo">
                </div>
                <div class="clave">
                    <label for="apellido">Clave</label>
                    <input type="password" name= "clave">
                </div>
                <div class="cuenta">
                    <input class="boton" type="submit" value="Registrar" name="registro">
                    <a href="login.php">Salir</a>
                </div>
            </div>
        </form>
    </div>

</body>
</html>