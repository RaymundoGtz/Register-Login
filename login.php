<?php
        // Incluir la conexión a la base de datos
        include("modelo/conexion_bd.php");

        if (!empty($_POST["btn-ingresar"])) {
            if (empty($_POST["usuario"]) || empty($_POST["password"])) {
                echo "UNO DE LOS CAMPOS ESTÁ VACÍO";
            } else {
                $usuario = $_POST["usuario"];
                $clave = $_POST["password"];

                $sql = $conn->query("select * from usuarios where nombre='$usuario' and clave='$clave'");

            if ($datos = $sql->fetch_object()) {
                // Iniciar sesión y redirigir al usuario a otra página
                header("Location: user-page.php");
            exit;
            } else {
                echo "El usuario no existe";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="css/login.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Pacifico&display=swap" rel="stylesheet">
</head>
<style>
    .tittle{
        color:white;
        font-family:'Inter',sans-serif;
        font-size: 34px;
        justify-content:center;
        text-align:center;
        margin-top:55px;

    }

    /* Estilo de texto de Inicio de Sesion */

    .miembro-existente {
            background-color: black;
            font-family:'Inter',sans-serif;
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            padding: 10px 20px;
            text-align: center;
            margin-top: 0px;
            margin-left: 840px;
            text-decoration: none;
            font-weight:bold;

        }

        .miembro-existente h4 {
            margin: 0;
            font-weight:bold;
        }

        .miembro-existente:hover h4 {
            color: grey;
        }

    /* ESTILO DE PRIMER FORMULARIO DE USUARIO --------------------- */

    .div h5{
        color:white;
        font-family: 'Inter',sans-serif;
        font-size: 24px;
        margin-top: 100px;
        margin-left: 910px;
    }

    .input-div-one .div input[type="text"] {
        background-color: #090909; 
        border: 1px solid black; 
        border-radius: 7px; 
        color: white; 
        font-family:'Inter',sans-serif;
        font-size:25px;
        padding-top:15px;
        padding-bottom:15px;
        padding-left:25px;
        padding-right:25px;
        margin-left: 762px;
        text-align:center;
    }

    .input-div-one label {
        position: absolute;
        top: 5px;
        left: 5px;
        pointer-events: none; /* Evita que el label sea interactivo */
        color: white; /* Cambia el color del texto del label a gris */
        font-family: 'Inter', sans-serif;
        font-size: 35px;
        transition: transform 0.3s, top 0.3s, left 0.3s;
    }

    /* ESTILO DE SEGUNDO FORMULARIO DE CONTRASENYA -----------------*/

    .div h6{
        color:white;
        font-family: 'Inter',sans-serif;
        font-size: 24px;
        margin-top: 40px;
        margin-left: 887px;
    }

    .input-div-pass .div input[type="password"] {
        background-color: #090909; 
        border: 1px solid black; 
        border-radius: 7px; 
        color: white; 
        font-family:'Inter',sans-serif;
        font-size:25px;
        padding-top:15px;
        padding-bottom:15px;
        padding-left:25px;
        padding-right:25px;
        margin-left: 756px;
        text-align:center;
    }

    .olvidar {
            background-color: black;
            font-family:'Inter',sans-serif;
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            text-align: center;
            margin-top: 0px;
            margin-left: 840px;
            text-decoration: none;

        }

        .olvidar h4 {
            margin: 0;
        }

        .olvidar:hover h4 {
            color: grey;
        }

        .btn {
            border-radius: 15px;
            border: 2px solid transparent; /* Agrega un borde transparente */
            margin-top: 70px;
            margin-left: 841px;
            margin-bottom: 50px;
            padding: 20px 50px;
            cursor: pointer;
            position: relative; /* Necesario para agregar un pseudo-elemento */
            overflow: hidden; /* Ocultar el pseudo-elemento */
        }

        .btn::before {
            content: ""; /* Pseudo-elemento para el efecto de hover */
            position: absolute;
            top: 0;
            left: 0;
            right: 100%;
            bottom: 0;
            background-color: black;
            transition: right 0.3s, background-color 0.3s; /* Agregar una transición */
        }

        .btn:hover::before {
            right: 0;
            background-color: black;
        }

        .btn:hover {
            color: white;
            border-color: white;
            background-color:black;
        }


</style>
<body>
    <header>
        <nav>
            <ul>
                
                <li><a href="index.html" class="airwatch">AIRWATCH</a></li>
                
            </ul>
        </nav>
    </header>
    
    <div class="container">
        
        <div class="login-content">
            <form method="post" action="login.php"> <!-- Establece el atributo action con el nombre del archivo actual -->
                
                <h2 class="tittle">Iniciar Sesion</h2>
                
                <div class="input-div-one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <a href="registro.php"><button class="miembro-existente"><h4>No eres miembro? Registrate!</h4></button></a>
                    <div class="div">
                        <h5>Usuario</h5>
                        <input id="usuario" type="text" class="input" name="usuario">
                    </div>
                </div>
                <div class="input-div-pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h6>Contrasena</h6>
                        <input type="password" id="input" class="input" name="password">
                    </div>
                </div>
                <div class="view">
                    <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
                </div>
                <input name="btn-ingresar" class="btn" type="submit" value="INICIAR SESIÓN">
                <div class="text-center">
                    <a class="olvidar" href="#"><h4>No recuerdo mi contrasena</h4></a>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>
