<?php
    session_start();
    require_once("../conexion/conexion.php");
    $db = new Database();
    $con =$db->conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sidebar.css">
    <title>Document</title>
</head>
<body>
<?php include("sidebar/sidebar.php") ?>
</body>
</html>
