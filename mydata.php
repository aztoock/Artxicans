<?php
include('./global/conexion.php');
include('./templates/cabecera.php');
if(@!$_SESSION['user']){
    echo("<script>location.href = 'login.php';</script>");
}
$id_user = $_SESSION['id'];
?>
<section class="mydata">
    <h1 align="center">Mis datos</h1>

    <?php 
        $query = mysqli_query($conn,"SELECT * FROM registro WHERE ID = $id_user");
        $data = mysqli_fetch_array($query);
    ?>
    
        <form class="my-data mt-4">
            <div class="mb-3">
                <label for="correo" class="form-label">Correo:</label>
                <input type="email" class="form-control input-width" id="correo" name="correo" value="<?php echo $data['Correo']?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control input-width" id="password">
            </div> 

    <!-- Informacion que se tiene de los vendedores y lo pueda editar -->
    <?php 
          $sql = mysqli_query($conn,"SELECT * FROM registro WHERE ID = '$id_user'");
          $res = mysqli_fetch_array($sql);
         
          if($res['estatus'] == '1'){
          $query2 = mysqli_query($conn,"SELECT * FROM reg_sellers WHERE ID_registro = '$id_user'");
          $data2 = mysqli_fetch_array($query2);
          
    ?>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control input-width" id="nombre" name="nombre" value="<?php echo $data2['Nombre']?>" >
            </div> 
            
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos:</label>
                <input type="text" class="form-control input-width" id="apellidos" name="apellidos" value="<?php echo $data2['apellidos']?>" >
            </div> 
            <div class="mb-3">
                <label for="nickname" class="form-label">Identificador:</label>
                <input type="text" class="form-control input-width" id="nickname" name="nickname" value="<?php echo $data2['nickname']?>" >
            </div> 
            <div class="mb-3">
                <label for="nickname" class="form-label">Numero de telefono:</label>
                <div class="telefonos">
                <input type="text" class="form-control input-short" id="nickname" name="nickname" value="<?php echo $data2['lada']?>" >
                <input type="text" class="form-control input-medium" id="nickname" name="nickname" value="<?php echo $data2['telefono']?>" >
                </div>
            </div> 
            <div class="mb-3">
                <label for="domicilio" class="form-label">Domicilio:</label>
                <input type="text" class="form-control input-width" id="domicilio" name="domicilio" value="<?php echo $data2['domicilio']?>" >
            </div> 
            <div class="mb-3">
                <label for="cp" class="form-label">Codigo Postal:</label>
                <input type="text" class="form-control input-short" id="cp" name="cp" value="<?php echo $data2['postal']?>" >
            </div> 


    <?php }?>

    <!-- Boton para mandar datos -->
    <div class="mt-3 buttons-data">
        <a class="btn btn-secondary" href='./profile.php'>Regresar</a>
        <button type="submit" class="btn btn-info">Actualizar</button>
    </div>
</form>
   
</section>

<?php 
include('./templates/pie.php');
?>