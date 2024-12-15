<?php
include 'db.php';

$query = "SELECT p.*, c.nombre as categoria 
          FROM productos p 
          JOIN categorias c ON p.categoria_id = c.id
          WHERE p.stock > 0
          ORDER BY p.es_destacado DESC, p.fecha_agregado DESC";

$result = pg_query($dbconn, $query);

if (!$result) {
    die("Error en la consulta SQL: " . pg_last_error($dbconn));
}

$productos = [];
while ($row = pg_fetch_assoc($result)) {
    $productos[] = $row;
}

echo json_encode($productos);
pg_close($dbconn);
?>
