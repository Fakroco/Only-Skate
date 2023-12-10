
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlySkate</title>
    <style>
        

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #FFA833;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        header h1 {
            text-align: center;
        }

    
    .btn {
      font-family: 'OpenSans';
      font-style: oblique;
      background-color: transparent;
      color: #ffffff;
      padding: 30px 30px;
      border: rgb(255, 149, 0);
      border-radius: 7px;
      cursor: pointer;
      font-size: 55px;
      margin: auto 20px;
  }

        main {
            padding: 1em;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto; 
            background-color: #fff;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin-bottom: 8px;
            text-align: left;

        
        }

        form input {
            width: 100%; 
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        form button {
            width: 100%;
            padding: 10px;
            background-color: #FFA833;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        footer {
            background-color: #FFA833;
            color: #fff;
            padding: 1em;
            text-align: center;
        }
    </style>
</head>
<body>

    <header>
        <a class="btn" href="index.html" style="text-decoration: none;">OnlySkate</a>
    </header>

    <main>
        <form method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="name" name="name" pattern="[A-Za-z0-9_-]" required>
        
            <label for="correo">Correo electrónico:</label>
            <input type="email" id="email" name="email" pattern="[A-Za-z0-9_-]" required>
        
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="password" name="password" pattern="[A-Za-z0-9_-]" required>
        
            <input type="submit" name="register" value="Enviar">
            
        </form>
        <?php
        include("registrobd.php");
        ?>
    </main>

    <footer>
        <p>&copy; 2023 OnlySkate<te</p>
    </footer>

</body>
    
<script>
</script>
</html>
