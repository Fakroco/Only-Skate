<?php
session_start();  

if (isset($_POST["submit"])) {
    $_SESSION["nombre"] = $_POST["nombre"];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fotos.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <title>OnlySkate</title>
    <style>
    </style>
</head>
<title>Maps</title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
</div>

 </div>
    <header>
        <h1 button id="animated-title">OnlySkate</h1>
          </body>
          <nav class="navbar navbar-dark bg-dark navbar-expand-md navbar-light bg-light fixed-top">
            <div class="text-white bg-success p-2">
            <?php
            if (isset($_SESSION["nombre"])) {
              echo "Bienvenido " . $_SESSION["nombre"];
          } 
            ?>
          <div class="container">
            <a href="foro.html" style="--color: #1e9bff"><span>----Foro----</span><i></i></a>
            <a href="Galeria.html" style="--color: #ff1867"><span>Galeria</span><i></i></a>
            <a href="mapai.html" style="--color: #6eff3e"><span>Ubicación</span><i></i></a>
            

    </header>
    <div class="content">
    <div class="loader"></div>
    <div class="datetime">
    <div class="time"></div>
    <div class="date"></div>
    <div class="fotoo">
    <?php if (!isset($_SESSION["nombre"])): ?>
    <div class="loggedin-only">
    <button type="button" class="btn btn-primary" id="btnLogin">Iniciar sesión</button>
    <button type="button" class="btn btn-primary" id="btnRegister">Registrarse</button>
    </div>
    <?php endif; ?>
    <?php if (isset($_SESSION["nombre"])): ?>
      <button id="btnLogout">Cerrar sesión</button>
<?php endif; ?>
    </header>
      

      </div>
    </div>
    <script src="script.js">
    </script>
    <img src="Skate.jpg" class="imagenp" width="800" >

    <style>
    #registro-btn,
    #login-btn {
      position: absolute;
      top: 10px;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      font-size: 1rem;
      transition: background 0.3s;
      color: #FFA833;
    }

    #registro-btn {
      left: 10px;
      background: #ff6f6f;
    }

    #login-btn {
      right: 10px;
      background: #34a7f9;
    }
    </style>
    <script>
    const logoutButton = document.getElementById('btnLogout');

    if (logoutButton) {
      logoutButton.addEventListener('click', () => {
        fetch('logout.php', {
          method: 'POST',
          credentials: 'same-origin'
        }).then(() => {
          window.location.reload();
        });
      });
    }
    </script>
    <script src="script.js"></script>

    </body>
    </html>
