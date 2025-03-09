<?php
    ob_start(); // Iniciar el buffer de salida
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = trim($_POST["nombre"]);
        $email = trim($_POST["email"]);
        $mensaje = trim($_POST["mensaje"]);

        if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
            $para = "lupuispi93@gmail.com";
            $asunto = "Esto es una prueba";
            $cuerpo = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";
            $headers = "From: noreply@jacoboamaru.com";

            if (mail($para, $asunto, $cuerpo, $headers)) {
                header("Location: index.php?status=success");
                exit(); // Asegurar que el script se detenga aquí
            } else {
                header("Location: index.php?status=error");
                exit();
            }
        }
    }
    ob_end_flush(); // Finalizar el buffer de salida
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="bebida, gaseosa, cola">
    <title>Inicio - Coca Cola</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/df6bf92c80.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="container">
            <a href="index.html">
                <img src="img/logo.svg" alt="" class="logo">
            </a>
            <nav>
                <a href="#inicio">Inicio</a>
                <a href="#nosotros">Nosotros</a>
                <a href="#servicios">Servicios</a>
                <a href="#galeria">Galeria</a>
                <a href="#contactenos">Contáctanos</a>
            </nav>
            <a href="" class="hamb"><i class="fa-solid fa-bars"></i></a>
        </div>
    </header>
    <main>
        <section id="inicio">
            <picture>
                <source media="(max-width:767px)" srcset="img/bannerprincipal-mobile.jpg">
                <img src="img/bannerprincipal.jpg" alt="">  
            </picture>      
            <div class="bloque-inicio">
                <h1>Bienvenidos a Coca Cola</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                <a href="#nosotros" class="boton boton-rojo">Ver mas</a>
            </div>
        </section>
            <section id="nosotros" class="seccion">
                <div class="container">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, 
                    doloribus! Rem.
                    m ipsum dolor sit amet consectetur adipisicing elit. Pariatur, 
                    doloribus! Remasdasdasdasdadadadadadadaddada</p>
                    <a href="#nosotros" class="boton"></a>
                </div>
            </section>
            <section id="servicios" class="seccion">
                <div class="container">
                    <div class="row">
                        <div class="columna columna-33">
                            <div class="bloque-servicio">
                                <div class="bloque-img-servicio cuadrado-perfecto">
                                    <img src="img/servicio1.jpg" alt="">
                                </div>
                                <div class="bloque-contenido-servicio">
                                    <h3>Servicio 1</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Pariatur, doloribus! Rem.m ipsum dolor sit amet consectetur 
                                    adipisicing elPariatur, doloribus! Rem</p>
                                    <a href="#" class="boton boton-blanco">Ver mas</a>
                                </div>
                            </div>
                        </div>
                        <div class="columna columna-33">
                            <div class="bloque-servicio">
                                <div class="bloque-img-servicio cuadrado-perfecto">
                                    <img src="img/servicio2.jpg" alt="">
                                </div>
                                <div class="bloque-contenido-servicio">
                                    <h3>Servicio 2</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Pariatur, doloribus! Rem.m ipsum dolor sit amet consectetur 
                                    adipisicing elPariatur, doloribus! Rem</p>
                                    <a href="#" class="boton boton-blanco">Ver mas</a>
                                </div>
                            </div>
                        </div>
                        <div class="columna columna-33">
                            <div class="bloque-servicio">
                                <div class="bloque-img-servicio cuadrado-perfecto">
                                    <img src="img/servicio3.jpg" alt="">
                                </div>
                                <div class="bloque-contenido-servicio">
                                    <h3>Servicio 3</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Pariatur, doloribus! Rem.m ipsum dolor sit amet consectetur 
                                    adipisicing elPariatur, doloribus! Rem</p>
                                    <a href="#" class="boton boton-blanco">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="galeria">
                <div class="container-fluid">
                    <div class="row">
                        <div class="columna-33">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio1.jpg" alt="">
                                <h4>Imagen1</h4>
                            </div>
                        </div>
                        <div class="columna-33">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio2.jpg" alt="">
                                <h4>Imagen2</h4>
                            </div>
                        </div>
                        <div class="columna-33">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio3.jpg" alt="">
                                <h4>Imagen3</h4>
                            </div>
                        </div>
                        <div class="columna-33">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio1.jpg" alt="">
                                <h4>Imagen4</h4>
                            </div>
                        </div>
                        <div class="columna-33">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio4.jpg" alt="">
                                <h4>Imagen4</h4>
                            </div>
                        </div>
                        <div class="columna-33">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio5.jpg" alt="">
                                <h4>Imagen5</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contactenos" class="seccion">
                <iframe width="520" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=radial%2017%20imedio%204to%20anillo%20Santa%20Cruz+(bolivia)&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                <div class="container-fluid">
                    <div class="row-form">
                        <div class="columna columna-50">
                            <form id="miFormulario" action="index.php" method="post">
                                <div class="form-block">
                                <input type="text" name="nombre" class="form-control"
                                placeholder="Escribe tu Nombre">
                                </div>
                                <div class="form-block">
                                    <input type="email" name="email" class="form-control"
                                    placeholder="Escribe tu Email">
                                </div>
                                <div class="form-block">
                                    <textarea name="mensaje" placeholder="Description" id=""></textarea>
                                </div>
                                <div class="form-block bloque-ultimo">
                                    <input type="submit" class="boton boton-negro" value="Enviar">
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </section>  
    </main>
    <footer class="seccion">
        <div class="container">
            <div class="row row-footer">
                <div class="columna columna-25 columna-100">
                    <img src="img/logo-blanco.png" class="logo-footer" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, sed ipsam molestias quo nemo laboriosam obcaecati culpas.</p>
                </div>
                <div class="columna columna-25">
                    <h3>
                        Temas relacionados
                    </h3>
                    <ul>
                        <li><a href="#">Historia de Coca-Cola</a></li>
                        <li><a href="#">Sostenibilidad </a></li>
                        <li><a href="#">Comunidad y Responsabilidad Social</a></li>
                    </ul>
                </div>
                <div class="columna columna-25">
                    <h3>
                        Datos de Contacto
                    </h3>
                    <ul>
                        <li>villafuertemunhoz@gmail.com</li>
                        <li>+591 60821555</li>
                        <li>avenida Radial 17 imedio - 4to anillo - barrio los bosques - calle oriente 
                        petrolero - casa 211</li>
                    </ul>         
                </div>
                <div class="columna columna-25">
                    <h3>
                        Redes Sociales
                    </h3>
                    <ul class="redes">
                        <li>
                            <a href="#" class="redes-icon">
                                <i><i class="fa-brands fa-facebook"></i></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="redes-icon">
                                <i><i class="fa-brands fa-instagram"></i></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="redes-icon">
                                <i><i class="fa-brands fa-x-twitter"></i></i>
                            </a>
                        </li>
                    </ul>       
                </div>
            </div>
        </div>
        <div class="barra-footer">
            &copy; Derechos Reservados - 2025 - LuisMv-copyright
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/funciones.js"></script>
</body>
</html>