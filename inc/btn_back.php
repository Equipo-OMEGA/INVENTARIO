<!-- Este elemento <p> contiene un enlace de regreso -->
<p class="has-text-right pt-4 pb-4">
	<a href="#" class="button is-link is-rounded btn-back">← Regresar atrás</a>
</p>

<!-- Este script de JavaScript maneja el evento de clic en el enlace de regreso -->
<script type="text/javascript">
    // Selecciona el elemento con la clase 'btn-back' y lo almacena en la variable 'btn_back'
    let btn_back = document.querySelector(".btn-back");

    // Agrega un event listener para el evento de clic en 'btn_back'
    btn_back.addEventListener('click', function(e){
        e.preventDefault(); // Previene el comportamiento predeterminado del enlace
        window.history.back(); // Navega hacia atrás en el historial del navegador
    });
</script>

