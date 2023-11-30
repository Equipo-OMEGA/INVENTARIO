<?php
	// Obtiene el valor del módulo de búsqueda de datos desde el formulario y lo limpia
	$modulo_buscador = limpiar_cadena($_POST['modulo_buscador']);

	// Definición de los módulos disponibles
	$modulos = ["usuario", "categoria", "producto"];

	// Comprueba si el módulo de búsqueda especificado está en la lista de módulos
	if (in_array($modulo_buscador, $modulos)) {
		// Define un arreglo que mapea los nombres de los módulos a las URL correspondientes
		$modulos_url = [
			"usuario" => "user_search",
			"categoria" => "category_search",
			"producto" => "product_search"
		];

		// Obtiene la URL asociada al módulo de búsqueda
		$modulos_url = $modulos_url[$modulo_buscador];

		// Crea una variable con el nombre del módulo de búsqueda
		$modulo_buscador = "busqueda_" . $modulo_buscador;

		# Iniciar búsqueda #
		if (isset($_POST['txt_buscador'])) {
			$txt = limpiar_cadena($_POST['txt_buscador']);

			if ($txt == "") {
				echo '
		            <div class="notification is-danger is-light">
		                <strong>¡Ocurrió un error inesperado!</strong><br>
		                Introduce el término de búsqueda
		            </div>
		        ';
			} else {
				// Verifica si el término de búsqueda cumple con un formato específico
				if (verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}", $txt)) {
					echo '
			            <div class="notification is-danger is-light">
			                <strong>¡Ocurrió un error inesperado!</strong><br>
			                El término de búsqueda no coincide con el formato solicitado
			            </div>
			        ';
				} else {
					// Almacena el término de búsqueda en la sesión y redirige a la URL de búsqueda
					$_SESSION[$modulo_buscador] = $txt;
					header("Location: index.php?vista=$modulos_url", true, 303);
					exit();
				}
			}
		}

		# Eliminar búsqueda #
		if (isset($_POST['eliminar_buscador'])) {
			// Elimina el término de búsqueda de la sesión y redirige a la URL de búsqueda
			unset($_SESSION[$modulo_buscador]);
			header("Location: index.php?vista=$modulos_url", true, 303);
			exit();
	}
} else {
	echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrió un error inesperado!</strong><br>
            No podemos procesar la petición
        </div>
    ';
}
