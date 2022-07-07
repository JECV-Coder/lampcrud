<?php include("dbc.php") ?>

<?php include("includes/header.php") ?>

<div class="container">
    <div class="row">
    <div class="col-md-8">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Puesto</th>
						<th>Usuario</th>
						<th>Editar/Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$query="SELECT * FROM usuario";
						$result=mysqli_query($conn,$query);
						while ($row=mysqli_fetch_array($result)) { ?>
							<tr>
								<td><?php echo $row['nombre']?></td>
								<td><?php echo $row['puesto']?></td>
								<td><?php echo $row['usuario']?></td>
								<td>
									<a href="euser.php?id=<?php echo $row['id']?>">
										Editar 
									</a><br>
									<a href="duser.php?id=<?php echo $row['id']?>">
										Eliminar
									</a>
								</td>
							</tr>
						<?php } ?>
				</tbody>
			</table>
		</div>
    </div>
</div>

<?php include("includes/footer.php") ?>