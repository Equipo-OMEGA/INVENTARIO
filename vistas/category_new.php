<center><div class="container is-fluid mb-6">
	<div class="container pb-6"></div>
	<h1 class="title">Categorías</h1>
	<h2 class="subtitle">Nueva categoría</h2>
</div></center>

<div class="container pb-6 pt-6">

	<div class="form-rest mb-6 mt-6"></div>
	
	<div class="notification is-info">
		<form action="./php/categoria_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" >
			<div class="columns">
				<div class="column">
					<div class="control">
						<label>Nombre</label>
						<input class="input" type="text" name="categoria_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,50}" maxlength="50" required >
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Ubicación en el almacén</label>
						<input class="input" type="text" name="categoria_ubicacion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{5,150}" maxlength="150" >
					</div>
				</div>
			</div>
			<p class="has-text-centered">
				<button type="submit" class="button is-primary is-rounded">Guardar</button>
			</p>
		</form>
	</div>
</div>