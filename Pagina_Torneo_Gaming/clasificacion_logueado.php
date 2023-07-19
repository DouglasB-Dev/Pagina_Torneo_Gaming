<?php

$conexion = mysqli_connect("localhost", "root", "", "fenix_db");

session_start();

$correo = $_SESSION['usuario'];
$sql = "SELECT id_usuario, usuario FROM usuarios WHERE correo = '$correo'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();
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
            <a href="usuario_logueado.php"><img class="logo" src="media/logo/logo.png"></a>
        </div>
        <nav>
            <ul class="nav-list">
                <li class="list-links"><a href="juego.php">Jugar</a></li>
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
                <div class="contenedor-perfil">
                    <img class="perfil" src="media/icono_perfil.png">
                    </div>
                <li class="list-links"><a href="#"><?php echo utf8_decode($row['usuario']);?></a></li>
                    <buttom class="btn"><a href="cerrar_session.php">Cerrar Sesión</a></buttom>   
            </ul>
        </nav>
    </header>

<?php
$records = array();
$usuarios = array();
$ordenar_record = "SELECT * FROM usuarios ORDER BY record DESC";
	if($resultado = mysqli_query($conexion, $ordenar_record)){
		if(mysqli_num_rows($resultado) > 0){

			while($row = mysqli_fetch_array($resultado)){

            $row['usuario'];
            $row['record'];

            array_push($usuarios, $row['usuario']);
            array_push($records, $row['record']);
			}
			mysqli_free_result($resultado);
		} else{
			echo "No matching records are found.";
		}
	} else{
		echo "ERROR: Could not able to execute $resultado. "
									. mysqli_error($conexion);
	}
?>

    <main class="contenedor_tabla_clasificacion">
        <h1 class="titulo_tabla_clasifiacion">Tabla de Clasificación</h1>
        <section class="clasificaciones">
            <ul class="tabla_clasificacion_encabezado">
                <li class="izquierda">Posision</li>
                <li class="centrado">Jugador</li>
                <li class="derecha">Record</li>
            </ul>
            <div>
            </div>
            <div class="primer_lugar">
                <ul>
                    <li class="izquierda">
                        1er_Lugar
                    </li>
                    <li class="centrado">
                        <?php
                            if(isset ($usuarios[0])){
                                print $usuarios[0];
                            }else{
                                print "No hay más jugadores";
                            }
                        ?>
                    </li>
                    <li class="derecha">
                        <?php
                         if(isset ($records[0])){
                            print $records[0];
                        }else{
                            print "0";
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <div class="segundo_lugar">
                <ul>
                    <li class="izquierda">
                        2do_Lugar
                    </li>
                    <li class="centrado">
                        <?php
                            if(isset ($usuarios[1])){
                                print $usuarios[1];
                            }else{
                                print "No hay más jugadores";
                            }
                        ?>
                    </li>
                    <li class="derecha">
                        <?php
                         if(isset ($records[1])){
                            print $records[1];
                        }else{
                            print "0";
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <div class="tercer_lugar">
                <ul>
                    <li class="izquierda">
                        3er_Lugar
                    </li>
                    <li class="centrado">
                        <?php
                            if(isset ($usuarios[2])){
                                print $usuarios[2];
                            }else{
                                print "No hay más jugadores";
                            }
                        ?>
                    </li>
                    <li class="derecha">
                        <?php
                         if(isset ($records[2])){
                            print $records[2];
                        }else{
                            print "0";
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <div class="lugar">
                <ul>
                    <li class="izquierda">
                        4to_Lugar
                    </li>
                    <li class="centrado">
                        <?php
                            if(isset ($usuarios[3])){
                                print $usuarios[3];
                            }else{
                                print "No hay más jugadores";
                            }
                        ?>
                    </li>
                    <li class="derecha">
                        <?php
                         if(isset ($records[3])){
                            print $records[3];
                        }else{
                            print "0";
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <div class="lugar">
                <ul>
                    <li class="izquierda">
                        5to_Lugar
                    </li>
                    <li class="centrado">
                        <?php
                            if(isset ($usuarios[4])){
                                print $usuarios[4];
                            }else{
                                print "No hay más jugadores";
                            }
                        ?>
                    </li>
                    <li class="derecha">
                        <?php
                         if(isset ($records[4])){
                            print $records[4];
                        }else{
                            print "0";
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <div class="lugar">
                <ul>
                    <li class="izquierda">
                        6to_Lugar
                    </li>
                    <li class="centrado">
                        <?php
                            if(isset ($usuarios[5])){
                                print $usuarios[5];
                            }else{
                                print "No hay más jugadores";
                            }
                        ?>
                    </li>
                    <li class="derecha">
                        <?php
                         if(isset ($records[5])){
                            print $records[5];
                        }else{
                            print "0";
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <div class="lugar">
                <ul>
                <li class="izquierda">
                        7mo_Lugar
                    </li>
                <li class="centrado">
                        <?php
                            if(isset ($usuarios[6])){
                                print $usuarios[6];
                            }else{
                                print "No hay más jugadores";
                            }
                        ?>
                    </li>
                    <li class="derecha">
                        <?php
                         if(isset ($records[6])){
                            print $records[6];
                        }else{
                            print "0";
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <div class="lugar">
                <ul>
                    <li class="izquierda">
                        8vo_Lugar
                    </li>
                    <li class="centrado">
                        <?php
                            if(isset ($usuarios[7])){
                                print $usuarios[7];
                            }else{
                                print "No hay más jugadores";
                            }
                        ?>
                    </li>
                    <li class="derecha">
                        <?php
                         if(isset ($records[7])){
                            print $records[7];
                        }else{
                            print "0";
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <div class="lugar">
                <ul>
                    <li class="izquierda">
                        9no_Lugar
                    </li>
                    <li class="centrado">
                        <?php
                            if(isset ($usuarios[8])){
                                print $usuarios[8];
                            }else{
                                print "No hay más jugadores";
                            }
                        ?>
                    </li>
                    <li class="derecha">
                        <?php
                         if(isset ($records[8])){
                            print $records[8];
                        }else{
                            print "0";
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <div class="lugar">
                <ul>
                    <li class="izquierda">
                        10mo_Lugar
                    </li>
                    <li class="centrado">
                        <?php
                            if(isset ($usuarios[9])){
                                print $usuarios[9];
                            }else{
                                print "No hay más jugadores";
                            }
                        ?>
                    </li>
                    <li class="derecha">
                        <?php
                         if(isset ($records[9])){
                            print $records[9];
                        }else{
                            print "0";
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </section>
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
</body>
</html>