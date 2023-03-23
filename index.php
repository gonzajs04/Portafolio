<?php include __DIR__ . '/includes/funciones.php';
include __DIR__ . '/classes/Proyecto.php';
incluirTemplate('header', true);

$proyectos = [
    (new Proyecto("Almas fortalecidas piedras", "PROYECTO2", "Este es mi primer proyecto de todos, en el cual solamente utilice HTML y CSS | This is my first project. I used only HTML and CSS", "https://almaspiedrasfortalecidas.netlify.app/")),

    (new Proyecto("El Granizado", "Proyecto1", "Este es mi segundo proyecto. Ya con mas practica, empece a jugar un poco con HTML y CSS. | This is my second project, with more practice, I started to play a little bit with HTML and CSS", "https://elgranizado.netlify.app/")),

    (new Proyecto("Festival Musica", "Proyecto-3", "Este es mi tercer proyecto. Ya empece a utilizar SASS y GULP JS para convertir imagenes PNG o JPG en WEBP y mimificarlas, tambien para comprimir archivos CSS y JS, entre otras cosas | This is my third project. I already started using SASS and GULP JS to convert PNG or JPG images into WEBP and mimic them, also to compress CSS and JS files, among other things", "https://festivalmusicad.netlify.app/")),

    (new Proyecto("Bienes Raices", "Bienesraices", "Este es mi ultimo proyecto FRONT-END, el cual, se trata de una pagina que ofrece viviendas. Actualmente no esta terminado al 100%, falta el CRUD el cual estara desarrollado con PHP y MYSQL para la gestion de base de datos
    esta hecho con: HTML, SASS, JAVASCRIPT, GULPJS | This is my last FRONT-END project, which is a page that offers housing. Currently it isn't 100% finished, I've'to do the CRUD which will be developed with PHP and MYSQL for database management. Currently, it's done with: HTML, SASS, JAVASCRIPT, GULPJS

    ", "https://bienesraicesfront.netlify.app/")),

    (new Proyecto("CloudMovie", "cloudmovie", "Este es mi primer proyecto como FULL STACK DEVELOPER PHP, el cual consiste, del manejo de las tecnologias: HTML,CSS,SCSS,JAVASCRIPT,GULP,PHP,MYSQL. Este proyecto es una pagina de peliculas con mi propia base de datos, la cual podes, BUSCAR PELICULAS, VER SUS TRAILERS, FILTRAR POR GENEROS, Y POSEE UN ADMINISTRADOR DE PELICULAS PARA: Agregar peliculas, Actualizarlas y eliminarlas ", "https://cloudmoviegh.000webhostapp.com/")),
    (new Proyecto("WeatherLike","weatherlike","Este es un proyecto el cual CONSUMO el API de OPENWEATHER. Este proyecto permite visualizar todas las TEMPERATURAS y otras cosas de todo el mundo. Para ver la pagina, toca el link ","https://weatherlikev2.netlify.app/"))
]
?>


<div class="contenedor-particles-sobremi">
    <div id="particles-js">

    </div>
    <section id="sobremi" class="sobre-mi">

        <div class="contenedorg-sobremi">
            <div class="contenedor-sobremi">
                <div class="contenedor grid-sobremi">

                    <div class="sobremi-texto" data-aos="fade-up">
                        <h2 class="animate__animated animate__bounce">Sobre mi</h2>
                        <hr>
                        <p>¡Hola! Soy Gonzalo Hernández y tengo 19 años.
                            Soy técnico en computación orientado a la programación.
                            Hace 3 meses incursioné en el mundo del desarrollo web y mi meta es ser un desarrollador FULL STACK MERN o PHP.
                            Suelo adentrarme a nuevos desafíos para aprender, ponerle mucha pasión y la dedicación que requiera.

                            Este portafolio fue realizado con:
                        </p>
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JAVASCRIPT</li>
                            <li>SASS</li>
                            <li>GULPJS</li>
                            <li>PHP</li>
                        </ul>
                        <p>
                            A continuación enumeraré mis conocimientos ordenados en forma que los he ido aprendiendo.
                            En caso de interesarle y desear contactarme puede realizarlo por el <strong><a href="contacto.html">FORMULARIO</a></strong> de contacto. <br>

                            <br>
                            Gonzalo Hernandez.
                        </p>

                    </div>

                    <div class="sobremi-img">
                        <picture>

                            <source srcset="/build/img/sobremi.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/sobremi.png" alt="foto sobre mi">
                        </picture>
                    </div>

                </div>
            </div>
        </div>

    </section>
</div>
<section id="tecnologias" class="tecnologias" data-aos="fade-right">

    <div class="tecnologias-title">
  
        <h2>Skills</h2>
        
        </div>

    <div class="contenedorg-tecnologias">
        <div class="contenedor-tecnologias index">

            <div class="logos">

                <picture>
                    <a href="https://developer.mozilla.org/es/docs/Web/HTML">
                        <source srcset="/build/img/html.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/HTML.webp" alt="LOGO HTML">
                    </a>
                </picture>

            </div>
            <div class="logos">

                <a href="https://developer.mozilla.org/es/docs/Web/CSS">
                    <picture>

                        <source srcset="/build/img/CSS.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/CSS.webp" alt="LOGO css">
                    </picture>
                </a>
            </div>
            <div class="logos js">

                <a href="https://developer.mozilla.org/es/docs/Web/JavaScript">
                    <picture>

                        <img loading="lazy" src="/build/img/logojs.svg" alt="LOGO js">
                    </picture>
                </a>
            </div>

        </div>
        <div class="contenedor-vermas">
            <a href="/tecnologias.php" target="_blank">Ver mas</a>
        </div>

    </div>

</section>

<section class="proyectos" id="proyectos" data-aos="fade-down">

    <div class="contenedorg-proyectos">
        <h2>Proyectos</h2>
        <div class="contenedor contenedor-proyectos">


            <?php foreach ($proyectos as $proyecto) { ?>
                <!--PROYECTO 1-->
                <div class="proyecto">
                    <div class="img-proyecto">
                        <picture>
                    
                            <source srcset="/build/img/<?php echo $proyecto->getImagen() . '.webp' ?>" type="image/webp">
                            <img loading="lazy" src="/build/img/<?php echo $proyecto->getImagen() . ".png"; ?>" alt="Imagen Proyecto">
                        </picture>

                    </div>

                    <p class="linea-divisora"></p>
                    <div class="titulo-proyecto">
                        <h3><?php echo $proyecto->getNombre(); ?></h3>
                    </div>

                    <div class="texto-proyecto">
                        <p><?php echo $proyecto->getDescripcion() ?></p>

                    </div>

                    <div class="container-descripcionbtn">
                        <button class="descripcion-button">Ver mas</button>
                    </div>
                    

                    <div class="contenedor-ver">

                        <a href="<?php echo $proyecto->getUrl() ?>">Ver proyecto</a>

                    </div>

                </div>

            <?php } ?>

        </div>

    </div>


</section>


<?php incluirTemplate('footer') ?>