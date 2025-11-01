<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="admin_styles.css"> 
    </head>
    <style>
        /* 1. Reset Básico y Tipografía */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #eef1f5; /* Fondo claro y suave */
    color: #333;
}

/* 2. Estilo del Encabezado (Header) */
.header {
    background-color: #34495e; /* Azul oscuro/gris */
    color: white;
    padding: 15px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.logo {
    font-size: 1.4em;
    font-weight: bold;
}

.nav a {
    color: white;
    text-decoration: none;
    margin-left: 20px;
    padding: 5px 10px;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.nav a:hover {
    background-color: #49637c;
}

/* 3. Contenido Principal */
.main-content {
    padding: 30px;
    max-width: 1200px;
    margin: 20px auto;
}

/* Estilo general para las tarjetas (Cards) */
.card {
    background-color: white;
    padding: 25px;
    margin-bottom: 25px;
    border-radius: 8px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
}

/* Estilo de la Tarjeta de Bienvenida */
.bienvenida {
    text-align: center;
    background: linear-gradient(to right, #ffffff, #f7f9fc);
    border-left: 5px solid #007bff; /* Línea de acento azul */
}

.bienvenida h2 {
    color: #007bff;
    margin-top: 5px;
}

.icono-grande {
    font-size: 3em;
    display: block;
    margin-bottom: 10px;
}

.ultima-conexion {
    font-size: 0.8em;
    color: #888;
    margin-top: 15px;
}

/* 4. Módulo de Resumen (Grid) */
.grid-resumen {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
}

.resumen-item {
    text-align: center;
}

.icono-resumen {
    font-size: 2em;
    color: #2ecc71; /* Color verde para el ícono */
    display: block;
    margin-bottom: 10px;
}

.resumen-item h3 {
    margin: 5px 0;
    color: #555;
}

.dato-grande {
    font-size: 2.5em;
    font-weight: bold;
    color: #34495e;
    margin: 0;
}

.link-accion {
    display: block;
    margin-top: 15px;
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s;
}

.link-accion:hover {
    color: #0056b3;
}

/* 5. Accesos Rápidos */
.accesos-rapidos h3 {
    color: #555;
    margin-bottom: 20px;
}

.botones-rapidos {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.boton-rapido {
    display: inline-block;
    padding: 10px 20px;
    background-color: #f39c12; /* Color naranja */
    color: white;
    text-decoration: none;
    border-radius: 6px;
    font-weight: bold;
    transition: background-color 0.3s, transform 0.1s;
}

.boton-rapido:hover {
    background-color: #e67e22;
    transform: translateY(-1px);
}

/* 6. Pie de Página (Footer) */
.footer {
    text-align: center;
    padding: 15px;
    background-color: #ccc;
    color: #555;
    font-size: 0.9em;
    margin-top: 30px;
}

/* 7. Media Query para Móviles */
@media (max-width: 600px) {
    .header {
        flex-direction: column;
        text-align: center;
    }
    .nav {
        margin-top: 10px;
    }
    .nav a {
        margin: 0 10px;
    }
    .main-content {
        padding: 15px;
    }
}
    </style>
<body>

    <header class="header">
        <div class="logo">Panel de Control</div>
        <nav class="nav">
            <a href="#" class="nav-link">Configuración</a>
            <a href="#" class="nav-link">Cerrar Sesión</a>
        </nav>
    </header>

    <main class="main-content">
        <div class="card bienvenida">
            <span class="icono-grande">&#128075;</span> <h2>Bienvenido de vuelta, Administrador(a)</h2>
            <p>Aquí puedes gestionar toda la actividad de tu plataforma.</p>
            <p class="ultima-conexion">Última conexión: 31 de Octubre, 11:30 PM</p>
        </div>

        <div class="grid-resumen">
            <div class="card resumen-item">
                <span class="icono-resumen">&#128100;</span> <h3>Usuarios Nuevos</h3>
                <p class="dato-grande">45</p>
                <a href="#" class="link-accion">Ver detalles &rarr;</a>
            </div>

            <div class="card resumen-item">
                <span class="icono-resumen">&#128221;</span> <h3>Pendientes por Revisar</h3>
                <p class="dato-grande">12</p>
                <a href="#" class="link-accion">Ir a tareas &rarr;</a>
            </div>

            <div class="card resumen-item">
                <span class="icono-resumen">&#128200;</span> <h3>Rendimiento</h3>
                <p class="dato-grande">+15%</p>
                <a href="#" class="link-accion">Ver estadísticas &rarr;</a>
            </div>
        </div>

        <div class="card accesos-rapidos">
            <h3>&#9881; Accesos Rápidos</h3> <div class="botones-rapidos">
                <a href="#" class="boton-rapido">Gestionar Productos/Servicios</a>
                <a href="#" class="boton-rapido">Generar Reporte Mensual</a>
                <a href="#" class="boton-rapido">Enviar Notificaciones</a>
            </div>
        </div>
    </main>

    <footer class="footer">
        &copy; 2024 Panel de Control. Todos los derechos reservados.
    </footer>

</body>
</html>