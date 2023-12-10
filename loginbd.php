<?php
session_start();

if (!empty($_POST["btningresar"])){
    if (empty($_POST["nombre"]) and empty($_POST["contrasena"])) {
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    } else {
        $nombre=$_POST["nombre"];
        $contrasena=$_POST["contrasena"];
        $sql=$conn ->query("select * from miembros where nombre='$nombre' and contrasena='$contrasena'");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombre"]=$datos->nombre;
            header("location:index.php");
        } else {
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }
        
    }
    
}
  

?>