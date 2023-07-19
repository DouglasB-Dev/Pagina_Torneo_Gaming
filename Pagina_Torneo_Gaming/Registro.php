<?php

    session_start();

    if(isset($_SESSION['usuario'])){
       header("location: usuario_logueado.php");
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="icon" href="media/logo/logo.png">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title>Fenix Tournament | Automated Esports Tournament</title>
</head>
<body>
    <header>
        <div>
            <a href="index.php"><img class="logo" src="media/logo/logo.png"></a>
        </div>
        <nav>
            <ul class="nav-list">
                <li class="list-links"><a href="#">¿Dudas?</a>
                    <ul class="submenu">
                        <li><a href="#">¿Qué es un gamer?</a></li>
                        <li><a href="#">¿Qué es un torneo gamer?</a></li>
                        <li><a href="#">Historia del videojuego</a></li>
                        <li><a href="#">Mejores videojuegos</a></li>
                    </ul>
                </li>
                <li class="list-links"><a href="clasificacion.php">Clasificación</a></li>
                <li class="list-links"><a href="#">Torneos</a></li>
                <buttom class="btn"><a href="Registro.html">¿Ya tienes cuenta?</a></buttom>
            </ul>
        </nav>
    </header>

    <main class="fondo-registro">

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="transparent"> <!--Caja Trasera de Login-->
                    <h3 class="transparent">¿Ya tienes una cuenta?</h3>
                    <p class="transparent">Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="transparent"> <!--Caja Trasera de Registro-->
                    <h3 class="transparent">¿Aún no tienes una cuenta?</h3>
                    <p class="transparent">Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y register-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="login_usuario_db.php" class="formulario__login" method="POST">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contraseña">
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="registro_usuario_db.php" class="formulario__register" method="POST">
                    <h2 class="transparent">Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contraseña">
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>

    </main>

    <div class="linea-gradiente"></div>
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img class="logo-footer" src="media/logo/logo.png" alt="Logo de Fenix">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Esta página es el fruto de un largo esfuerzo, trabajo y dedicación</p>
                <p>Esperamos sea de su agrado, me encantó cumplir con este deasfío</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                    <a href="#" class="fab fa-tiktok"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Douglas B.</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>