<?php

    include 'conexion_db.php';
    session_start();
    
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $validar_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo = '$correo' and contraseña = '$contraseña'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: usuario_logueado.php");
        exit;
    }else{
        echo '
        <script>
            alert("Usuario y/o Contraseña Inválidos");
            window.location = "Registro.html";
        </script>
        ';
        exit;
    }
?>