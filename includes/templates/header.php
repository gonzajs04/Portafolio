<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="shortcut icon" href="../../build/img/favicon.ico" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bienvenidos! Este es mi portafolio y te voy a mostrar lo mas importante de mi carrera siendo Desarrollador Web hasta el momento ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9673d7f4bb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/build/css/app.css">
    
    <title>Portfolio</title>

</head>

<body>
    <header class="header">
        <?php if ($inicio === true) { ?>
            <div class="contenidog-header">
                <div class="contenido-header">

                 
                    <div class="header-text" data-aos="fade-left" data-aos-delay="300">
                        <h2>
                            <span class="bienvenida">Bienvenidos</span>
                            <span>Mi nombre es</span>
                            <span>Gonzalo</span> 
                            <span>Hernandez</span>
                        </h2>
                        <p>Desarrollador 👨‍💻 WEB</p>
                    </div>


                    <div class="imagen-personal" data-aos="fade-right" data-aos-delay="500">
                        <picture>

                            <source srcset="/build/img/foto.webp" type="image/webp">
                            <img loading="lazy" src="build/img/foto.jpg" alt="Imagen personal">
                        </picture>
                    </div>


                </div>



            </div>

        <?php } ?>

        <button class="toggle" data-aos="fade-down">
                <i class="fa-solid fa-bars"></i>
            </button>


        <div class="contenido-navegacion">

        

            <nav class="navegacion">
                <div class="contenedor-botones">
                    <button class="close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>

                    <button class="btn-dark">
                        <i class="fa-solid fa-moon"></i>
                    </button>
                </div>
                <ul class="lista-nav">

                    <li> <a class="smooth " href="#sobremi">Sobre mi</a></li>

                    <li><a href="#proyectos" class="smooth">Proyectos</a></li>

                    <li><a href="#contact" class="smooth">Contacto</a></li>
                    <li><a href="https://www.linkedin.com/in/gonza-hernandez/">Linkedin</a></li>
                    <li><a href="https://github.com/gonzajs04?tab=repositories">GitHub</a></li>
                    <li><a href="/cv.pdf" download="cv">CV</a></li>
                </ul>

            </nav>
        </div>
        <?php if ($inicio === true) { ?>
            <div class="header_img">

            </div>
        <?php } ?>



    </header>