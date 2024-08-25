window.addEventListener('scroll', function() {
    var contacto = document.querySelector('.contacto');
    var navbar = document.querySelector('.navbar-container');
    var contactoHeight = contacto.offsetHeight;

    if (window.scrollY > contactoHeight) {
        navbar.style.top = '0';
    } else {
        navbar.style.top = contactoHeight + 'px'; 
    }
});