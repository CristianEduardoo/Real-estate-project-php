document.addEventListener("DOMContentLoaded", function () {
  // Llamamos a la función que agrega los event listeners
  eventListeners();
  // Agregamos el manejo del modo oscuro
  darkMode();
  // Aplicamos el modo oscuro si está activo en el almacenamiento local
  applyDarkModeFromLocalStorage();
  
});

function darkMode() {
  
  const btnDarkMode = document.querySelector(".dark-mode-btn");

  btnDarkMode.addEventListener("click", function () {
    // Toggle de la clase 'dark-mode' en el body
    document.body.classList.toggle("dark-mode");
    // if(navegacion.classList.contains('mostrar')){
    //     navegacion.classList.remove('mostrar');
    // }else {
    //     navegacion.classList.add('mostrar');
    // }
    // Guardamos el estado del modo oscuro en el almacenamiento local
    const isDarkModeEnabled = document.body.classList.contains("dark-mode");
    localStorage.setItem("darkModeEnabled", isDarkModeEnabled);
  });
}

function eventListeners() {
  // Seleccionamos el botón de menú móvil
  const mobileMenu = document.querySelector(".mobile-menu");

  mobileMenu.addEventListener("click", function () {

    const navegacion = document.querySelector(".navegacion-header");
    // Toggle de la clase 'mostrar' en la navegación
    navegacion.classList.toggle("mostrar");
  });
}

function applyDarkModeFromLocalStorage() {
  // Verificamos si el modo oscuro está activado en el almacenamiento local
  const isDarkModeEnabled = localStorage.getItem("darkModeEnabled") === "true";
  // Si el modo oscuro está activado, aplicamos la clase 'dark-mode' al body
  if (isDarkModeEnabled) {
    document.body.classList.add("dark-mode");
  }
}
