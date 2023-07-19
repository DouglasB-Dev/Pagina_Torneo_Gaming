<?php
include 'conexion_db.php';
session_start();

if(!isset($_SESSION['usuario'])){
    echo '
        <script>
            alert("Por favor iniciar sesión");
            window.location = "index.php";
        </script>
    ';
    session_destroy();
    die();
}
$correo = $_SESSION['usuario'];
$sql = "SELECT id_usuario, usuario FROM usuarios WHERE correo = '$correo'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();
?>

<!doctype html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="media/logo/logo.png">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title>Fenix Tournament | Automated Esports Tournament</title>

    <script src="flappy_fenix/phaser.js"></script>
    <script src="flappy_fenix/menu.js"></script>
    <script src="flappy_fenix/juego.js"></script>
    <script src="flappy_fenix/gameover.js"></script>
    <script src="flappy_fenix/principal.js"></script>

</head>
<body>

    <header>
        <div>
            <a href="usuario_logueado.php"><img class="logo" src="media/logo/logo.png"></a>
        </div>
        <nav>
            <ul class="nav-list">
                <li class="list-links"><a href="juego\juego.php">Jugar</a></li>
                <li class="list-links"><a href="#">¿Dudas?</a>
                    <ul class="submenu">
                        <li><a href="#">¿Qué es un gamer?</a></li>
                        <li><a href="#">¿Qué es un torneo gamer?</a></li>
                        <li><a href="#">Historia del videojuego</a></li>
                        <li><a href="#">Mejores videojuegos</a></li>
                    </ul>
                </li>
                <li class="list-links"><a href="clasificacion_logueado.php">Clasificación</a></li>
                <li class="list-links"><a href="#">Torneos</a></li>
                <div class="contenedor-perfil">
                    <img class="perfil" src="media/icono_perfil.png">
                    </div>
                <li class="list-links"><a href="#"><?php echo utf8_decode($row['usuario']);?></a></li>
                <buttom class="btn"><a href="cerrar_session.php">Cerrar Sesión</a></buttom>
            </ul>
        </nav>
    </header>

<section class="contenedor_juego">

    <div class="juego" id="bloque_juego"></div>

    <div class="instrucciones">
        <h2>Instrucciones</h2>
        <p>Presiona el botón "Espacio" <a>&#xf51b</a> en tu teclado para saltar</p>
        <p>¡Evita chocar contra las cajas de metal o perderas!</p>
        <p>¡Acumula puntos hasta ser el mejor en la clasificacion!</p>
        
    </div>

</section>

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
</body>
</html>