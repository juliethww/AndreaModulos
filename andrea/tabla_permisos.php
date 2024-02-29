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
    <title>Tabla de Permisos</title>
</head>
<body>
    <h2>Tabla Permisos</h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>ID Permiso</th>
                    <th>Tipo Permiso </th>
                    <th>
                <a href="admin.php">REGRESAR</a>
                </th>
                </tr>
            </thead>
            <tbody>
            <?php
                $query = $con->prepare("SELECT * FROM tipo_permiso");
                $query->execute();
                $resultados = $query->fetchAll(PDO::FETCH_ASSOC);

                foreach($resultados as $fila){
            ?>
            <tr>
                <td><?php echo $fila['id_tipo_permiso'] ?></td>
                <td><?php echo $fila['tipo_permiso'] ?></td>


            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
