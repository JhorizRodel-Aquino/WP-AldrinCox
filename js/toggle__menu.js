const headerNav = document.querySelector(".header__nav");
const toggleMenu = document.querySelector(".toggle__menu");
const backdrop = document.querySelector(".backdrop");

const mediaQuery = window.matchMedia("(min-width: 1024px)");


toggleMenu.addEventListener("click", () => {
    headerNav.classList.toggle("open");
    toggleMenu.classList.toggle("open");
    backdrop.classList.toggle("open");
})

mediaQuery.addEventListener("change", () => { 
    if (mediaQuery.matches) { 
        headerNav.classList.remove("open");
        toggleMenu.classList.remove("open");
        backdrop.classList.remove("open");
    }
});
