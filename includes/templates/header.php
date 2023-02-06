<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9673d7f4bb.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="/build/css/app.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <title>Portafolio</title>

</head>
<body>
    <header class="header">
    <?php if($inicio === true){?>
    <div class="contenidog-header">
            <div class="contenido-header">

                <div class="imagen-personal">
                    <picture>
                        
                        <source srcset="/build/img/foto.webp" type="image/webp">
                        <img loading ="lazy" src="build/img/foto.jpg" alt="Imagen personal">
                    </picture>
                    <h2><span>Gonzalo</span> Hernandez</h2>
                    <p>Desarrollador 👨‍💻 WEB</p>
                </div>

             

            </div>

          

        </div>
        
    <?php } ?> 
      
        <div class="contenido-navegacion">
         
            <button class="toggle">
                <i class="fa-solid fa-bars"></i>
            </button>
            

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
               
                <li> <a class = "smooth "href="#sobremi">Sobre mi</a></li>
                <li><a class = "smooth " href="#tecnologias">Tecnologias</a></li>
                <li><a href="#proyectos" class="smooth">Proyectos</a></li>

                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="https://www.linkedin.com/in/gonza-hernandez/">Linkedin</a></li>
                <li><a href="https://github.com/gonzajs04?tab=repositories">GITHUB</a></li>
                <li><a href="CV - Gonzalo Hernandez.pdf" download="CV - Gonzalo Hernandez">Curriculum</a></li>
              </ul>        
               
            </nav>
        </div>
        <?php if($inicio === true){?>
        <div class="header_img">

        </div>
        <?php } ?>

        
       
</header>

