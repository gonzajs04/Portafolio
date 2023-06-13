<?php include __DIR__ . '/includes/funciones.php';
include __DIR__ . '/classes/Proyecto.php';
incluirTemplate('header', true);

include __DIR__ . '/classes/Lenguaje.php';

                         $lenguajes = [new Lenguaje("HTML","minihtml.png","minihtml.webp","https://developer.mozilla.org/es/docs/Web/HTML","FRONT"),
                                       new Lenguaje("CSS","minicss.png","minicss.webp","","FRONT"),
                                       new Lenguaje("JavaScript","minijs.png","minijs.webp","","FRONT"),
                                       new Lenguaje("React","minireact.png","minireact.webp","","FRONT"),
                                       new Lenguaje("Sass","logo_sass.png","logo_sass.webp","","FRONT"),
                                       new Lenguaje("Bootstrap","miniboot.png","miniboot.webp","","FRONT"),
                                       new Lenguaje("NodeJS","logo_node.png","logo_node.webp","","BACK"),
                                       new Lenguaje("GulpJS","logo_gulp.png","logo_gulp.webp","","BACK"),
                                       new Lenguaje("PHP","miniphp.png","miniphp.png","","BACK"),
                                       new Lenguaje("GIT","logo-git.png","logo-git.webp","","CONTROL"),
                                       new Lenguaje("GITHUB","logo-github.png","logo-github.webp","","SERVER"),
                                       new Lenguaje("MYSQL","MYSQL.png","MYSQL.webp","","DATABASE"),
                                       new Lenguaje("NPM","npm-logo.png","npm-logo.webp","","GESTOR"),
                                       new Lenguaje("COMPOSER","composer-logo.png","composer-logo.webp","","GESTOR"),
                                       new Lenguaje("JAVA","minijava.png","minijava.webp","","BACK"),
                                       new Lenguaje("C++","minic.png","minic.webp","","BACK")
                                    
                         
];

$proyectos = [
    // (new Proyecto("Almas fortalecidas piedras", "PROYECTO2", "Este es mi primer proyecto de todos, en el cual solamente utilice HTML y CSS | This is my first project. I used only HTML and CSS", "https://almaspiedrasfortalecidas.netlify.app/")),

    // (new Proyecto("El Granizado", "Proyecto1", "Este es mi segundo proyecto. Ya con mas practica, empece a jugar un poco con HTML y CSS. | This is my second project, with more practice, I started to play a little bit with HTML and CSS", "https://elgranizado.netlify.app/")),

    (new Proyecto("FunPetz", "funpetz", "Puedes encontrar los juguetes favoritos de tu mascota aqui! FunPetz es un diseño desarrollado con la finalidad de estructurar una pagina web moderna para animales. Puedes encontrarla haciendo click en la imagen", "https://gonzajs04.github.io/FunPetz4.0.github.io/")),

    (new Proyecto("Norway Travel", "norway", "Si tu objetivo es viajar por Noruega, te presentamos Norway Travel, encontra tus destino deseado. Puedes ver la pagina haciendo click en la imagen", "https://gonzajs04.github.io/Travelers.github.io/")),

    (new Proyecto("Festival Musica", "festival", "Este es mi tercer proyecto. Ya empece a utilizar SASS y GULP JS para convertir imagenes PNG o JPG en WEBP y mimificarlas, tambien para comprimir archivos CSS y JS, entre otras cosas | This is my third project. I already started using SASS and GULP JS to convert PNG or JPG images into WEBP and mimic them, also to compress CSS and JS files, among other things", "https://festivalmusicad.netlify.app/")),

    // (new Proyecto("Bienes Raices", "Bienesraices", "Este es mi ultimo proyecto FRONT-END, el cual, se trata de una pagina que ofrece viviendas. Actualmente no esta terminado al 100%, falta el CRUD el cual estara desarrollado con PHP y MYSQL para la gestion de base de datos
    // esta hecho con: HTML, SASS, JAVASCRIPT, GULPJS | This is my last FRONT-END project, which is a page that offers housing. Currently it isn't 100% finished, I've'to do the CRUD which will be developed with PHP and MYSQL for database management. Currently, it's done with: HTML, SASS, JAVASCRIPT, GULPJS

    // ", "https://bienesraicesfront.netlify.app/")),

    (new Proyecto("CloudMovie", "cloudmovie", "Este es mi primer proyecto como FULL STACK DEVELOPER PHP, el cual consiste, del manejo de las tecnologias: HTML,CSS,SCSS,JAVASCRIPT,GULP,PHP,
    MYSQL. Este proyecto es una pagina de peliculas con mi propia base de datos, la cual podes, BUSCAR PELICULAS, VER SUS TRAILERS, FILTRAR POR GENEROS, Y POSEE UN ADMINISTRADOR DE PELICULAS PARA: Agregar peliculas, Actualizarlas y eliminarlas ", "https://cloudmoviegh.000webhostapp.com/")),
    (new Proyecto("WeatherLike","weatherlike","Este es un proyecto el cual consumo el API de OPENWEATHER. Este proyecto permite visualizar todas las TEMPERATURAS y otras cosas de todo el mundo. Para ver la pagina, toca el link ","https://weatherlikev2.netlify.app/")),

    (new Proyecto("Veterinario", "perro", "Veterinario es un Administrador de pacientes. Es mi primer proyecto hecho con REACT, TAILWIND CSS, VITE y LocalStorage. Puedes registrar los sintomas de tu mascota, editarlos o eliminar el sintoma. Puedes encontrar la pagina haciendo click ", "https://administradormascotasvite.netlify.app/")),
    (new Proyecto("BlueBerry", "blueberry", "Blueberry es una plataforma que ofrece las mejores joyas de Inglaterra. Desarrollada con React, Sass y Vite, brinda una experiencia visual atractiva y funcional. La integración de  permite una navegación fluida entre secciones. Descubre nuestras exquisitas joyas en un solo lugar. ¡Bienvenido a Blueberry! ", "https://blueberryj.netlify.app/"))
]
?>


<div class="contenedor-particles-sobremi">
    <div id="particles-js">

    </div>
    <section id="sobremi" class="sobre-mi">

        <div class="contenedorg-sobremi">
            <div class="contenedor-sobremi">
                <div class=" grid-sobremi">

                    <div class="sobremi-texto" data-aos="fade-up">
                        <h2 class="animate__animated animate__bounce">Sobre mi</h2>
                        <hr>
                        <p>¡Hola! Soy Gonzalo Hernández y tengo 20 años.
                            Soy técnico en computación orientado a la programación, cursando la carrera de Ingeniera en Informatica.
                            Hace 1 año incursioné en el mundo del desarrollo web. Actualmente desarrollo webs como FULLSTACK PHP con MYSQL como gestor de base de datos.
                            Asimismo, desarrollo Landing Pages con React y CSS(Sass o TailwindCSS).

                            Suelo adentrarme a nuevos desafíos para aprender, ponerle mucha pasión y la dedicación que requiera hasta llegar a la meta deseada.

                         
                        </p>
                        <div class="container-skills">
                            <h2> Skills</h2>
                            <div class="skills">
                                <?php foreach($lenguajes as $lenguaje){?>

                                    <div class="logo <?php echo $lenguaje->getNombre() == 'GulpJS' ? 'GulpJS' : '';?>">
                                        <picture>
                                       
                                            <source srcset="build/img/<?php echo $lenguaje->getImagenComprimida()?>" type="image/webp">
                                            <img loading ="lazy" src="build/img/<?php echo $lenguaje->getImagen()?>" alt="Logo">
                                        </picture>
                                    </div>

                                <?php } ?>
                            </div>
                        </div>
                        <p>
                           Abajo podas encontrar mi experiencia en el mundo del Desarrollo Web. Si deseas contactarme, rellena el <strong>FORMULARIO</strong> al final de la pagina. <br>

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


</header>

       

  

<section class="proyectos" id="proyectos">

    <div class="contenedorg-proyectos">
        <h2>Proyectos</h2>
        <div class="contenedor-proyectos">


            <?php foreach ($proyectos as $proyecto) { ?>
                <!--PROYECTO 1-->
            
                <div class="proyecto">
                <a href="<?php echo $proyecto->getUrl()?>">

                    <div class="img-proyecto">
                        <picture>
                    
                            <source srcset="/build/img/<?php echo $proyecto->getImagen() . '.webp' ?>" type="image/webp">
                            <img loading="lazy" src="/build/img/<?php echo $proyecto->getImagen() . ".png"; ?>" alt="Imagen Proyecto">
                        </picture>

                    </div>
                    </a> 

                    <div class="titulo-proyecto">
                        <h3><?php echo $proyecto->getNombre(); ?></h3>
                    </div>

                    <div class="texto-proyecto">
                        <p><?php echo $proyecto->getDescripcion() ?></p>

                    </div>

              
       
                
               
                    <div class="container-descripcionbtn">
                        <button class="descripcion-button">Ver mas</button>
                    </div>  
                    
              

                </div>
            <?php } ?>

        </div>

    </div>


</section>

<section class="contact" id="contact">
        <h2>Contacto</h2>

        <div class="container-form">
            <form action="" class="form">
                <div class="container-name">
                    <label for="name">Nombre <sup>*</sup></label>
                    <input type="text" placeholder="Your name" name="name" id="" class="form-nombre">
                </div>
     

                <div class="container-email">
                    <label for="name">Mail <sup>*</sup></label>
                    <input type="text" name="name" id="" placeholder="e.g. example@mail.com" class="form-email">
                </div>
              

                <div class="container-subject">
                    <label for="name">Tema</label>
                    <input type="text" name="name" id="" placeholder="e.g. Support">
                </div>
                
                <div class="container-msg">
                    <label for="">Tu mensaje</label>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Enter your message here" class="form-descripcion"></textarea>
                </div>
              

                <div class="container-submit">
                    <input type="submit" value="Submit" id="enviar-correo">
                </div>


            </form>
        </div>

        
    </section>

<?php incluirTemplate('footer') ?>