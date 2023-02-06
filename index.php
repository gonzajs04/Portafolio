<?php include __DIR__ . '/includes/funciones.php';
incluirTemplate('header',true)
?>



    <div id="particles-js">

    </div>
    <section id="sobremi" class="sobre-mi">

        <div class="contenedorg-sobremi">
            <div class="contenedor-sobremi" >
                <div class="contenedor grid-sobremi" data-aos ="fade-up" >

                    <div class="sobremi-texto">
                        <h2>Sobre mi</h2>
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
                           
                        
                            <img loading ="lazy" src="/build/img/sobremi.png" alt="foto sobre mi">
                        </picture>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section id="tecnologias" class="tecnologias"  data-aos = "fade-right">

        <div class="tecnologias-title">
            <img src="/build/img/logo-codeopen.svg" alt="">
            <h2>Skills</h2>
            <img src="/build/img/logo-code.svg" alt="">
        </div>

        <div class="contenedorg-tecnologias">
            <div class="contenedor-tecnologias index">
                
                <div class="logos" >
           
                <picture>
                   <a href="https://developer.mozilla.org/es/docs/Web/HTML">
                    <source srcset="/build/img/html.webp" type="image/webp">
                    <img loading ="lazy" src="/build/img/HTML.webp" alt="LOGO HTML">
                    </a>
                </picture>

            </div>
            <div class="logos">
              
                <a href="https://developer.mozilla.org/es/docs/Web/CSS">
                <picture>
                
                    <source srcset="/build/img/css.webp" type="image/webp">
                    <img loading ="lazy" src="/build/img/css.webp" alt="LOGO css">
                </picture>
            </a>
            </div>
            <div class="logos js">
          
                <a href="https://developer.mozilla.org/es/docs/Web/JavaScript">
                <picture>
           
                    <img loading ="lazy" src="/build/img/logojs.svg" alt="LOGO js">
                </picture>
            </a>
            </div>

            </div>
            <div class="contenedor-vermas">
                <a href="/tecnologias.php">Ver mas</a>
            </div>

        </div>

    </section>

<section class="proyectos" id="proyectos"  data-aos = "fade-down">

    <div class="contenedorg-proyectos">
        <h2>Proyectos</h2>
        <div class="contenedor contenedor-proyectos">
         
            <!--PROYECTO 1-->
            <div class="proyecto">
                <div class="img-proyecto">
                    <img src="/build/img/PROYECTO 2.png" alt="Imagen Almas Piedras">
               
                </div>
                <p class="linea-divisora"></p>
                <div class="titulo-proyecto">
                     <h3>Almas fortalecidas piedras</h3>
                </div>

                <div class="texto-proyecto">
                    <p>Este es mi primer proyecto de todos, en el cual solamente utilice HTML y CSS | This is my first project. I used only HTML and CSS</p>
                </div>

                <div class="contenedor-ver">

                    <a href="https://almaspiedrasfortalecidas.netlify.app/">Ver proyecto</a>

                </div>
                
                

            </div>

            <!--PROYECTO 2-->
            <div class="proyecto">
                <div class="img-proyecto">
                    <img src="/build/img/PROYECTO 1.png" alt="Imagen el granizado">
                </div>
                <p class="linea-divisora"></p>
                <div class="titulo-proyecto">
                    <h3>El Granizado</h3>
                </div>

                <div class="texto-proyecto">
                    <p>Este es mi segundo proyecto. Ya con mas practica, empece a jugar un poco con HTML y CSS. | This is my second project, with more practice, I started to play a little bit with HTML and CSS</p>
                </div>
                
                <div class="contenedor-ver">

                    <a href="https://elgranizado.netlify.app/">Ver proyecto</a>

                </div>
       
                
            </div>

               <!--PROYECTO 3-->
               <div class="proyecto">
                <div class="img-proyecto">
                    <img src="build/img/Proyecto-3.png" alt="Imagen festival">
                </div>
                <p class="linea-divisora"></p>
                <div class="titulo-proyecto">
                    <h3>Festival Musica</h3>
                </div>

                <div class="texto-proyecto">
                    <p>Este es mi tercer proyecto. Ya empece a utilizar SASS y GULP JS para convertir imagenes PNG o JPG en WEBP y mimificarlas, tambien para comprimir archivos CSS y JS, entre otras cosas | This is my third project. I already started using SASS and GULP JS to convert PNG or JPG images into WEBP and mimic them, also to compress CSS and JS files, among other things </p>
                </div>

                <div class="contenedor-ver">

                    <a href="https://festivalmusicad.netlify.app/">Ver proyecto</a>
                    

                </div>
    
            </div>

  <!--PROYECTO 4-->
  <div class="proyecto" >
    <div class="img-proyecto">
        <source srcset="build/img/Bienesraices.webp" type="image/webp">
        <img src="build/img/Bienesraices.png" alt="Imagen festival">
    </div>
    <p class="linea-divisora"></p>
    <div class="titulo-proyecto">
        <h3>Bienes Raices</h3>
    </div>

    <div class="texto-proyecto">
        <p>Este es mi ultimo proyecto FRONT-END, el cual, se trata de una pagina que ofrece viviendas. Actualmente no esta terminado al 100%, falta el CRUD el cual estara desarrollado con PHP y MYSQL para la gestion de base de datos
        Actualmente, esta hecho con: HTML, SASS, JAVASCRIPT, GULPJS | This is my last FRONT-END project, which is a page that offers housing. Currently it isn't 100% finished, I've'to do the CRUD which will be developed with PHP and MYSQL for database management. Currently, it's done with: HTML, SASS, JAVASCRIPT, GULPJS

        </p>
    </div>

    <div class="contenedor-ver">

        <a href="https://bienesraicesfront.netlify.app/">Ver proyecto</a>

    </div>

       

     </div>

    </div>


</section>


<?php incluirTemplate('footer')?>
