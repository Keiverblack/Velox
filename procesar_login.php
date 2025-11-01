<?php
    session_start();
    // Conexión a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "velox");

        $email = $_POST['email'];
        $cont = $_POST['password'];

        //Parte del admin

        if ($email === 'admin@admin.com' || $cont === 'admin') {
            $_SESSION['usuario'] = 'Administrador';
            echo '
                <script>
                    alert("Inicio de sesión exitoso. ¡Bienvenido Administrador!");
                    window.location = "admin.php";
                </script>
            ';
            exit();
        }
    
        $consul = "SELECT * FROM registro WHERE correo='$email' AND contraseña=MD5('$cont')";
        $resultado = mysqli_query($conexion, $consul);
        $fila = mysqli_fetch_array($resultado);
        if ($fila) {
            $_SESSION['usuario'] = $fila['usuario'];
            echo '
                <script>
                    alert("Inicio de sesión exitoso. ¡Bienvenido ' . $fila['usuario'] . '!");
                    window.location = "bienvenida.html";
                </script>
            ';
        } else {
            echo '
                <script>
                    alert("Correo o contraseña incorrectos.");
                    window.location = "IniciarSession.html";
                </script>
            ';
        }
?>