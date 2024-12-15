<?php
$dbconn = pg_connect("host=db port=5432 dbname=SaludyBienestar user=martin password=1234");

if (!$dbconn) {
    die("Error en la conexión a la base de datos: " . pg_last_error());
}
?>
