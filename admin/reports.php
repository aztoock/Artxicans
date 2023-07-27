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
	<link rel="stylesheet" href="estilos.css">

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
			<li >
				<a href="./menu.php">
					<i class='bx bxs-home' ></i>
					<span class="text">Inicio</span>
				</a>
			</li>
			<li >
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
			<li class="active">
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


<style>
	#content{
		width:100%;
	}
</style>
	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			
			
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
							<a class="active" href="./reports.php">Reportes</a>
						</li>
					</ul>
				</div>
			
			</div>

<div class="table-data">
	<div class="order wrapper">
		

 <div class="buttonWrapper">
  <button class="tab-button active"  data-id="list">Lista de Reportes</button>
  
  <button class="tab-button"  data-id="other-list">Reportes en Revisión</button>
</div> 


 <div class="contentWrapper"> 
	
 	 <table class="content active" id="list">
						<thead>
							<tr>
								<th>Tipo de reporte</th>
								<th>Información</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							$query = mysqli_query($conn,"SELECT * FROM reports WHERE estatus = 0");
							while($row = mysqli_fetch_array($query)){
						?>
					
							<tr>
								<td>
									<img src="../assets/utilities/reporte.png">
									<p><?php echo $row['type']?></p>
								</td>
								
								<td><a href="./pages/det-reports.php?report=<?php echo $row['id_report']?>"><span class="status completed">Ver info</span></a></td>
							</tr>
						<?php }?>
							
						</tbody>
					</table> 
<!-- Segunda tabla, tabla de reportes en revision. -->

	<table class="content" id="other-list">
	  	<thead>
			<tr>
				<th>Tipo de reporte</th>
				<th>Información</th>
			</tr>
		</thead>
			<tbody>
<?php 
				$query = mysqli_query($conn,"SELECT * FROM reports WHERE estatus = 2 OR estatus = 3");
				while($row = mysqli_fetch_array($query))
					{
?>
						<tr>
							<td>
								<img src="../assets/utilities/reporte.png">
								<p><?php echo $row['type']?></p>
							</td>
<?php
							if ($row['estatus'] != 3)
								{
?>
							<td><a>Sin cambios</span></a></td>
<?php 
								}
							else
								{
?>
							<td><a href="./pages/det-reports.php?report=<?php echo $row['id_report']?>"><span class="status completed">Ver info</span></a></td>
						</tr>
	
<?php 
								}
					}
?>
			</tbody>
	</table>
</div> 



</div><!-- Order -->
</div><!-- Tabledata -->

		
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<script src="script.js"></script>
</body>
</html>