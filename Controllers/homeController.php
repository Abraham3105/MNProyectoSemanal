<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/ProyectoAmbiente/MNProyectoSemanal/Models/homeModel.php';

if(isset($_POST["btnIniciarSesion"]))
{
    $correo = $_POST["txtCorreo"];
    $contrasenna = $_POST["txtContrasenna"];

    $respuesta = ValidarInicioSesionModel($correo, $contrasenna);

    if($respuesta != null && $respuesta -> num_rows > 0)
    {
        header("location: ../../Views/Home/principal.php");
    }
    else
    {
        $_POST["txtMensaje"] = "Su información no fue validada correctamente.";
    }
}

if(isset($_POST["btnRegistrarUsuario"]))
{
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $identificacion = $_POST["txtIdentificacion"];
    $contrasenna = $_POST["txtContrasenna"];

    $respuesta = RegistrarUsuarioModel($nombre, $correo, $identificacion, $contrasenna);

    if($respuesta)
    {
        header("location: ../../Views/Home/login.php");
    }
    else
    {
        $_POST["txtMensaje"] = "Su información no fue registrada correctamente.";
    }
}

if(isset($_POST["btnRecuperarAcceso"]))
{
    $correo = $_POST["txtCorreo"];

    $respuesta = ValidarCorreoModel($correo);

    if($respuesta != null && $respuesta -> num_rows > 0)
    {
        $datos = mysqli_fetch_array($respuesta);

        $contrasenna = generarContrsena(); 

        ActualizarContrasennaModel($datos["IdUsuario"], $contrasenna);

        $mensaje = "<hmtl><body> 
        Estimado(a) " . $datos["Nombre"] . "<br><br>
        Se ha generado el siguiente codigo de seguridad:" . $contrasenna . "<br> 
        Recuerde realizar el cambio de contraseña una vez que ingrese al sistema.
        </hmtl></body>";
        //Tomar los datos y enviar el correo electrónico al usuario

        header("location: ../../Views/Home/login.php");
    }
    else
    {
        $_POST["txtMensaje"] = "Su acceso no fue recuperado correctamente.";
    }
}

?>