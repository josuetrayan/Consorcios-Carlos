<?php
error_reporting(0);
session_start();
$varsesion=$_SESSION['usuario'];
if($varsesion == null || $varsesion = '' ){
    header("Location:noautorizado.php");
    die();
}

include_once 'config.inc.php';
if (isset($_POST['subir'])) {
   
    $edificioList= $_POST['edificiosList'];
    
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
          
            $db=new Conect_MySql();
            // aqui ingresa el nombre de la tabla para que cargue los archivos sin renegar
            $sql = "INSERT INTO $edificioList(titulo,descripcion,tamanio,tipo,nombre_archivo) VALUES('$titulo','$descri','$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>24 SEPTIEMBRE 304</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilosindex.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">



</head>

<body>

    <html>

    <head>
        <meta charset="UTF-8">
        <title></title>

    </head>

    <body>

        <!---------------------------------------------
        Seccion Navbar
         
-------------------------------------------  -->

        <nav id="Menu-Barra" class="navbar navbar-dark bg-secondary navbar-expand-md">

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Menu-Principal"
                aria-expanded="false" aria-label="Boton Menu">

                <span class="Boton-Menu"></span>

            </button>

            <div class="logos">
                <a href=""><img src="img/logo.png " alt="" class="logoPrincipal hidden-sm-down animated pulse infinite "
                        style="animation-duration: 1s;"></a>
            </div>

            <div class="BOTON order-md-2 ml-md-1">
                <a href="cerrar_sesion.php" class="btn btn-primary   mb-1 mt-0  ">Cerrar Sesion</a>


            </div>



            <div class="collapse navbar-collapse  " id="Menu-Principal">

                <ul class="navbar-nav ml-auto  ">

                    <li class="nav-item page-scroll"> <a href="#Slider-Principal"
                            class="nav-link active my-2 ml-md-1">Inicio</a></li>


                    <li class="nav-item"> <a href="#proveedores" class="nav-link my-2 ml-md-1">Proveedores</a></li>
                    <li class="nav-item"> <a href="#" class="nav-link my-2 ml-md-1">Imprimir Curriculum</a></li>
                    <li class="nav-item"> <a href="#ltd_map_sec" class="nav-link my-2 ml-md-1">Mapa</a></li>
                    <li class="nav-item"> <a href="#contacto" class="nav-link my-2 ml-md-1">Contactenos</a></li>

                </ul>

            </div>

        </nav>

        <!---------------------------------------------
        Seccion Slider Principal
-------------------------------------------  -->

        <section id="Slider-Principal" class="swiper-container ">
            <div class="swiper-wrapper">

                <div class="swiper-slide d-flex justify-content-center "
                    style="background-image: url(img/slider_3.jpg); background-attachment: fixed; ">

                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-12 display-md-5">
                                <H2 class="Letras-Grandes-Parte-1 display-4 animated bounceInLeft infinite"
                                    style="animation-duration: 8s;">Administración de Consorcios</H2>
                            </div>
                            <div class="col-12">
                                <p class="Letras-Pequeñas-Parte-1 animated  bounceInUp  infinite "
                                    style="animation-duration: 8s;">¡CONTAMOS CON UN MECANISMO ESTRATEGICO DE TRABAJO!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide d-flex justify-content-center "
                    style="background-image: url(img/slider_5.jpg);  ">

                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <H2 class="Letras-Grandes-Parte-2 animated bounceInRight infinite"
                                    style="animation-duration: 5s;">¡¡Ofrecemos un Servicio Profesional y Confiable!!
                                </H2>
                            </div>
                            <div class="col-12">
                                <p class="Letras-Pequeñas-Parte-2  animated  fadeInUp infinite "
                                    style="animation-duration: 5s;"> Para todos nuestros Consorcios</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide d-flex justify-content-center "
                    style="background-image: url(img/slider_6.jpg);  ">

                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <a href=""><img src="img/logo.png " alt=""
                                        class="logoSlider hidden-sm-down animated pulse infinite "
                                        style="animation-duration: 1s;"></a>
                            </div>


                            <div class="col-12">
                                <H2 class="Letras-Grandes-Parte-3 display-2 animated bounce  infinite"
                                    style="animation-duration: 8s;">CARLOS TRAYAN</H2>
                            </div>
                            <div class="col-12">
                                <p class="Letras-Pequeñas-Parte-3 animated flash  infinite "
                                    style="animation-duration: 8s;">¡¡Acompañado de un Excelente Equipo Profesional!!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Paginació -->
            <div class="swiper-pagination"></div>

            <!-- Bontes de Navegación -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- scrollbar -->
            <div class="swiper-scrollbar"></div>
        </section>

        <!---------------------------------------------
         Seccion Tarjeta de Presentacion
-------------------------------------------  -->





        <!-- tabla  -->
        <div class="tablaexpensa text-center py-5 mb-5">
            <table>
        </div>
        <h2 class="expensa">Presione para Visualizar la Expensa </h2>
        <thead>
            <tr>
                <th class="mesExpensa">Mes de la Expensa</th>
                <th class="mesExpensas">Expensa</th>
            </tr>
        </thead>
        <?php
        $db=new Conect_MySql();
            $sql = "select*from 24septiembre304";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>

        <tr>
            <td class="list">
                <?php echo $datos['titulo']; ?>
            </td>
            <!-- ingresa el nombre de la pagina del edificio -->
            <!-- ingresa nombre_archivo para que parezaca el nombre -->
        
      

      
            <td class="holamunndo"><a href="24SEPTIEMBRE304.php?id=<?php echo $datos['id_documento']?>">
                    <?php echo $datos['nombre_archivo']; ?>
                </a>
            </td>
        </tr>


        <?php  } ?>

        </table>

        <!-- indice -->
        <?php
      
        $db=new Conect_MySql();
        // ingresa el nombre de la tabla del esdificio
            $sql = "select*from 24septiembre304 where id_documento=".$_GET['id'];
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){



                if($datos['nombre_archivo']==""){?>
        <p>NO tiene archivos</p>
        <?php }else{ ?>
        <iframe width="100%" height="600px" src="archivos/<?php echo $datos['nombre_archivo']; ?>"></iframe>


        <?php } } ?>
        </div>


       


        <section id="Ayuda">

            <div class="container mt-5 mb-5">
                <div class="row mt-5 mb-5">
                    <div class="col-12 text-center mt-5">
                        <div class="Contenedor-Ayuda"
                            style=" background-image: url(img/Ayuda_4.jpg); background-attachment: fixed;">

                            <h2 class="Texto-Ayuda ">¿Como Podemos Ayudarte?</h2>
                            <p class="Parrafo-Ayuda">¡¡Por cualquier Consulta nos Puedes Mandar un Whatsapp Presionado
                                el
                                Siguiente Boton!!</p>
                            <a href="https://wa.me/5493815856612?text= Página Webº Realice su Consulta: "
                                target="_blank" class="btn btn-secondary ">Mandar un Whatsapp</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!---------------------------------------------
         Seccion Reseñas
-------------------------------------------  -->
        <section id="proveedores" class="my-5 ">

            <div class="tarjetaPresentacion my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 my-1 text-center">
                            <h1 class="heading">Reseñas</h1>
                            <p class="proveedor">Proveedores</p>
                        </div>
                        <div class="owl-carousel owl-theme">

                            <div class="item">
                                <div class="container">
                                    <div class="card-wrapper">
                                        <div class="card">
                                            <img class="card-img" src="img/Proveedor/plomero.jpg" alt="">
                                            <img class="profile-img"
                                                src="/img/Cara_de_Proveedores/Walter Ponce de Leon Sanitarista de edificios.jpg"
                                                alt="">
                                            <h1>Ponce de Leon</h1>
                                            <p class="job-title">Sanitarista de edificios</p>
                                            <p class="about">
                                                El trabajo en equipo nos permite ser mucho más eficientes en nuestro
                                                desempeño, utilizando esta conocida forma de trabajar lograremos
                                                alcanzar metas profesionales mucho más elevadas.
                                            </p>
                                            <button id="wts-plomeria" class="btn">Whatsapp</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="container">
                                    <div class="card-wrapper">
                                        <div class="card">
                                            <img class="card-img" src="img/Proveedor/gasista.jpg" alt="">
                                            <img class="profile-img" src="/img/Cara_de_Proveedores/Walter Trayan.jpg"
                                                alt="">
                                            <h1>Walter Trayan</h1>
                                            <p class="job-title">Gasista Matriculado </p>
                                            <p class="about">
                                                El trabajo en equipo nos permite ser mucho más eficientes en nuestro
                                                desempeño, utilizando esta conocida forma de trabajar lograremos
                                                alcanzar metas profesionales mucho más elevadas.
                                            </p>
                                            <button id="wts-gasista" class="btn">Whatsapp</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="container">
                                    <div class="card-wrapper">
                                        <div class="card">
                                            <img class="card-img" src="img/Proveedor/pintor.jpg" alt="">
                                            <img class="profile-img" src="/img/Cara_de_Proveedores/CarlosLizarrag.jpg"
                                                alt="">
                                            <h1>Carlos Lizarraga</h1>
                                            <p class="job-title">Pintor edificios en altura</p>
                                            <p class="about">
                                                El trabajo en equipo nos permite ser mucho más eficientes en nuestro
                                                desempeño, utilizando esta conocida forma de trabajar lograremos
                                                alcanzar metas profesionales mucho más elevadas.
                                            </p>
                                            <button id="wts-pintor" class="btn">Whatsapp</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="container">
                                    <div class="card-wrapper">
                                        <div class="card">
                                            <img class="card-img" src="img/Proveedor/Cerrajero.jpg" alt="">
                                            <img class="profile-img"
                                                src="/img/Cara_de_Proveedores/Diego Diaz cerrajero.jpg" alt="">
                                            <h1>Diego Diaz</h1>
                                            <p class="job-title">Cerrajero</p>
                                            <p class="about">
                                                El trabajo en equipo nos permite ser mucho más eficientes en nuestro
                                                desempeño, utilizando esta conocida forma de trabajar lograremos
                                                alcanzar metas profesionales mucho más elevadas.
                                            </p>
                                            <button id="wts-cerrajero" class="btn">Whatsapp</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="container">
                                    <div class="card-wrapper">

                                        <div class="card">
                                            <img class="card-img"
                                                src="img/Proveedor/electricista-utilizando-medidor-digital-medir-voltaje-toma-corriente_47469-251.jpg"
                                                alt="">
                                            <img class="profile-img"
                                                src="/img/Cara_de_Proveedores/Gustavo  Medina Electricista.jpg" alt="">
                                            <h1>Gustavo Medina
                                            </h1>
                                            <p class="job-title">electricista</p>
                                            <p class="about">
                                                El trabajo en equipo nos permite ser mucho más eficientes en nuestro
                                                desempeño, utilizando esta conocida forma de trabajar lograremos
                                                alcanzar metas profesionales mucho más elevadas.
                                            </p>
                                            <button id="wts-electricista" class="btn">Whatsapp</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container">
                                    <div class="card-wrapper">
                                        <div class="card">
                                            <img class="card-img" src="img/Proveedor/Herrero.jpg" alt="">
                                            <img class="profile-img"
                                                src="/img/Cara_de_Proveedores/Emilio Morales - Herrero.jpg" alt="">
                                            <h1>Emilio Morales</h1>
                                            <p class="job-title">Herrero</p>
                                            <p class="about">
                                                El trabajo en equipo nos permite ser mucho más eficientes en nuestro
                                                desempeño, utilizando esta conocida forma de trabajar lograremos
                                                alcanzar metas profesionales mucho más elevadas.
                                            </p>
                                            <button id="wts-herrero" class="btn">Whatsapp</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="container">
                                    <div class="card-wrapper">
                                        <div class="card">
                                            <img class="card-img" src="img/Proveedor/portero.jpg" alt="">
                                            <img class="profile-img"
                                                src="/img/Cara_de_Proveedores/Eduardo Aguirre Tecnico de portero electricos.jpg"
                                                alt="">
                                            <h1>Eduardo Aguirre</h1>
                                            <p class="job-title">Tecnico en Porteros Electricos</p>
                                            <p class="about">
                                                El trabajo en equipo nos permite ser mucho más eficientes en nuestro
                                                desempeño, utilizando esta conocida forma de trabajar lograremos
                                                alcanzar metas profesionales mucho más elevadas.
                                            </p>
                                            <button id="wts-tecnicoPortero" class="btn">Whatsapp</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="container">
                                    <div class="card-wrapper">
                                        <div class="card">
                                            <img class="card-img" src="img/Proveedor/Fumigador.jpg" alt="">
                                            <img class="profile-img"
                                                src="/img/Cara_de_Proveedores/Justo Barrionuevo fumigador.jpg" alt="">
                                            <h1>Justo Barrionuevo</h1>
                                            <p class="job-title">Fumigador</p>
                                            <p class="about">
                                                El trabajo en equipo nos permite ser mucho más eficientes en nuestro
                                                desempeño, utilizando esta conocida forma de trabajar lograremos
                                                alcanzar metas profesionales mucho más elevadas.
                                            </p>
                                            <button id="wts-fumigador" class="btn">Whatsapp</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="container">
                                    <div class="card-wrapper">
                                        <div class="card">
                                            <img class="card-img" src="img/Proveedor/Cerrajero.jpg" alt="">
                                            <img class="profile-img"
                                                src="/img/Cara_de_Proveedores/Luciano Diaz cerrajero.jpg" alt="">
                                            <h1>Luciano Diaz</h1>
                                            <p class="job-title">Cerrajero</p>
                                            <p class="about">
                                                El trabajo en equipo nos permite ser mucho más eficientes en nuestro
                                                desempeño, utilizando esta conocida forma de trabajar lograremos
                                                alcanzar metas profesionales mucho más elevadas.
                                            </p>
                                            <button id="wts-cerrajeroDos" class="btn">Whatsapp</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="container">
                                    <div class="card-wrapper">
                                        <div class="card">
                                            <img class="card-img" src="img/Proveedor/ingeniero electrico.jpg" alt="">
                                            <img class="profile-img"
                                                src="/img/Cara_de_Proveedores/Marcos Martellotta Ing. Electrico.jpg"
                                                alt="">
                                            <h1>Marcos Martellotta</h1>
                                            <p class="job-title">Ingeniero Electrico</p>
                                            <p class="about">
                                                El trabajo en equipo nos permite ser mucho más eficientes en nuestro
                                                desempeño, utilizando esta conocida forma de trabajar lograremos
                                                alcanzar metas profesionales mucho más elevadas.
                                            </p>
                                            <button id="wts-ingenieroElectrico" class="btn">Whatsapp</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="container">
                                    <div class="card-wrapper">
                                        <div class="card">
                                            <img class="card-img" src="img/Proveedor/ascensor.jpg" alt="">
                                            <img class="profile-img"
                                                src="/img/Cara_de_Proveedores/Javier Lemos Tecnico en ascensores..jpg"
                                                alt="">
                                            <h1>Javier Lemos</h1>
                                            <p class="job-title">Tecnico en ascensores</p>
                                            <p class="about">
                                                El trabajo en equipo nos permite ser mucho más eficientes en nuestro
                                                desempeño, utilizando esta conocida forma de trabajar lograremos
                                                alcanzar metas profesionales mucho más elevadas.
                                            </p>
                                            <button id="wts-ascensores" class="btn">Whatsapp</button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Boton WP-MAIL -->
        <form name="enviar" id="form" class="form-wts">
            <div class="container">
                <div id="whatsapp">
                    <img class="card-imgg" alt="">

                    <input type='hidden' name='title' id="title" value='CARROCERIA/CAPOT' />
                    <label id="tituloWts" class="tituloWsp" for="">Gasista</label>

                    <button class="botonWtsx" type="submit" id="cerrar">X</button>
                </div>
            </div>
            <h2 class="textoinvitado1">¿Cual es tu Nombre?</h2>

            <input id="inputname" class="inputwts" type="text" name="name" required="" placeholder="Nombre"
                autocomplete="off">
            <h2 class="textoinvitado2">¿Cual es tu Edificio?</h2>
            <input id="inputedificio" class="inputwts" type="text" required="" placeholder="Edificio"
                autocomplete="off">
            <h2 class="textoinvitado2">¿Que trabajo necesita que realicemos?</h2>
            <textarea id="inputmensaje" name="" id="" cols="30" rows="10" class="textareawts" required=""></textarea>
            <button type="submit" id="enviarra" class="btnwtsp"></button type="submit">
        </form>



        <!---------------------------------------------
         Transferencia
-------------------------------------------  -->

        <section id="contacto">

<header class="py-5 bg-warning text-center position-relative">
    <h2 class=" texto-contactanos display-4 font-weight-bold">Informar Transferencia</h2>
    <H6 class=" texto-parrafo text-white-50">Si necesitan saber ¿cómo hacer una transferencia de un banco a otro? ya que en la Web de su banco no lo encuentran o se contactaron con el banco y no les dieron respuesta. Aquí pueden saber cómo hacer una transferencia de una cuenta a otra cuenta. Les dejamos algunos ejemplos, si bien todo dependerá de cada banco, por lo que puede modificarse en algo algún paso y los montos a transferir.
        <div class="detalle-rectangulo"></div>
</header>
<div class="container">
    <div class="row py-5">
        <div class="col-12 col-lg-6">
            <h2 class=" texto-titulo font-weight-bold text-center mb-2">Detalles de Transferencia</h2>
            <ul class="list-unstyled">
                <li class="d-flex border-bottom py-4">
                    <i class="far fa-building  fa-3x  mr-4 fa-fw"></i>
                    <div>
                        <i class=""></i>
                        <h5 class="contacto-titulo font-weight-bold">Nombre:</h5>
                        <p class="contacto-parrafo mb-0">Nombre del Propietario
                            
                        </p>
                </li>

                <li class="d-flex border-bottom py-4">
                    <i class="fab fa-whatsapp fa-3x  mr-4 fa-fw"></i>
                    <div>
                        <h5 class="contacto-titulo font-weight-bold">Whatsapp:</h5>
                        <p class="contacto-parrafo mb-0">+54 (381) 444-7888) <br> +54 (4500916)</p>
                </li>

                <li class="d-flex border-bottom py-4">
                    <i class="fas fa-envelope fa-3x y  mr-4 fa-fw"></i>
                    <div>
                        <h5 class="contacto-titulo font-weight-bold">Email:</h5>
                        <p class="contacto-parrafo mb-0">Consorcios.trayan@gmail.com</p>
                </li>

                <li class="d-flex border-bottom py-4">
                    <i class="fab fa-instagram fa-3x  mr-4 fa-fw"></i>
                    <div>
                        <h5 class="contacto-titulo font-weight-bold">Comprobante de pago</h5>
                        <p class="contacto-parrafo mb-0">Imagen del comprobante de pago</p>
                </li>

                <li class="d-flex border-bottom py-4">
                    <i class="fab fa-instagram fa-3x  mr-4 fa-fw"></i>
                    <div>
                        <h5 class="contacto-titulo font-weight-bold">Mensaje</h5>
                        <p class="contacto-parrafo mb-0">Ingrese algun mensaje</p>
                </li>

            </ul>
        </div>

        <div class="col-12 col-lg-6">
            <h2 class=" texto-titulo font-weight-bold text-center mb-5">Notificar Transferencia</h2>
            <form action="send-mail.php" id="mi-formulario" method="post">

                <div class="form-group form-row">
                    <label class="col-form-label col-12 col-md-3" for="nombre">Nombre:</label>
                    <div class="col-12 col-md-9">
                        <input type="text" class="form-control" name="nombre" id="nombre"
                            placeholder="Ingrese su Nombre" required />
                    </div>
                </div>


                <div class="form-group form-row">
                    <label class="col-form-label col-12 col-md-3" for="edificio">Whatsapp:</label>
                    <div class="col-12 col-md-9">
                        <input type="number" class="form-control" name="Whatsapp" id="Whatsapp"
                            placeholder="Ingrese su Whatsapp" required>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-form-label col-12 col-md-3" for="correo">Correo:</label>
                    <div class="col-12 col-md-9">
                        <input type="email" class="form-control" name="correo" id="correo"
                            placeholder="Ingrese su Correo" required>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-form-label col-12 col-md-3" for="mensaje">Mensaje:</label>
                    <div class="col-12 col-md-9">
                        <textarea class="form-control" name="mensaje" id="mensaje" rows="4"
                            placeholder="Ingrese su Mensaje"></textarea>
                    </div>
                </div>

                <a href="" type="submit" class="btn btn-primaryy">Enviar Mensaje</a>
            </form>
        </div>
    </div>
</div>
</section>


        <!---------------------------------------------
         Zona de contacto
-------------------------------------------  -->
        <section id="contacto">

            <header class="py-5 bg-warning text-center position-relative">
                <h2 class=" texto-contactanos display-4 font-weight-bold">CONTÁCTANOS</h2>
                <H6 class=" texto-parrafo text-white-50">TIENES LA OPORTUNIDAD DE ESCRIBIRNOS PARA OBSERVAR, RECLAMAR O
                    SOLICITAR LAS COSAS
                    DE TU EDIFICIO <br> GRACIAS POR ELEGIRNOS Y POR TU TIEMPO
                    <div class="detalle-rectangulo"></div>
            </header>
            <div class="container">
                <div class="row py-5">
                    <div class="col-12 col-lg-6">
                        <h2 class=" texto-titulo font-weight-bold text-center mb-2">Detalles de Contacto</h2>
                        <ul class="list-unstyled">
                            <li class="d-flex border-bottom py-4">
                                <i class="far fa-building  fa-3x  mr-4 fa-fw"></i>
                                <div>
                                    <i class=""></i>
                                    <h5 class="contacto-titulo font-weight-bold">Direccion:</h5>
                                    <p class="contacto-parrafo mb-0">Dirección: Pasaje 2 de Abril 380 / 4º Piso /
                                        Oficina 17
                                    </p>
                            </li>

                            <li class="d-flex border-bottom py-4">
                                <i class="fab fa-whatsapp fa-3x  mr-4 fa-fw"></i>
                                <div>
                                    <h5 class="contacto-titulo font-weight-bold">Whatsapp:</h5>
                                    <p class="contacto-parrafo mb-0">+54 (381) 444-7888) <br> +54 (4500916)</p>
                            </li>

                            <li class="d-flex border-bottom py-4">
                                <i class="fas fa-envelope fa-3x y  mr-4 fa-fw"></i>
                                <div>
                                    <h5 class="contacto-titulo font-weight-bold">Email:</h5>
                                    <p class="contacto-parrafo mb-0">Consorcios.trayan@gmail.com</p>
                            </li>

                            <li class="d-flex border-bottom py-4">
                                <i class="fab fa-instagram fa-3x  mr-4 fa-fw"></i>
                                <div>
                                    <h5 class="contacto-titulo font-weight-bold">Intagram:</h5>
                                    <p class="contacto-parrafo mb-0">CarlosTrayan</p>
                            </li>


                        </ul>
                    </div>

                    <div class="col-12 col-lg-6">
                        <h2 class=" texto-titulo font-weight-bold text-center mb-5">Envienos su Consulta</h2>
                        <form action="send-mail.php" id="mi-formulario" method="post">

                            <div class="form-group form-row">
                                <label class="col-form-label col-12 col-md-3" for="nombre">Nombre:</label>
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" name="nombre" id="nombre"
                                        placeholder="Ingrese su Nombre" required />
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <label class="col-form-label col-12 col-md-3" for="edificio">Edificio:</label>
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" name="edificio" id="edificio"
                                        placeholder="Ingrese su Edificio" required>
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <label class="col-form-label col-12 col-md-3" for="edificio">Whatsapp:</label>
                                <div class="col-12 col-md-9">
                                    <input type="number" class="form-control" name="Whatsapp" id="Whatsapp"
                                        placeholder="Ingrese su Whatsapp" required>
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <label class="col-form-label col-12 col-md-3" for="correo">Correo:</label>
                                <div class="col-12 col-md-9">
                                    <input type="email" class="form-control" name="correo" id="correo"
                                        placeholder="Ingrese su Correo" required>
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <label class="col-form-label col-12 col-md-3" for="mensaje">Mensaje:</label>
                                <div class="col-12 col-md-9">
                                    <textarea class="form-control" name="mensaje" id="mensaje" rows="4"
                                        placeholder="Ingrese su Mensaje"></textarea>
                                </div>
                            </div>

                            <a href="" type="submit" class="btn btn-primaryy">Enviar Mensaje</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!---------------------------------------------
         Zona de contacto
-------------------------------------------  -->

        <!---------------------------------------------
         Zona de ubicacion
-------------------------------------------  -->

        <!-- start located map Section -->
        <section id="ltd_map_sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="map">
                            <h1 class="map-texto">Nuestra Ubicación</h1><a href="#slidingDiv" class="show_hide"
                                rel="#slidingDiv"><i class="fa fa-angle-up"></i></a>
                            <div id="slidingDiv">
                                <div class="map_area">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3045.5681202961237!2d-65.207153385296!3d-26.836257496482737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94225c0f1af750ed%3A0x5d98a42ca71d4ae9!2sPje.+2+de+Abril+380%2C+T4000+San+Miguel+de+Tucum%C3%A1n%2C+Tucum%C3%A1n!5e1!3m2!1ses!2sar!4v1564547863718!5m2!1ses!2sar"
                                        width="100%" height="600" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>



                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!---------------------------------------------
         Zona de footer
-------------------------------------------  -->



<footer id="ft_sec py-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ft">
                        <ul>
                            <li><a href="https://www.facebook.com/cacyprop/" target="_blank">
                                    <i class="fab fa-facebook"></i>


                            <li><a href="https://www.instagram.com/carlostrayan/?hl=en" target="_blank">
                                    <i class="fab fa-instagram"></i>



                        </ul>
                    </div>
                    
                    
                    <ul class="copy_right">
                        <li>&copy;Consorcio Carlos Trayan</li>
                        <a>&copy;Developer by THE MOCHO</a>

                    </ul>
                   
                </div>
            </div>
        </div>
    </footer>
        <!---------------------------------------------
         Zona de Script
-------------------------------------------  -->


        <script src="js/swiper.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jarallax.min.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>

        <script src="js/MiScrip.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>



        <!---------------------------------------------
         Zona de Inicialización de Script
-------------------------------------------  -->

        <!-- 
<form class="form-wts" action="" id="form">
    <p>Nuevo Mensaje</p>
    <label for="" >Nombre</label>
    <input class="inputwts" type="text" placeholder="Nombre">
    <label  for="">Mensaje</label>
    <textarea class="textareawts" name="" id="" cols="30" rows="10"></textarea>
    <button id="sendbtn" class="btn-wts">Enviar Mensaje</button>
    
</form>
</div>
</div> -->



        <script>
            //Botones wp

            var btnPlomero = document.querySelector('#wts-plomeria');
            var btnGasista = document.querySelector('#wts-gasista');
            var btnPintor = document.querySelector('#wts-pintor');
            var btnCerrajero1 = document.querySelector('#wts-cerrajero');
            var btnElectricista = document.querySelector('#wts-electricista');
            var btnHerrero = document.querySelector('#wts-herrero');
            var btnTecnicoPortero = document.querySelector('#wts-tecnicoPortero');
            var btnFumigador = document.querySelector('#wts-fumigador');
            var btnCerrajero2 = document.querySelector('#wts-cerrajeroDos');
            var btnIngenieroElectrico = document.querySelector('#wts-ingenieroElectrico');
            var btnAscensores = document.querySelector('#wts-ascensores');
            var btnAlbañeleria = document.querySelector('#wts-albañileria');
            var btnElectricista = document.querySelector('#wts-electricista');
            var tituloWsp = document.querySelector('.tituloWsp');
            var titleWsp = document.querySelector('#title');
            var cardwsp = document.querySelector('.card-imgg');
            var arr = [btnPlomero, btnGasista, btnPintor, btnCerrajero1, btnElectricista, btnHerrero, btnTecnicoPortero, btnFumigador, btnCerrajero2, btnIngenieroElectrico, btnAscensores];
            //Form
            var form = document.querySelector('#form');
            var sendbtn = document.querySelector('#enviarra');
            var cerrarform = document.querySelector('#cerrar');
            //
            var celu;
            //Eventos

            //Imagen logo

            cerrarform.addEventListener('click', function () {
                form.classList.toggle('entrarsalir')
            })
            //arr
            for (let i = 0; i < arr.length; i++) {
                arr[i].addEventListener('click', function () {
                    if (arr[i].id === 'wts-plomeria') {
                        celu = '5493816103354';
                        tituloWsp.innerHTML = 'Plomero';
                        titleWsp.value = 'Plomero';
                        cardwsp.classList = 'card-plomero';
                    } else if (arr[i].id === 'wts-gasista') {
                        celu = '5493815756579';
                        tituloWsp.innerHTML = 'Gasista';
                        cardwsp.classList = 'card-gasista';
                        titleWsp.value = 'Gasista';
                    } else if (arr[i].id === 'wts-pintor') {
                        celu = '5493815851746';
                        tituloWsp.innerHTML = 'Pintor';
                        cardwsp.classList = 'card-pintor';
                        titleWsp.value = 'Pintor';
                    } else if (arr[i].id === 'wts-cerrajero') {
                        celu = '5493813361004';
                        tituloWsp.innerHTML = 'Cerrajero';
                        cardwsp.classList = 'card-cerrajero2';
                        titleWsp.value = 'Cerrajero';
                    } else if (arr[i].id === 'wts-electricista') {
                        celu = '5493813424619';
                        tituloWsp.innerHTML = 'Electricista';
                        cardwsp.classList = 'card-electricista';
                        titleWsp.value = 'Electricista';
                    } else if (arr[i].id === 'wts-herrero') {
                        celu = '5493815418999';
                        tituloWsp.innerHTML = 'Herrero';
                        cardwsp.classList = 'card-herrero';
                        titleWsp.value = 'Herrero';
                    } else if (arr[i].id === 'wts-tecnicoPortero') {
                        celu = '5493814466037';
                        tituloWsp.innerHTML = 'Técnico Portero ';
                        cardwsp.classList = 'card-tecnicoPortero';
                        titleWsp.value = 'Tecnico Portero';
                    } else if (arr[i].id === 'wts-fumigador') {
                        celu = '5493814123982';
                        tituloWsp.innerHTML = 'Fumigador';
                        cardwsp.classList = 'card-fumigador';
                        titleWsp.value = 'Fumigador';
                    } else if (arr[i].id === 'wts-cerrajeroDos') {
                        celu = '';
                        tituloWsp.innerHTML = 'Cerrajero';
                        cardwsp.classList = 'card-cerrajero1';
                        titleWsp.value = 'Cerrajero';
                    } else if (arr[i].id === 'wts-ingenieroElectrico') {
                        celu = '5493816342721';
                        tituloWsp.innerHTML = 'Ingeniero Electrico';
                        cardwsp.classList = 'card-electricistaing';
                        titleWsp.value = 'Ingeniero Electrico';
                    } else if (arr[i].id === 'wts-ascensores') {
                        celu = '5493814800076';
                        tituloWsp.innerHTML = 'Ascensor';
                        cardwsp.classList = 'card-ascensor';
                        titleWsp.value = 'Ascensor';
                    } else if (arr[i].id === 'wts-albañileria') {
                        celu = '5493815367251';
                        tituloWsp.innerHTML = 'Albañileria';
                        titleWsp.value = 'Albañileria';
                    } else if (arr[i].id === 'wts-electricista') {
                        celu = '5493813424619';
                        tituloWsp.innerHTML = 'Electricista';
                        cardwsp.classList = 'card-ascensor';
                        titleWsp.value = 'Electricista';
                    }

                    console.log(titleWsp.value);
                    form.classList.toggle('entrarsalir')
                })
            }

            //Send btn
            sendbtn.addEventListener('click', enviarMensaje);

            function enviarMensaje() {

                //Condicional
                let inputnames = document.querySelector('#inputname').value;
                let textmensaje = document.querySelector('#inputmensaje').value;
                let inputedificios = document.querySelector('#inputedificio').value;

                let url = "https://api.whatsapp.com/send?phone=" + celu + "&text=Nombre: %0A" + inputnames +
                    "%0A Edificio: %0A" + inputedificios + "  %0A%0AMensaje: %0A" + textmensaje + "%0A";
                window.open(url);

                $.post('./prueba.php', {
                    "empleado": titleWsp.value,
                    "name": inputnames,
                    "edificio": inputedificios,
                    "mensaje": textmensaje,
                }, function (data) {
                    console.log('procesamiento finalizado', data);
                });
            }
        </script>


        <script>
            function Vermas(parrafo, boton) {
                if (document.getElementById(parrafo).style.display == 'block') {
                    document.getElementById(parrafo).style.display = 'none'
                    document.getElementById(boton).innerHTML = 'Leer Más'

                } else {
                    document.getElementById(parrafo).style.display = 'block'
                    document.getElementById(boton).innerHTML = 'Leer Menos'
                }

            }
        </script>


        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        </script>
        <script>
            var mySwiper = new Swiper('#Slider-Principal', {
                /*Botones de navegación */
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                /*Botones de paginación */
                pagination: {
                    el: '.swiper-pagination',
                    type: 'progressbar',
                    clickable: true,
                },
                autoplay: {
                    delay: 9000,
                },
                keyboard: {
                    enabled: true,
                    onlyInViewport: true,
                }
            });
        </script>

    </body>

    </html>