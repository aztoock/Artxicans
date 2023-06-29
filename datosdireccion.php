<?php  
  include 'global/conexion.php';
  include 'templates/cabecera.php';
  include 'global/cart.php';
  if(@!$_SESSION['user']){
    echo("<script>location.href = 'index.php';</script>");
  }
?>
  
<section class="reg_seller">
  <form action="" method="post" class="form-reg" enctype="multipart/form-data">

      <h1 class="text-center">Datos de envio</h1>
  
         <?php
          include('./global/direcciones.php');
         ?>
  

      <!-- ProgressBar -->
      
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="Personal"
        ></div>
        <div class="progress-step" data-title="Contacto"></div>
        <div class="progress-step" data-title="Ubicacion"></div>
        
      </div>


      <!-- Step 1 -->
      <div class="form-step form-step-active">
        <div class="input-group">
         <label for="nombre">Nombre</label>
         <input type="text" name="nombre" id="nombre">
      </div>
      <div class="input-group">
        <label for="direccion1">Direccion 1</label>
        <input type="text" name="direccion1" id="direccion1">
      </div>
      <div class="input-group">
        <label for="direccion2">Direccion 2</label>
        <input type="text" name="direccion2" id="direccion2" >
        <small>*Introduce tus datos verdaderos.</small>
      </div>
      <div>
        <a href="#" class="btn-rgs btn-next width-50 ml-auto">Siguiente</a>
      </div>
    </div>

      <!-- Step 2 -->
      <div class="form-step">
        <div class="input-group">
          <label for="ciudad">Ciudad</label>
          <input type="text" name="ciudad" id="ciudad" />
        </div>
        <div class="input-group">
          <label for="estado">Estado/Provincia/Region</label>
          <input type="text" name="estado" id="estado" />
        </div>
        <div class="input-group">
          <label for="cp">Codigo postal</label>
          <input type="text" name="cp" id="cp" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn-rgs btn-prev">Regresar</a>
          <a href="#" class="btn-rgs btn-next">Siguiente</a>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="form-step">
      <div class="input-group">
        <label for="telefono">Numero de telefono</label>
        <input type="text" name="telefono" id="telefono">
      </div>
      <div class="input-group">
        <label for="instrucciones">Agregar instrucciones de entrega</label>
        <input type="text" name="instrucciones" id="instrucciones">
      </div>

      <div class="input-group">
        <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id']; ?>">
        <input type="hidden" name="edireccion" id="edireccion" value="<?php echo 1;?>">
      </div>
      
      <div class="btns-group">
        <a href="#" class="btn-rgs btn-prev ">Regresar</a>
        <input type="submit" value="Enviar" name="send-reg" class="btn-send btn-rgs"/>
      </div>
    </div>
  </form>
</section>    
 
<?php
  include('templates/pie.php');
?> 