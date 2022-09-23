<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,700;1,300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4e83cbce0e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Login</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Iniciar Sesion</h1>
        <hr class=border>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" class="password_btn" placeholder="Contraseña">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>

            <?php if(!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif; ?>
                
        </form>
        
        <p class="texto-registrate">
                    ¿No tienes cuenta?
                    <a href="registro.php">Registrate</a>
        </p>
    </div>
</body>
</html>