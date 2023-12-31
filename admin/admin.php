<!DOCTYPE html>
<?php 
session_start();
include('../global/conexion.php');
include('helpers/session.php');
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../assets/logo/carta-a (4).png"/>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>Artxicans -Panel</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="./menu.php" class="brand">
			<i class='bx bxs-font-color'></i>
			<span class="text">Artxicans</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="./menu.php">
					<i class='bx bxs-home' ></i>
					<span class="text">Inicio</span>
				</a>
			</li>
			<li>
				<a href="./orders.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Pedidos</span>
				</a>
			</li>
			 <li>
				<a href="./products.php">
					<i class='bx bxs-package'></i>
					<span class="text">Productos</span>
				</a>
			</li> 
			<li>
				<a href="./sellers.php">
					<i class='bx bxs-user' ></i>
					<span class="text">Vendedores</span>
				</a>
			</li>
			<li>
				<a href="./reports.php">
					<i class='bx bxs-error' ></i>
					<span class="text">Reportes</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="./reg-vendedores.php">
					<i class='bx bxs-user-check' ></i>
					<span class="text">Nuevos vendedores</span>
				</a>
			</li>
			<li>
				<a href="./reg-productos.php">
					<i class='bx bxs-select-multiple' ></i>
					<span class="text">Nuevos productos</span>
				</a>
			</li>
			<li>
				<a href="../global/logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Salir</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="./admin.php"><i class='bx bxs-user-circle bx-md'></i></a>
		
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1></h1>
					<ul class="breadcrumb">
						<li>
							<a href="./menu.php">Menu</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a href="./menu.php">Inicio</a>
						</li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
							<a class="active" href="./admin.php">Administrador</a>
						</li>
					</ul>
				</div>
			    <a href="./pages/add-admin.php" class="btn-download">
                <i class='bx bx-user-plus bx-sm'></i>
					<span class="text">Agregar nuevo administrador</span>
				</a> 
			</div>


            <div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Lista de administradores</h3>
						
					</div>
					<table>
						<thead>
							<tr>
								<th>Administrador</th>
								<th>Correo</th>
								<th>Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="../assets/utilities/administrador.png">
									<p>Said castillo</p>
								</td>
								<td>said@gmail.com</td>
								<td><a href="./"><img src="../assets/utilities/cerrar.png"></a></td>
							</tr>
							
						</tbody>
					</table>
				</div>

		
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>
