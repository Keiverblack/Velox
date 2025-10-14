<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="encabezado">
            <h1>Velox</h1>
            <nav>
                <a href="index.html">Home</a>
                <a href="Ubicacion.html">Ubicación</a>
                <a href="Contacto.html">Contacto</a>
                
            </nav>
        </div>
    </header>

    <?php
        $conexion = mysqli_connect("localhost", "root", "", "velox");

        $usu = $_POST['username'];
        $cont = $_POST['password'];
        
        $consulta = "SELECT * FROM registro WHERE usuario='$usu'";
        $resultado = mysqli_query($conexion, $consulta);
        $fila = mysqli_fetch_assoc($resultado);
        if ($fila) {
            if (password_verify($cont, $fila['contraseña'])) {
                echo "<div class='login-mensaje success'>";
                echo "Inicio de sesión exitoso. ¡Bienvenido, " . $usu . "!";
                echo "</div>";
            } else {
                echo "<div class='login-mensaje error'>";
                echo "Contraseña incorrecta. Inténtalo de nuevo.";
                echo "</div>";
            }
        } else {
            echo "<div class='login-mensaje error'>";
            echo "El usuario no existe. Por favor, regístrate primero.";
            echo "</div>";
        }
    ?>
    <footer>
        <footer class="footer">
        <p>Derechos Reservados &copy; 2025</p>
        <p>Desarrollado por Keiver Blanco</p>
    </footer>
    <script src="validaciones.js"></script>
</body>
</html>