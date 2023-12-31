<?php 
    include('./templates/cabecera.php');
    include('./global/conexion.php');
    include('./helpers/loader.php');
    if(@!$_SESSION['roll']){
      echo("<script>location.href = './index.php';</script>");
    } 
?>
    <section class="add-proudcts" style="margin-top:4.5rem">


    <form action="" method="post" class="form-reg form-resize" enctype="multipart/form-data" style="margin-top:2">

<h1 class="text-center">Registro de producto</h1>
<?php include 'global/Sadd-product.php'; ?>
<!-- ProgressBar -->

<div class="progressbar">
  <div class="progress" id="progress"></div>
  
  <div
    class="progress-step progress-step-active"
    data-title="Producto"
  ></div>
  <div class="progress-step" data-title="Detalles"></div>
  <div class="progress-step" data-title="Imagen"></div>
  
</div>


<!-- Step 1 -->
<div class="form-step form-step-active">
  <div class="input-group">
   <label for="producto">Producto:</label>
   <input type="text" name="producto" id="producto">
</div>
<div class="input-group">
  <label for="descripcion">Descripcion:</label>
  <!-- <input type="text" name="descripcion" id="descripcion"> -->
  <textarea name="descripcion" id="descripcion" style="resize:none;width:100%;height:5rem"></textarea>
  
</div>
<div class="input-group">
  <label for="categoria">Categoria:</label>
  <!-- <input type="text" name="categoria" id="categoria" > -->
  <select class="form-select w-100" name="categoria" id="categoria" aria-label="Default select example">
  <option selected>Selecciona la categoria</option>
  <option value="Alebrijes">Alebrijes</option>
  <option value="Arte Huichol">Arte Huichol</option>
  <option value="Juguetes">Juguetes</option>
  <option value="Joyeria">Joyeria</option>
  <option value="Ropa">Ropa</option>
  <option value="Rebozos">Rebozos</option>
  <option value="Sombreros">Sombreros</option>
  <option value="Zapatos">Zapatos</option>
  <option value="Otros">Otros...</option>
</select>
</div>

<div>
  <a href="#" class="btn-rgs btn-next width-50 ml-auto">Siguiente</a>
</div>
</div>

<!-- Step 2 -->
<div class="form-step">
  <div class="input-group">
    <label for="precio">Precio:</label>
   
    <input type="text" name="precio" id="precio" />
  </div>
  <div class="input-group">
    <label for="cantidad">Cantidad:</label>
    <input type="text" name="cantidad" id="cantidad" />
  </div>
  
  <div class="btns-group">
    <a href="#" class="btn-rgs btn-prev">Regresar</a>
    <a href="#" class="btn-rgs btn-next">Siguiente</a>
  </div>
</div>

<!-- Step 3 -->
<div class="form-step">
<div class="input-group">
  <label for="imagen1">Imagen 1:</label>
  <input style="color:red" type="file" name="imagen1" id="imagen1">
  <small>*Adjunta la tercera imagen de tu producto</small>
</div>
<div class="input-group">
   <label for="imagen2">Imagen 2:</label>
   <input style="color:red" type="file" name="imagen2" id="imagen2">
   <small>*Adjunta la tercera imagen de tu producto</small>
  </div>
<div class="input-group">
  <label for="imagen3">Imagen 3:</label>
  <input style="color:red" type="file" name="imagen3" id="imagen3" >
  <small>*Adjunta la tercera imagen de tu producto</small>
</div>

<div class="btns-group">
  <a href="#" class="btn-rgs btn-prev ">Regresar</a>
  <input type="submit" value="Enviar" name="send-reg" class="btn-send btn-rgs"/>
</div>
</div>
</form>
        
    </section>


<?php 
    include('./templates/pie.php');
?>