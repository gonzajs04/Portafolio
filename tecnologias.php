<?php 
include __DIR__ . '/classes/Lenguaje.php';

                         $lenguajes = [new Lenguaje("HTML","HTML.png","HTML.webp","https://developer.mozilla.org/es/docs/Web/HTML","FRONT"),
                                       new Lenguaje("CSS","css.png","css.webp","","FRONT"),
                                       new Lenguaje("JavaScript","logojs.svg","","","FRONT"),
                                     
                                       new Lenguaje("Sass","logo_sass.png","logo_sass.webp","","FRONT"),
                                       new Lenguaje("Bootstrap","bootstrap.png","bootstrap.webp","","FRONT"),
                                       new Lenguaje("NodeJS","logo_node.png","logo_node.webp","","BACK"),
                                       new Lenguaje("GulpJS","logo_gulp.png","logo_gulp.webp","","BACK"),
                                       new Lenguaje("PHP","logo-php.png","logo-php.webp","","BACK"),
                                       new Lenguaje("GIT","logo-git.png","logo-git.webp","","CONTROL"),
                                       new Lenguaje("GITHUB","logo-github.png","logo-github.webp","","SERVER"),
                                       new Lenguaje("MYSQL","MYSQL.png","MYSQL.webp","","DATABASE"),
                                       new Lenguaje("NPM","npm-logo.png","npm-logo.webp","","GESTOR"),
                                       new Lenguaje("COMPOSER","composer-logo.png","composer-logo.webp","","GESTOR")
                                    
                         
];
                         include __DIR__ . '/includes/funciones.php';
                         incluirTemplate('header')
?>

</header>

       
           
            <div class="contenedor-tecnologias" >

         
                        <div class="containerg-categorias">
                        <h3>Frontend</h3>
                       
                            <div class="container-categorias" data-aos ="flip-down">
                                <?php foreach($lenguajes as $lenguaje){
                                    if($lenguaje->categoria === 'FRONT'){ ?>
                                            <div class="logos">
                                        
                                            <picture>
                                            <a href="<?php $lenguaje->getUrl();?>">
                                                <source srcset="build/img/<?php $lenguaje->getImagenComprimida();?>" type="image/webp">
                                                <img loading ="lazy" src="build/img/<?php $lenguaje->getImagen();?>" alt="LOGO HTML">
                                                </a>
                                            </picture>

                                        </div>

                                <?php }} ?>  
                        </div> 
                        </div><!--TERMINA CONTAINERG FRONT-->
                    <div class="containerg-categorias">
                        <h3 ">Backend</h3>
                        
                        <div class="container-categorias" data-aos ="flip-down">
                    
                        <?php foreach($lenguajes as $key => $lenguaje ){
                                    if($lenguaje->categoria === 'BACK'){ ?>
                                            <div class="logos <?php echo $lenguaje->nombre == 'GulpJS' ? 'gulp' : '';?>">
                                        
                                            <picture>
                                            <a href="<?php $lenguaje->getUrl();?>">
                                                <source srcset="build/img/<?php $lenguaje->getImagenComprimida();?>" type="image/webp">
                                                <img loading ="lazy" class="" src="build/img/<?php $lenguaje->getImagen();?>" alt="LOGO HTML">
                                                </a>
                                            </picture>

                                        </div>

                                <?php }} ?>  

                        </div>
                    </div>    
                    
                <div class="containerg-categorias">
                    <h3>Sistemas de control de versiones</h3>
                    <div class="container-categorias" data-aos ="flip-down">
                        <!--OTRA TECNOLOGIA-->
                        <?php foreach($lenguajes as $lenguaje){
                                    if($lenguaje->categoria === 'CONTROL'){ ?>
                                            <div class="logos">
                                        
                                            <picture>
                                            <a href="<?php $lenguaje->getUrl();?>">
                                                <source srcset="build/img/<?php $lenguaje->getImagenComprimida();?>" type="image/webp">
                                                <img loading ="lazy" src="build/img/<?php $lenguaje->getImagen();?>" alt="LOGO HTML">
                                                </a>
                                            </picture>

                                        </div>

                                <?php }} ?>  
                    </div>
                </div>
                    

                
                <div class="containerg-categorias" data-aos ="flip-down">
                    <h3>Servers</h3>
                    <div class="container-categorias" data-aos ="flip-down">
                            <!--OTRA TECNOLOGIA-->
                            <?php foreach($lenguajes as $lenguaje){
                                    if($lenguaje->categoria === 'SERVER'){ ?>
                                            <div class="logos" >
                                        
                                            <picture>
                                            <a href="<?php $lenguaje->getUrl();?>">
                                                <source srcset="build/img/<?php $lenguaje->getImagenComprimida();?>" type="image/webp">
                                                <img loading ="lazy" src="build/img/<?php $lenguaje->getImagen();?>" alt="LOGO HTML">
                                                </a>
                                            </picture>

                                        </div>

                                <?php }} ?>  
                    </div>
                </div>
                    
                <div class="containerg-categorias" data-aos ="fade-left">
                    <h3>Bases de datos</h3>
                    <div class="container-categorias">
                            <!--OTRA TECNOLOGIA-->
                            <?php foreach($lenguajes as $lenguaje){
                                    if($lenguaje->categoria === 'DATABASE'){ ?>
                                            <div class="logos">
                                        
                                            <picture>
                                            <a href="<?php $lenguaje->getUrl();?>">
                                                <source srcset="build/img/<?php $lenguaje->getImagenComprimida();?>" type="image/webp">
                                                <img loading ="lazy" src="build/img/<?php $lenguaje->getImagen();?>" alt="LOGO HTML">
                                                </a>
                                            </picture>

                                        </div>

                                <?php }} ?>  
                    </div>
                </div>

         

             <!--OTRA TECNOLOGIA-->
                <div class="containerg-categorias" data-aos ="fade-right">
                    <h3>Gestor de paquetes</h3>
                    <div class="container-categorias">
                    <?php foreach($lenguajes as $lenguaje){
                                    if($lenguaje->categoria === 'GESTOR'){ ?>
                                            <div class="logos">
                                        
                                            <picture>
                                            <a href="<?php $lenguaje->getUrl();?>">
                                                <source srcset="build/img/<?php $lenguaje->getImagenComprimida();?>" type="image/webp">
                                                <img loading ="lazy" src="build/img/<?php $lenguaje->getImagen();?>" alt="LOGO HTML">
                                                </a>
                                            </picture>

                                        </div>

                                <?php }} ?>  
                    </div>
                </div>

                

            </div>
          
            
        </div>

    </section>

    <div class="container-back-index" >
        <a class="back-index" href="/index.php">Volver</a>
    </div>



<?php incluirTemplate('footer')?>
