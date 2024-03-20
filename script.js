// var menuHamburger = document.querySelector(".menu-hamburger")
// var navLinks = document.querySelector(".nav-links")

// menuHamburger.addEventListener('click', () => {
//         navLinks.classList.toggle('mobile-menu')
//                 ;

// })

// navLinks.querySelectorAll('a').forEach(link => {
//         link.addEventListener('click', function () {
//                 // Supprimer la classe "mobile-menu" au click
//                 navLinks.classList.remove('mobile-menu')
//         });
// });

// document.addEventListener("DOMContentLoaded", function () {
//         var menuButton = document.querySelector('.menu-hamburger');
//         var body = document.querySelector('body');

//         menuButton.addEventListener('click', function () {
//                 body.classList.toggle('menu-open');
//         });
//         body.querySelectorAll('a').forEach(link => {
//                 link.addEventListener('click', function() {
//                   // Supprimer la classe "mobile-menu" au click
//                   body.classList.remove('menu-open')
//                 });
//               });
// });

document.addEventListener("DOMContentLoaded", function () {
        var menuHamburger = document.querySelector(".menu-hamburger");
        var navLinks = document.querySelector(".nav-links");
        var body = document.querySelector('body');
    
        // Gestionnaire d'événement pour le menu hamburger
        menuHamburger.addEventListener('click', function (event) {
            event.preventDefault();
            navLinks.classList.toggle('mobile-menu');
            
            // Si le menu est ouvert, désactiver le défilement
            if (navLinks.classList.contains('mobile-menu')) {
                body.style.overflow = 'hidden';
            } else {
                // Sinon, réactiver le défilement
                body.style.overflow = 'auto';
            }
        });
    
        // Gestionnaire d'événement pour fermer le menu lorsque le corps est cliqué sur mobile
        body.addEventListener('click', function (event) {
            if (navLinks.classList.contains('mobile-menu') && !event.target.closest('.menu-hamburger')) {
                navLinks.classList.remove('mobile-menu');
                body.style.overflow = 'auto'; // Réactiver le défilement
            }
        });
    
        // Gestionnaire d'événement pour empêcher le défilement lorsque le menu est ouvert sur mobile
        body.addEventListener('touchmove', function (event) {
            if (navLinks.classList.contains('mobile-menu')) {
                event.preventDefault();
            }
        });
    
        // Gestionnaire d'événement pour le menu hamburger lorsqu'il est touché sur mobile
        menuHamburger.addEventListener('touchstart', function (event) {
            event.preventDefault();
            navLinks.classList.toggle('mobile-menu');
            
            // Si le menu est ouvert, désactiver le défilement
            if (navLinks.classList.contains('mobile-menu')) {
                body.style.overflow = 'hidden';
            } else {
                // Sinon, réactiver le défilement
                body.style.overflow = 'auto';
            }
        });
    
        // Gestionnaire d'événement pour fermer le menu lorsque un lien est cliqué
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function (event) {
                navLinks.classList.remove('mobile-menu');
                body.style.overflow = 'auto'; // Réactiver le défilement
            });
        });
    });
    