

<?php
if (!empty($_POST["registro"])) {
    if (empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["correo"]) || empty($_POST["clave"]) || empty($_POST["edad"])) {
        echo '<div class="alerta"> Uno de los campos esta vacio';
    } else {
        //Recopilar datos desde pagina de registro.php mediante etiquetass
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $edad=$_POST["edad"];
        $correo=$_POST["correo"];

        //Encriptar clave
        $clave=md5($_POST["clave"]);
        
        //crear el query para agregar los datos en la base de datos
        $sql=$conn->query(" insert into usuarios(nombre,apellido,edad,correo,clave)values('$nombre','$apellido','$edad','$correo','$clave')");
        if ($sql ==1) {
            echo '<div class="success"> Usuario Registrado';
        } else {
            echo '<div class="alerta"> Error al registrar';
        }
        
    }
}
?>

