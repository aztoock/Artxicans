<!DOCTYPE html>
<?php 
	include('../global/conexion.php');
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
			<li >
				<a href="./menu.php">
					<i class='bx bxs-home' ></i>
					<span class="text">Inicio</span>
				</a>
			</li>
			<li class="active">
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
							<a class="active" href="./orders.php">Pedidos</a>
						</li>
					</ul>
				</div>
			
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Lista de Pedidos</h3>
						
					</div>
					<table>
						<thead>
							<tr>
								<th>Usuario</th>
								<th>Información</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							$query = mysqli_query($conn,"SELECT * FROM ventas WHERE estatus = 'completo' ORDER BY id_venta DESC");
							while($data = mysqli_fetch_array($query)){
					
						?>

							<tr>
								<td align="center"><strong> <?php echo $data['fecha']?></strong></td>
							</tr>
							<tr>
								<td>
									<img src="../assets/utilities/bolsa.png">
									<p><?php echo $data['correo']?></p>
								</td>
								
								<td><a href="./pages/det-order.php?order=<?php echo $data['id_venta']?>"><span class="status completed">Ver info</span></a></td>
							</tr>
						<?php }?>
							
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