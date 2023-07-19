<?php

    $conexion = mysqli_connect("localhost", "root", "", "fenix_db");

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    /*$contraseña = hash('sha512', $contraseña); código para encriptar contraseñas*/

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contraseña)
    VALUES('$nombre_completo', '$correo', '$usuario', '$contraseña')";

    /*Verificar que no se repita el correo en la base de datos*/
    $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo = '$correo'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya está registrado, intenta con otro");
                window.location = "Registro.php";
            </script>
        ';
        mysqli_close($conexion);
        exit();
    }

    /*Verificar que no se repita el usuario en la base de datos*/
    $verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '$usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este usuario ya está registrado, intenta con otro");
                window.location = "Registro.php";
            </script>
        ';
        mysqli_close($conexion);
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario Registrado Exitosamente");
                window.location = "Registro.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, usuario no registrado");
                window.location = "Registro.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>