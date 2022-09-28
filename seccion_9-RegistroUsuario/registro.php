<?php session_start(); // Iniciamos la session

    if (isset($_SESSION['usuario'])) { // Comprobamos si existe la session
        header('Location: contenido.php'); // Si existe la session lo enviamos al contenido
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario= htmlspecialchars(filter_var(strtolower($_POST['usuario'])));
        $password= $_POST['password'];
        $password2= $_POST['password2'];
        $errores= '';

        if(empty($usuario) or empty($password) or empty($password2)){ // Comprobamos que los campos no esten vacios
            $errores .= '<li>Por favor rellena todos los datos correctamente</li>';
        } else {
            try {
                $conexion = new PDO('mysql:host=localhost;dbname=curso_login', 'root', '');// Conectamos a la base de datos
            } catch (PDOException $e) { // Si hay un error lo mostramos
                echo "Error: " . $e->getMessage(); 
            }

            $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1'); // Preparamos la consulta
            //En este caso le decimos que busque el usuario que se ha introducido en el formulario y que solo nos devuelva 1 resultado
            $statement->execute(array(':usuario' => $usuario)); // Ejecutamos la consulta y le pasamos el usuario que se ha introducido en el formulario
            $resultado = $statement->fetch(); // Guardamos el resultado de la consulta en una variable para poder comprobar si existe o no

            if ($resultado != false) { // Comprobamos si el usuario existe o no en la base de datos y si existe mostramos un error
                $errores .= '<li>El nombre de usuario ya existe</li>';
            }

            $password = hash('sha512', $password); // Encriptamos la contraseña con sha512 para que no se pueda ver en la base de datos
            $password2 = hash('sha512', $password2); // En este caso como es un proyecto de prueba no es necesaria tanta seguridad pero en un proyecto real si que es necesario investigar mas sobre esto ya que usar sha512 no es lo mas seguro


            if ($password != $password2) { // Comprobamos que las contraseñas sean iguales y si no lo son mostramos un error
                $errores .= '<li>Las contraseñas no son iguales</li>';
            }
        }
        if($errores=='') { // Si no hay errores insertamos los datos en la base de datos
            $statement = $conexion->prepare('INSERT INTO usuarios (id, usuario, pass) VALUES (null, :usuario, :pass)');
            $statement->execute(array(':usuario' => $usuario, ':pass' => $password));

            header('Location: login.php'); // Si todo ha ido bien lo enviamos a la pagina de login
        }
    }

require '../seccion_9-RegistroUsuario/vista/registro.view.php';
?>