let menuVisible = false;
//Función que oculta o muestra el menu
function mostrarOcultarMenu(){
    if(menuVisible){
        document.getElementById("nav").classList ="";
        menuVisible = false;
    }else{
        document.getElementById("nav").classList ="responsive";
        menuVisible = true;
    }
}
function seleccionar(){
    //oculto el menu una vez que selecciono una opcion
    document.getElementById("nav").classList = "";
    menuVisible = false;
}
// boton whatsapp
document.addEventListener("DOMContentLoaded", function() {
    function showWhatsAppButton() {
        var whatsappButton = document.querySelector(".btn-wsp");
        whatsappButton.style.display = "block";
    }
    // Función para ocultar el botón de WhatsApp cuando se activa el menú responsive
    function hideWhatsAppButton() {
        var nav = document.getElementById("nav");
        var whatsappButton = document.querySelector(".btn-wsp");
        if (nav.classList.contains("responsive")) {
            whatsappButton.style.display = "none";
        } else {
            showWhatsAppButton();
        }
    }
    // Llama a la función al cargar la página
    hideWhatsAppButton();

    // Evento para escuchar cuando se hace clic en el botón del menú
    document.getElementById("icono-nav").addEventListener("click", function() {
        hideWhatsAppButton();
    });

    var navLinks = document.querySelectorAll("#nav a");
    navLinks.forEach(function(link) {
        link.addEventListener("click", showWhatsAppButton);
    });
});