document.addEventListener('DOMContentLoaded', function(){
    eventListeners();
    darkmode();
});

function darkmode(){
    const btnDarkMode = document.querySelector(".dark-mode-btn");

    btnDarkMode.addEventListener('click', activarDarkMode);
}

function activarDarkMode(){
    document.body.classList.toggle('dark-mode');
}

function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive)
};

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion-header');

    navegacion.classList.toggle('mostrar');
    // if(navegacion.classList.contains('mostrar')){
    //     navegacion.classList.remove('mostrar');
    // }else {
    //     navegacion.classList.add('mostrar');
    // }
}
