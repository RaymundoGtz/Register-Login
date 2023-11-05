<?php

if (!empty($_POST["btn-ingresar"])) {
    if (empty($_POST["usuario"]) || empty($_POST["password"])) {
        echo "LOS CAMPOS ESTÁN VACÍOS";
    } else {
        $usuario = $_POST["usuario"];
        $clave = $_POST["password"];
        
        $sql = $conn->query("select * from usuarios where nombre='$usuario' and clave='$clave'");

        if ($datos = $sql->fetch_object()) {
            header("location:index.html");
        } else {
            echo "El usuario no existe";
        }
    }
}

?>