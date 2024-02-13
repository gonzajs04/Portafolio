<section class="certificados">
    <div class="container-certificados">
        <h2 class="h2-title">Certificados</h2>


        <div class="container-datos-certificados">
            <?php
            foreach ($certificados as $certificado) {
            ?>
                <div class="certificado">
                    

                    <div class="container-imagen-certificado">
                        <picture>
                            <source srcset="build/img/<?php echo $certificado->getImagenCertificado() ?>.webp" type="image/webp">
                            <img src="build/img/<?php echo $certificado->getImagenCertificado() ?>.png" alt="imagen certificado <?php $certificado->getNombreCertificado() ?>">
                        </picture>
                    </div>

                </div>

                
    <?php } ?>
        </div>

    </div>
</section>