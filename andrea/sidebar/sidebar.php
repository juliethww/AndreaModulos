<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/sidebar.css">
    <title>Sidebar</title>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
                <a href="../andrea/tabla_usuarios.php" class="nav_link"> 
					<i class='bx bx-user nav_icon'></i> 
						<span class="nav_name"> REGISTROS DE USUARIOS</span> </a>

                <a href="../andrea/tabla_tipo_usu.php" class="nav_link"> 
					<i class='bx bx-user nav_icon'></i> 
						<span class="nav_name">TIPOS DE USUARIOS</span> </a>

                <a href="../andrea/tabla_permisos.php" class="nav_link"> 
					<i class='bx bx-user nav_icon'></i> 
						<span class="nav_name">PERMISOS</span> </a>

                <a href="../andrea/tabla_prestamos.php" class="nav_link"> 
					<i class='bx bx-user nav_icon'></i> 
						<span class="nav_name">SOLICITUDES DE PRESTAMO</span> </a>


    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">A.K.A </span> </a>
                <div class="nav_list"> <a href="../andrea/admin.php" class="nav_link active"> 
					<i class='bx bx-grid-alt nav_icon'></i> 
                    <span class="nav_name">Inicio</span></a>

                    <a class="nav_link">
                    <i class='bx bx-user nav_icon'></i> 
						<span class="nav_name">-Formularios-</span> </a>


					<a href="../andrea/usuario.php" class="nav_link"> 
						<i class='bx bx-user nav_icon'></i> 
						<span class="nav_name">Agregar Usuarios</span> </a>


						<a href="../andrea/tipos_usuario.php" class="nav_link"> 
                            <i class='bx bx-message-square-detail nav_icon'></i> 
							<span class="nav_name">Agregar Tipos Usuario</span> </a> 
							
                            
                            <a href="../andrea/tipo_permiso.php" class="nav_link"> 
								<i class='bx bx-bookmark nav_icon'></i> 
								<span class="nav_name">Permisos</span> </a> 
								
                                
                                <a href="../andrea/solic_prestamo.php" class="nav_link"> 
									<i class='bx bx-folder nav_icon'></i> 
									<span class="nav_name">Solicitud de Prestamos</span> </a> 
									</div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Cerrar sesion</span> </a>
        </nav>
    </div>
</html>