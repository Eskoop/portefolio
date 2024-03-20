var menuHamburger = document.querySelector(".menu-hamburger")
var navLinks = document.querySelector(".nav-links")

menuHamburger.addEventListener('click', () => {
        navLinks.classList.toggle('mobile-menu')
                ;

})

navLinks.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', function () {
                // Supprimer la classe "mobile-menu" au click
                navLinks.classList.remove('mobile-menu')
        });
});

document.addEventListener("DOMContentLoaded", function () {
        var menuButton = document.querySelector('.menu-hamburger');
        var body = document.querySelector('body');

        menuButton.addEventListener('click', function () {
                body.classList.toggle('menu-open');
        });
        body.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', function() {
                  // Supprimer la classe "mobile-menu" au click
                  body.classList.remove('menu-open')
                });
              });
});