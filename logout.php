<?php
if (isset($_SESSION["nombre"])) {
    session_destroy();
    unset($_SESSION["nombre"]);
}
?>