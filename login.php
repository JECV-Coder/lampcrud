<?php 
    include("dbc.php");

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    session_start();
    $_SESSION['usuario']=$usuario;
    $query="SELECT * FROM usuario WHERE usuario='$usuario' AND contrasena='$contrasena'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_num_rows($result);
    if($row){
        header("Location: list.php");
    }else{
        ?>
        <?php
        include("index.php");
        ?>
        <div class="alert alert-warning" role="alert">Error en la autenticación</div>
        <?php
    }
    mysqli_free_result($result);
?>