// Selecciona todos los elementos con la clase "FormularioAjax" y los almacena en la variable formularios_ajax
const formularios_ajax = document.querySelectorAll(".FormularioAjax");

// Función para enviar formularios via AJAX
function enviar_formulario_ajax(e) {
    e.preventDefault(); // Previene el comportamiento predeterminado del formulario

    // Pregunta al usuario si realmente desea enviar el formulario
    let enviar = confirm("¿Quieres enviar el formulario?");

    if (enviar == true) {
        // Obtiene los datos del formulario actual
        let data = new FormData(this);
        let method = this.getAttribute("method");
        let action = this.getAttribute("action");

        // Crea un objeto Headers
        let encabezados = new Headers();

        // Configuración para la solicitud fetch
        let config = {
            method: method, // Método HTTP (GET, POST, etc.)
            headers: encabezados, // Encabezados de la solicitud
            mode: 'cors', // Modo CORS (Cross-Origin Resource Sharing)
            cache: 'no-cache', // Control de caché
            body: data // Datos del formulario
        };

        // Realiza una solicitud fetch a la URL especificada en "action" con la configuración definida en "config"
        fetch(action, config)
        .then(respuesta => respuesta.text()) // Convierte la respuesta a texto
        .then(respuesta => {
            // Obtiene un elemento con la clase "form-rest" y actualiza su contenido con la respuesta
            let contenedor = document.querySelector(".form-rest");
            contenedor.innerHTML = respuesta;
        });
    }
}

// Agrega un event listener de "submit" a cada formulario con la clase "FormularioAjax" para manejar el envío del formulario
formularios_ajax.forEach(formularios => {
    formularios.addEventListener("submit", enviar_formulario_ajax);
});
