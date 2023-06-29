<?php 
  include('global/conexion.php');
  include('templates/cabecera.php');
  if(@!$_SESSION['roll']){
    echo("<script>location.href = './index.php';</script>");
  } 
  $id_user = $_SESSION['id'];
?>

<section class="seller_true">
    <h2>Bienvenido a la sección de vender</h2>
    <div class="seller-buttons container-buttons-seller">
    
    <button type="button" class="btn btn-info choose-btn" onclick="location.href='./productList.php'">Mis productos&nbsp;<i class='bx bx-package'></i></button>
    <button type="button" class="btn btn-info choose-btn" onclick="location.href='./my-orders.php'">Mis pedidos&nbsp;<i class='bx bx-shopping-bag'></i></button>
    <button type="button" class="btn btn-primary choose-btn" onclick="location.href='./profile-seller.php?seller_data=<?php echo $id_user?>'">Mi perfil&nbsp;<i class='bx bx-user'></i></button>
    <button type="button" class="btn btn-success choose-btn" onclick="location.href='./pay-account.php'">Mi cuenta de pagos&nbsp;<i class='bx bxs-credit-card'></i></button>

    </div>
   
</section>


<?php 
  include('templates/pie.php');
?>