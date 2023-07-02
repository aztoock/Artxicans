<?php
	include 'temp/cabecera.php';
?>

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
							<a class="active" href="./reg-vendedores.php">Registro de productos</a>
						</li>
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Solicitud de productos</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Usuario</th>
								<th>Producto</th>
								<th>Información</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>Alebrije</td>
								<td><span class="status completed">Ver info</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>Arte huichol</td>
								<td><span class="status completed">Ver info</span></td>
							</tr>
							
						</tbody>
					</table>
				</div>
			


		
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
<?php
	include 'temp/pie.php';
?>