<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <img class="wave" src="img/monitoreo.png">
    <div class="container">
        <div class="img">

        </div>
        <div class="login-content">
            <form method="post" action="">
                <img src="img/avatar.png">
                <h2 class="tittle">BIENVENIDO!</h2>

                <?php
                    //Incluir la conexion a base de datos y el controlador
                    include("modelo/conexion_bd.php");
                    include("controlador/controlador_login.php");
                ?>

                <div class="input-div-one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Usuario</h5>
                        <input id="usuario" type="text" class="input" name="usuario">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contrasena</h5>
                        <input type="password" id="input" class="input" name="password">
                    </div>
                </div> 
                <div class="view">
                    <div class=".fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
                </div>

                <div class="text-center">
                    <a class="font-italic isai5" href="">No recuerdo mi contrasena</a>               
                </div>
                <input name="btn-ingresar" class="btn" type="submit" value="INICIAR SESION">
            </form>
        </div>
    </div>

    
    
</body>
</html>