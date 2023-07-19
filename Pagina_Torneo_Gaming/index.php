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
                <buttom class="btn"><a href="Registro.php">¿Ya tienes cuenta?</a></buttom>
            </ul>
        </nav>
    </header>

        <div class="container-all">
            <input type="radio" id="1" name="image-slide" hidden/>
            <input type="radio" id="2" name="image-slide" hidden/>
            <input type="radio" id="3" name="image-slide" hidden/>
            <input type="radio" id="4" name="image-slide" hidden/>
                
            <div class="slide">
                <div class="item-slide">
                    <img class="slider" src="media/slider1.png">
                </div>
                <div class="item-slide">
                    <img class="slider" src="media/slider2.png">
                </div>
                <div class="item-slide">
                    <img class="slider" src="media/slider3.png">
                </div>
                <div class="item-slide">
                    <img class="slider" src="media/slider4.png">
                </div>
            </div>
            
            <div class="pagination">
                <label class="pagination-item" for="1"> <img src="media/slider1.png"></label>
                <label class="pagination-item" for="2"> <img src="media/slider2.png"></label>
                <label class="pagination-item" for="3"> <img src="media/slider3.png"></label>
                <label class="pagination-item" for="4"> <img src="media/slider4.png"></label>
            </div>
        </div>
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

