<?php
    session_start();
    // Conexión a la base de datos
    $servidor = "localhost";
    $usuario_db = "root";
    $contrasena_db = "";
    $nombre_db = "velox"; 

    $conexion = new mysqli($servidor, $usuario_db, $contrasena_db, $nombre_db);

    if ($conexion->connect_error) {
        // Error grave de conexión, termina la ejecución
        die ("Error de conexión con la base de datos.");
        die("Código de error: " . $conexion->connect_error);
        header("Location: index.php?accion=registro"); // Redirige a la pestaña de registro
        exit();
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir y sanitizar datos
            $name = $_POST['username'];
            $email = $_POST['email'];
            $cod_num = $_POST['num'];
            $num = $_POST['phone'];
            $contra = $_POST['password'];

        // Validar el formato del email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: Registro.html?error=formato_email_invalido");
            exit();
        }

        // Validar la longitud de la contraseña
        if (strlen($contra) < 8) {
            die("La contraseña debe tener al menos 8 caracteres.");
            die("error");
            header("Location: registro.php");
            exit();
        }

        //Validar que el email no exista ya en la base de datos
        $consulta_email = $conexion->prepare("SELECT * FROM registro WHERE correo = ?");
        $consulta_email->bind_param("s", $email);
        $consulta_email->execute();
        $resultado_email = $consulta_email->get_result();
        if ($resultado_email->num_rows > 0) {
            echo "El correo electrónico ya está registrado.";
            echo "error";   
            header("Location: Registro.html?error=email_existente"); // Redirige a la pestaña de registro
            exit();
        }
        //Encriptar la contraseña
        $encrit = md5($contra);


        // Insertar datos en la base de datos
        $insertar = $conexion->prepare("INSERT INTO registro (usuario, correo, cod_celular, celular, contraseña) VALUES ('$name', '$email', '$cod_num', '$num', '$encrit')");  

            if ($insertar->execute()) {
                // Registro exitoso
                $_SESSION['alerta'] = "¡Cuenta creada con éxito! Ya puedes iniciar sesión.";
                $_SESSION['tipo_alerta'] = 'exito';
                header("Location: IniciarSession.html"); 
                exit();
            } else {
                // Error en el registro
                // ERROR: Manejar duplicados (por si el email ya existe)
                if ($conexion->errno == 1062) { // 1062 es el código de error para entrada duplicada en clave UNIQUE
                    die("El correo electrónico ya está registrado.");
                    die("error");   
                    header("Location: IniciarSession.html"); // Redirige a la pestaña de LOGIN
                    exit;
                } else {
                    // Otros errores
                    die("Error al registrar la cuenta. Por favor, inténtalo de nuevo.");
                    die("error");
                    header("Location: Registro.html");
                    exit;
                }
            }
        $insertar->close();
    }   
    $conexion->close();
?>