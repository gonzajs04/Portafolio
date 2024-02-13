
document.addEventListener('DOMContentLoaded', () => {
    iniciarApp();
})


function iniciarApp() {
    

    const botonMenu = document.querySelector('.toggle');
    const navegacion = document.querySelector('.navegacion');
    const contNav = document.querySelector('.contenido-navegacion');


    if (!(botonMenu == null)) {
        //MAL, PASAR A FUNCION A PARTE LLAMADA ABRIR MENU DE NAV
        botonMenu.addEventListener('click', () => {

            navegacion.classList.add('visible');
            botonMenu.classList.add('novisible');
            contNav.style.zIndex = "100000";




        })

        enviarMail();

        abrirImagen();

    }


    function abrirImagen(){
        const body = document.querySelector('body')
        const certificados = document.querySelectorAll('.container-imagen-certificado');
        certificados.forEach(certificado=>{
            certificado.addEventListener('click',()=>{
                certificado.classList.toggle('fixed-img');
                body.classList.toggle('no-scroll');
            })
        })
    }

    function enviarMail() {
        const btnEnvio = document.getElementById('enviar-correo');
        if (btnEnvio != null) {
            btnEnvio.addEventListener('click', (e) => {
                e.preventDefault();
             
                const nombre = document.querySelector('.form-nombre').value;
                const mensaje = document.querySelector('.form-descripcion').value;
                const subject = document.querySelector('.subject-input').value;
                const subjectEncoded = encodeURIComponent(subject);
                console.log(subjectEncoded)

                if ( nombre != '' && subject != '') {
                     window.location.href = `mailto:hernandezgonzalo5845@gmail.com?subject=${subjectEncoded}&body=Nombre%3A${nombre}%0A${mensaje}`;

                    redireccionarIndex();
                    return;

                }
                return;


            });
        }

    }

    function redireccionarIndex() {
        window.location.href = '/';
    }

    //MAL, HACER EN FUNCION APARTE LALMADA CERRAR NAVEGACION


    const botonCerrar = document.querySelector('.close');

    if (!(botonCerrar == null)) {
        botonCerrar.addEventListener('click', () => {

            navegacion.classList.remove('visible');
            botonMenu.classList.remove('novisible');
            contNav.style.zIndex = "0";



        })
    }


    //FUNCION PARA BAJAR FLUIDO DE SECCION AL TOCAR LINK NAV
    const enlaces = document.querySelectorAll('.smooth');

    enlaces.forEach(enlace => {
        enlace.addEventListener('click', (e) => {
            e.preventDefault();

            const href = e.target.attributes.href.value;

            const seccion = document.querySelector(href);

            seccion.scrollIntoView({ behavior: 'smooth' });

        })
    })




    /**Enviar mail con form de contacto */
    const botonEnviar = document.querySelector('.btn-enviar');
    if (!(botonEnviar == null)) { //CONTROLO SI EXISTE UNA CLASE LLAMADA BOTON ENVIAR EN MI ARCHIVO HTML
        botonEnviar.addEventListener('click', (e) => {
            e.preventDefault();
            enviarMail(e);

        });
    }

    //ACTIVAR DARK-MODE
    const btnDark = document.querySelector('.btn-dark');
    btnDark.addEventListener('click', (e) => {
        activarDark(e);
    })


    recorrerProyectos();


    desplegarSobreMi();
    desplegarEstudios();


}

function desplegarSobreMi(){
    const textVerMas = document.querySelector('.vermas p');
    if(textVerMas){
        textVerMas.addEventListener('click',()=>{
           const textSobreMi = document.querySelector('.sobremi-desc')
            if(textSobreMi.classList.contains('desplegado')){
                textSobreMi.classList.remove('desplegado')
                textVerMas.textContent = "Ver mas";
                return;
            }
            textSobreMi.classList.add('desplegado')
            textVerMas.textContent = "Ver menos";


            return;
        })
    }
}

function desplegarEstudios() {
    const verMasButtons = document.querySelectorAll('.vermas p');
    
    verMasButtons.forEach(button => {
        button.addEventListener('click', () => {
            const eventItem = button.closest('.event');
            const textStudy = eventItem.querySelector('.event-text');
            if (textStudy.classList.contains('desplegado')) {
                textStudy.classList.remove('desplegado');
                button.textContent = "Ver mas";
            } else {
                textStudy.classList.add('desplegado');
                button.textContent = "Ver menos";
            }
        });
    });
}


function recorrerProyectos() {
    const containers = document.querySelectorAll('.proyecto');
    if (containers != null) {

        containers.forEach(container => {

            desplegarDescripcion(container);

        })

    }
}


function desplegarDescripcion(containerDescripcion) {

    const textoDescripcion = containerDescripcion.querySelector('.texto-proyecto')
    const btnDescripcion = containerDescripcion.querySelector('.container-descripcionbtn button');

    
  if(btnDescripcion){
    btnDescripcion.addEventListener('click', () => {

        if (textoDescripcion.style.height == "auto") {
            textoDescripcion.style.height = "100px";
            btnDescripcion.textContent = 'Ver Mas';

        } else {


            textoDescripcion.style.height = "auto";

            btnDescripcion.textContent = 'Ver Menos';
        }
    })
  }


}

function activarDark(e) {
    const body = document.querySelector('body');

    if (body.className == 'dark-mode') {
        body.classList.remove('dark-mode');
    }
    else {
        body.classList.add('dark-mode');
    }

}

function enviarMail(e) {
    e.preventDefault();
    const entidad = document.querySelector("#entidad"); //selecciono EL SELECT DE MI HTML, QUE TIENE LA ENTIDAD, YA SEA OPERSONA O EMPRESA
    const selected = entidad.options[entidad.selectedIndex].text;
    //SELECCIONO LAS OPCIONES DE ENTIDAD, QUE PUEDEN SER 1(PERSONA) O 2(EMPRESA) Y DEPENDIENDO DE SI ES 1 O 2, AGARRO EL TEXTO CON EL .TEXT, PARA QUE ME ARROJE PERSONA O EMPRESA

    const email = document.querySelector("#email").value;
    const nombre = document.querySelector("#nombre").value;
    const msg = document.querySelector("#mensaje").value;

    //NECESITO REDIRECCIONARME A ALGUNA PLATAFORMA PARA ENVIAR MAIL, POR LO QUE PONEMOS
    //WINDOW.LOCATION.HREF PARA ESPECIFICAR UN MAIL, UN TITULO Y UN CUERPO
    //PARA EL BODY, VAMOS A TENER QUE USAR UN URL ENCODER, EN EL CUAL LE VAMOS A TENER QUE PONER NOMBRE: ALGO
    //EMAIL:ALGO
    //MENSAJE:ALGO
    //PERSONA:ALGO: LE DAMOS A ENCODE Y NOS VA A GENERAR UNA URL RANDOM. COMO SE PUEDE VER, TENEMOS QUE COLOCAR LAS CONSTANTES AL LADO DE CADA UNO DE LOS ATRIBUTOS DE LA LISTA, ES DECIR, NOMBRE,EMAIL, MSG ETC..
    //EJ:
    //`ESTE ES MI MENSAJE CON MI ${CONSTANTE}`
    window.location.href = `mailto:hernandezgonzalo5845@gmail.com?subject=envioDesdeFormulario&body=Nombre%3A%20${nombre}%0AEmail%3A%20${email}%0AMensaje%3A%20${msg}%0AEntidad%3A%20${selected}`;

}


