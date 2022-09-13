<?php
$enviado='';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="normalize.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Contacto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <script>
        // Con esta funcion se valida que el formulario no se envie si hay errores
        
        function validarFormulario(){
            console.log('Validando formulario');
            var nombre = document.getElementById('nombre').value;
            var correo = document.getElementById('correo').value;
            //var mensaje = document.getElementById('mensaje').value;
            var error = document.getElementById('error');
            var textoError = [];
            error.style.color = 'red';
            if(nombre === null || nombre === ''){
                textoError.push('Nombre no valido');
            }
            if(correo === null || correo === ''){
                textoError.push('Correo no valido');
            }
            if(mensaje === null || mensaje === ''){
                textoError.push('Mensaje no valido');
            }
            error.innerHTML = textoError.join(', ');
            return false;
        }
        
    </script>
</head>
<body>
    <div class= "warp">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" class="f_control" id = "nombre" name="nombre" placeholder="Nombre" value="">

            <input type="text" class="f_control" id = "correo" name="correo" placeholder="Correo" value="">

            <textarea name="mensaje" class="f_control" placeholder="Mensaje" id="'mensaje"></textarea>
            
            <?php if (!empty($errores)):?>
               
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif($enviado): ?>
                <div class="alert success">
                    <p>Enviado Correctamente</p>
                </div>
            <?php endif; ?>

            
            <input type="submit" name="submit" value="Enviar Datos" class="btn btn-primary">
            </div>
            
        </form>
    </div>
</body>
</html>