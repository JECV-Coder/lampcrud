<?php 
include("dbc.php");

if (isset($_POST['guardar_usuario'])) {
    $nombre = $_POST['nombre'];
    $puesto = $_POST['puesto'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    $query="INSERT INTO usuario(nombre, puesto, usuario, contrasena) VALUES ('$nombre', '$puesto', '$usuario', '$contrasena')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Error Query");
    }

    header("Location: list.php");
}
?>