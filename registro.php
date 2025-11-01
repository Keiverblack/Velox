<?php
    session_start();
    // Conexión a la base de datos
    $servidor = "localhost";
    $usuario_db = "root";
    $contrasena_db = "";
    $nombre_db = "velox"; 

    $conexion = new mysqli($servidor, $usuario_db, $contrasena_db, $nombre_db);

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }
    $usu      = $_POST['user'];
    $email    = $_POST['email'];
    $cod_cel  = $_POST['cod-cel'];
    $cel      = $_POST['cel'];
    $cont     = $_POST['password']; 
    
    if(empty($usu) || empty($email) || empty($cod_cel) || empty($cel) || empty($cont)) {
        echo '
            <script>
                alert("Todos los campos son obligatorios.");
                window.location = "registro.html";
            </script>
        ';
        exit();
    }

    $cont_encrip = (MD5($cont)); 

    // Verificar si el usuario o correo ya existen
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM registro WHERE usuario='$usu' OR correo='$email'");
    if (mysqli_num_rows($verificar_usuario) > 0) {
        echo '
            <script>
                alert("El nombre de usuario o correo ya están en uso, por favor elige otro.");
                window.location = "registro.html";
            </script>
        ';
        exit();
    }
    // Insertar nuevo usuario en la base de datos
    $insertar_usuario = mysqli_query("INSERT INTO registro (usuario, correo, cod_celular, celular, contraseña) 
                        VALUES ('$usu', '$email', '$cod_cel', '$cel', '$cont_encrip')");

    if (mysqli_query($conexion, $insertar_usuario)) {
        echo '
            <script>
                alert("Usuario registrado exitosamente.");
                window.location = "IniciarSession.html";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Error al registrar el usuario, por favor intenta de nuevo.");
                window.location = "registro.php";
            </script>
        ';
    }

mysqli_close($conexion);
?>