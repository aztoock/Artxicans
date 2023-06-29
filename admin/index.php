<!DOCTYPE html>

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
		<a href="./index.php" class="brand">
			<i class='bx bxs-font-color'></i>
			<span class="text">Artxicans</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
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
			
			<!-- <input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a> -->
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
							<a class="active" href="#">Inicio</a>
						</li>
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">
						<h3>10</h3>
						<p>Nuevos pedidos</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-send' ></i>
					<span class="text">
						<h3>2</h3>
						<p>Envios</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-user' ></i>
					<span class="text">
						<h3>10</h3>
						<p>Vendedores</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-error' ></i>
					<span class="text">
						<h3>2</h3>
						<p>Reportes</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-user-check' ></i>
					<span class="text">
						<h3>10</h3>
						<p>Nuevos vendedores</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-select-multiple' ></i>
					<span class="text">
						<h3>10</h3>
						<p>Nuevos productos</p>
					</span>
				</li>
			</ul>


		
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>