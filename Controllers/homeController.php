<?php


//Loguear 

//Capturar la funcion de un boton 
if(isset($_POST["btnIniciarSesion"]))
{
    $nombreUsuario = $_POST["txtNombreUsuario"];
    $contrasenna = $_POST["txtContrasenna"];

    //Enviamos el nombre de usuario y la contraseña al modelo
    $respuesta = ValidarInicioSesionModel();

    if($respuesta)
    {
        header("location: ../../Views/Home/principal.php");
    }
    else
    {
        $_POST["txtMensaje"] = "Su información no es válida correctamente";
    }
}



//Registrar

if(isset($_POST["btnRegistrarUsuario"]))
{
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $nombreUsuario = $_POST["txtNombreUsuario"];
    $contrasenna = $_POST["txtContrasenna"];

    //Enviamos el nombre de usuario y la contraseña al modelo
    $respuesta = RegistrarUsuarioModel($nombre, $correo, $nombreUsuario, $contrasenna);

    if($respuesta)
    {
        header("location: ../../Views/Home/login.php");
    }
    else
    {
        $_POST["txtMensaje"] = "Su información no fue registrada correctamente.";
    }
}

//Recuperar Acceso

?>