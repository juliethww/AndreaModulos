<?php
session_start();
require_once("../conexion/conexion.php");
$db = new Database();
$con = $db->conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tablas.css">
    <title>Tabla Prestamos</title>
</head>
<body>
    <h2>Solicitud Prestamo</h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>ID Préstamo</th>
                    <th>ID Usuario</th>
                    <th>Monto Solicitado</th>
                    <th>Estado</th>
                    <th>Valor Cuotas</th>
                    <th>Cantidad Cuotas</th>
                    <th>
                <a href="admin.php">REGRESAR</a>
                </th>
                </tr>
            </thead>
            <tbody>

            <?php
            $sql = "SELECT prestamo.id_prestamo, prestamo.id_usuario, prestamo.monto_solicitado, estado.estado, prestamo.valor_cuotas, prestamo.cant_cuotas FROM solic_prestamo prestamo
                    JOIN usuario ON prestamo.id_usuario = usuario.id_usuario 
                    JOIN estado ON prestamo.id_estado = estado.id_estado";

            $result = $con->query($sql);

            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row['id_prestamo'] . "</td>";
                    echo "<td>" . $row['id_usuario'] . "</td>";
                    echo "<td>" . $row['monto_solicitado'] . "</td>";
                    echo "<td>" . $row['estado'] . "</td>";  
                    echo "<td>" . $row['valor_cuotas'] . "</td>";
                    echo "<td>" . $row['cant_cuotas'] . "</td>";
                }
            } 
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
