<?php
include ("conexion.php");
// Verificar si se ha enviado el formulario
if (isset($_POST['register'])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['password']) >= 1
        ) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $password = md5($_POST['password']);
            $consulta = "INSERT INTO miembros(nombre ,correo ,contrasena)
                  VALUES('$name', '$email', '$password')";
            $resultado = mysqli_query($conn, $consulta);
            if ($resultado){
                ?>
                <h3 class="success">Tu registro se ha completado</h3>
                <?php
            } else {
                ?>
                <h3 class="error">ERROR</h3>
                <?php
            }

    }
}

