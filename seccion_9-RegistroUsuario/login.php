<?php session_start(); // Iniciamos la session
    
    if (isset($_SESSION['usuario'])) { // Comprobamos si existe la session
        header('Location: contenido.php'); // Si existe la session lo enviamos al contenido
    }
$errores='';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario= htmlspecialchars(filter_var(strtolower($_POST['usuario'])));
        $password= $_POST['password'];
        $password= hash('sha512', $password); // Encriptamos la contraseña con sha512 para que no se pueda ver en la base de datos

            try {
                $conexion = new PDO('mysql:host=localhost;dbname=curso_login', 'root', '');// Conectamos a la base de datos
            } catch (PDOException $e) { // Si hay un error lo mostramos
                echo "Error: " . $e->getMessage(); 
            }
    
            $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND pass=:password'); // Preparamos la consulta
            //En este caso le decimos que busque el usuario y el password que se ha introducido en el formulario para asi poder comprobar si existe o no
            $statement->execute(array(':usuario' => $usuario, ':password'=> $password)); // Ejecuccion de consulta donde pasamos usuario y pssword que se han introducido en el formulario
            $resultado = $statement->fetch(); // Guardamos el resultado de la consulta en una variable para poder comprobar si existe o no
    
            if ($resultado != false) { // Comprobamos si el usuario existe o no en la base de datos y si existe mostramos un error
                $_SESSION['usuario']=$usuario; // Si existe el usuario creamos la session
                header('Location: contenido.php'); // Si existe el usuario lo enviamos a la pagina de contenido
            }else{
                $errores .= '<li>Datos incorrectos</li>'; // Si no existe el usuario mostramos un error
            }
        }

require 'vista/login.view.php';

?>