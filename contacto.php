
<?php 
include __DIR__ . '/includes/funciones.php';
incluirTemplate('header',false);?>
 

<div class="contenedor-form">

    <form action="#" class="form-contacto">
        <fieldset><legend>Informacion del contacto</legend>
        
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Ej: Juan" required>
    
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Ej: mimail@mail.com" require>
    
          <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>

      
        </fieldset>


        <fieldset><legend>Quien se esta contactado?</legend>
          
            <select name="entidad" id="entidad">
                <option value="0" selected= "true" disabled="disabled">---Seleccione---</option>
                <option value="1">Persona</option>
                <option value="2">Empresa</option>
            </select>
        </fieldset>



        <input  class="btn-enviar" type="submit"></button>
    </form>
    <div class="container-back-index">
        <a style = "color:white;" class="back-index" href="/index.php">Volver</a>
    </div>
</div>



<div class="imagen-contacto">

</div>

<?php incluirTemplate('footer')?>

</body>
</html>