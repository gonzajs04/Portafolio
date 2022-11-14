
document.addEventListener('DOMContentLoaded',()=>{
    iniciarApp();
})


function iniciarApp(){
   
    const botonMenu = document.querySelector('.toggle');
    const navegacion = document.querySelector('.navegacion');

    //MAL, PASAR A FUNCION A PARTE LLAMADA ABRIR
    botonMenu.addEventListener('click',()=>{
       
        navegacion.classList.add('visible');
        botonMenu.classList.add('novisible');
    });
 //MAL, HACER EN FUNCION APARTE LALMADA CERRAR
    const botonCerrar = document.querySelector('.close');
    botonCerrar.addEventListener('click',()=>{
        navegacion.classList.remove('visible');
        botonMenu.classList.remove('novisible');
    })

    const enlaces = document.querySelectorAll('.smooth');

    enlaces.forEach(enlace =>{
        enlace.addEventListener('click',(e)=>{
            e.preventDefault();
            
            const href = e.target.attributes.href.value;
   
            const seccion = document.querySelector(href);
 
            seccion.scrollIntoView({behavior: 'smooth'});
           
        })
    })
        
    
   
}


