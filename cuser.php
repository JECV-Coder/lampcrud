<?php include("dbc.php") ?>

<?php include("includes/header.php") ?>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<form action="suser.php" method="POST">
				<div class="badge text-bg-info">Agregar Usuario</div>
				<br><br>
				<div class="form-group">
					<input type="text" name="nombre" class="form-control" placeholder="Nombre">
				</div>
				<br>
				<div class="form-group">
					<input type="text" name="puesto" class="form-control" placeholder="Puesto">
				</div>
				<br>
				<div class="form-group">
					<input type="text" name="usuario" class="form-control" placeholder="Usuario">
				</div>
				<br>
				<div class="form-group">
					<input type="password" name="contrasena" class="form-control" placeholder="Contraseña">
				</div>
				<br>
				<input type="submit" class="btn btn-success btn-block" name="guardar_usuario" value="Enviar">
			</form>
		</div>
	</div>
</div>

<?php include("includes/footer.php") ?>