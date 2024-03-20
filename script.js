var menuHamburger = document.querySelector(".menu-hamburger")
var navLinks = document.querySelector(".nav-links")

menuHamburger.addEventListener('click', () => {
        navLinks.classList.toggle('mobile-menu')
})

// menuHamburger.querySelectorAll('a').forEach(link => {
//   link.addEventListener('click', function() {
//     // Supprimer la classe "active" du menu
//     menuHamburger.classList.remove('mobile-menu');
//   });
// });

