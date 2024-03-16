var menuHamburger = document.querySelector(".menu-hamburger")
var navLinks = document.querySelector(".nav-links")

menuHamburger.addEventListener('click', () => {
        navLinks.classList.toggle('mobile-menu')
})