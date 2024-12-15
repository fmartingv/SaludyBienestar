<?php
include 'db.php';

$query = "SELECT * FROM trabajadores ORDER BY cargo";
$result = pg_query($dbconn, $query);

$trabajadores = [];
while ($row = pg_fetch_assoc($result)) {
    $trabajadores[] = $row;
}

echo json_encode($trabajadores);
pg_close($dbconn);
?>