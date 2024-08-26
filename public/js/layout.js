window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    const scrollY = window.scrollY;

    if (scrollY > 100) { // Cambia 100 por el valor de desplazamiento deseado
        navbar.classList.add('fixed');
        navbar.classList.remove('absolute');
    } else if (scrollY > 0) {
        navbar.classList.add('absolute');
        navbar.classList.remove('fixed');
    } else {
        navbar.classList.remove('fixed', 'absolute');
    }
});

document.addEventListener('scroll', function() {
    const scrollToTopButton = document.querySelector('.scroll-to-top');
    if (window.scrollY > 200) {
        scrollToTopButton.classList.add('show');
    } else {
        scrollToTopButton.classList.remove('show');
    }
});
