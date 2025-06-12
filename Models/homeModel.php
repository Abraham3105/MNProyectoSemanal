<?php

    include_once $_SERVER["DOCUMENT_ROOT"] . '/Curso/Models/connect.php';
    function ValidarInicioSesionModel($nombreUsuario,$contrasenna)
    {
        $contex = OpenDB();

        //Interactuar

        CloseDB($contex);
        return true;
    }

    function RegiatraUsuarioModel($nombre, $correo, $nombreUsuario, $contrasenna)
    {
        try
        {
            $contex = mysqli_connect("127.0.0.1:3307","root","","MNDatabase");

            $sp = "CALL RegistrarUsuario('$nombre', '$correo', '$nombreUsuario', '$contrasenna')"
            $result = $contex -> query($sp);

            mysqli_close($contex);

            return $respuesta;
        }
        catch(Exception $error)
        {
            return false; 
        }
    }
?>