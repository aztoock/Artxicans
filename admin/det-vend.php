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
	<link rel="stylesheet" href="estilos.css">

	<title>Registro de Vendedores</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="./index.php" class="brand">
			<i class='bx bxs-font-color'></i>
			<span class="text">Artxicans</span>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="./index.php">
					<i class='bx bxs-home' ></i>
					<span class="text">Inicio</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Pedidos</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-send' ></i>
					<span class="text">Envios</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-user' ></i>
					<span class="text">Vendedores</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-error' ></i>
					<span class="text">Reportes</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li class="active">
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
							<a href="#">Menu</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="./reg-vendedores.php">Registro de vendedores</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="./reg-vendedores.php">Información de solicitud</a>
						</li>
					</ul>
				</div>
				
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Solicitud de vendedores</h3>
						
					</div>
                <div class="solicitud-vend">

				<?php 
					$id_v = $_GET['id_vend'];
					$query = mysqli_query($conn,"SELECT * FROM reg_sellers WHERE IDregseller = $id_v");
					$data = mysqli_fetch_array($query);
				?>
					<img src="../user/files<?php echo $data['identificador']?>" alt="identificacion" style="width:250px;height:140px">
                    <p><strong>Nombre:</strong>&nbsp;<?php echo $data['Nombre']?></p>
                    <p><strong>Apellidos:</strong>&nbsp;<?php echo $data['apellidos']?></p>
                    <p><strong>Nickname:</strong>&nbsp;<?php echo $data['nickname']?></p>
                    <p><strong>Lada:</strong>&nbsp;+<?php echo $data['lada']?></p>
                    <p><strong>Telefono:</strong>&nbsp;<?php echo $data['telefono']?></p>
                    <p><strong>Referencia:</strong>&nbsp;<?php echo $data['telefonoref']?></p>
                    <p><strong>Domicilio:</strong>&nbsp;<?php echo $data['domicilio']?></p>
                    <p><strong>Codigo Postal:</strong>&nbsp;<?php echo $data['postal']?></p>
                    <form method="POST" class="form-vend" action="./helpers/seller-action.php?reg_seller=<?php echo $id_v?>">
						
					<textarea class="txt-send" placeholder="Escribe un mensaje al usuario."></textarea>
					<input class="btn-choose decline" type="submit" name="reject-seller" value="Rechazar">
					<input class="btn-choose accept" type="submit" name="accept-seller" value="Aceptar">
				</form>
				
                </div>
				</div>
	
		
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>