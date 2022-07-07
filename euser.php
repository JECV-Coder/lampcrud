<?php
    include("dbc.php");

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query ="SELECT * FROM usuario WHERE id=$id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $puesto = $row['puesto'];
            $usuario = $row['usuario'];
            $contrasena = $row['contrasena'];
        }
    }
    if(isset($_POST['editar'])){
        $id=$_GET['id'];
        $nombre=$_POST['nombre'];
        $puesto = $_POST['puesto'];
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $query="UPDATE usuario SET nombre='$nombre',puesto='$puesto',usuario='$usuario',contrasena='$contrasena' WHERE id = $id";
        mysqli_query($conn, $query);
        header("Location: list.php");
    }
?>
<?php include("includes/header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <form action="euser.php?id=<?php echo $_GET['id']; ?>" method="POST">
                <div class="form-group">
                    <div class="container">Nombre <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Introduce el nuevo valor"></div>
                    <div class="container">Puesto <input type="text" name="puesto" value="<?php echo $puesto; ?>" class="form-control" placeholder="Introduce el nuevo valor"></div>
                    <div class="container">Usuario <input type="text" name="usuario" value="<?php echo $usuario; ?>" class="form-control" placeholder="Introduce el nuevo valor"></div>
                    <div class="container">Contraseña <input type="text" name="contrasena" value="<?php echo $contrasena; ?>" class="form-control" placeholder="Introduce el nuevo valor"></div>
                </div>
                <button type="submit" class="btn btn-success" name="editar">Editar</button>
            </form>
        </div>
    </div>    
</div>

<?php include("includes/footer.php"); ?>