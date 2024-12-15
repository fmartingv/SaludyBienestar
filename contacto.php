<?php
include 'db.php';
$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $mensaje_texto = trim($_POST['mensaje'] ?? '');
    
    if ($nombre && $email && $mensaje_texto) {
        try {
            $query = "INSERT INTO mensajes_contacto (nombre, email, mensaje, fecha_envio, procesado) 
                     VALUES ($1, $2, $3, CURRENT_TIMESTAMP, false)";
            $result = pg_query_params($dbconn, $query, array($nombre, $email, $mensaje_texto));
            
            if ($result) {
                $mensaje = '<div class="success">Mensaje enviado correctamente.</div>';
            } else {
                $mensaje = '<div class="error">Error: ' . pg_last_error($dbconn) . '</div>';
            }
        } catch (Exception $e) {
            $mensaje = '<div class="error">Error en la base de datos: ' . $e->getMessage() . '</div>';
        }
    } else {
        $mensaje = '<div class="error">Por favor completa todos los campos.</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Salud y Bienestar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <ul class="navbar-nav">
            <li><a href="index.html" class="nav-link">Inicio</a></li>
            <li><a href="productos.html" class="nav-link">Productos</a></li>
            <li><a href="trabajadores.html" class="nav-link">Nuestro Equipo</a></li>
            <li><a href="contacto.php" class="nav-link">Contacto</a></li>
            <li><a href="info.html" class="nav-link">Información</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="card">
            <h1>Contacto</h1>
            <?php echo $mensaje; ?>
            <form id="contactForm" method="POST" action="contacto.php">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" class="form-control" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn">Enviar Mensaje</button>
            </form>
        </div>
    </div>

    <footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <h3>Sobre Nosotros</h3>
            <p>Supermercado Salud y Bienestar. Llevando calidad gallega a tu hogar.</p>
        </div>
        <div class="footer-section">
            <h3>Enlaces Rápidos</h3>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="productos.html">Productos</a></li>
                <li><a href="trabajadores.html">Nuestro Equipo</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="info.html">Información</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Contáctanos</h3>
            <p>Email: contacto@saludybienestar.com</p>
            <p>Teléfono: +34 900 123 456</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2024 Supermercados Salud y Bienestar. Todos los derechos reservados.</p>
    </div>
</footer>

</body>
</html>
