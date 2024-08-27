// Inicializa AOS
AOS.init({
    duration: 1000,  // Duración de la animación en milisegundos
    offset: 100,     // Desplazamiento en píxeles para empezar la animación
    once: false       // Si la animación debería ocurrir solo una vez
});

const link = document.getElementById('navigate');
const body = document.body;
if(link){
    link.addEventListener('click', function(event) {
        event.preventDefault();
    
        body.classList.add('slide-out');
    
        setTimeout(function() {
            window.location.href = link.href;
        }, 700);
    });
    
    window.addEventListener('load', function() {
        body.classList.remove('slide-out');
    });
}


