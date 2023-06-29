<?php 
  include('global/conexion.php');
  include('templates/cabecera.php');
?>
    <!-- Sell page -->
    <section class="sell">
        <div class="overlay"></div>
        <img src="assets/utilities/bg_sell_1.jpg" alt="">
        <div class="sellContent container">
            <div class="textDiv">
                <h1 class="sellTitle">Empieza a vender en <p class="fancy">Artxicans</p></h1>
            </div>
        </div>
    </section>

    <section class="sign-sellers">
        <h3>Empieza <span class="underlined underline-clip">ahora</span> para <span class="underlined underline-clip1">vender</span></h3>
        <div class="btn-center">
            <button class="sign-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Registrarte</button>
        </div> 
        </section>

<!-- Modal -->
<?php if(@!$_SESSION['user']){?>
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrate</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Para poder acceder al registro como vendedor, primero tienes que registrarte como usuario o iniciar sesión.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="location.href='./signup.php'">Registrar</button>
      </div>
    </div>
  </div>
</div>
  <?php }else{ ?>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Comienza a vender</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Rellena todos los requisitos que se muestran para poder verificarte y darte acceso para que puedas vender tus productos correctamente, si tienes alguna duda sobre estos requisitos te recomendamos leer mas sobres nuestas politicas de provacidad.
      -->
Antes de empezar, te recordamos que únicamente se dará autorización a los usuarios que se verifiquen correctamente y se permitirá únicamente la venta de productos mexicanos artesanales.  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="location.href='./reg_seller.php'">Entendido</button>
      </div>
    </div>
  </div>
</div>
  <?php }?>



<!-- Modal -->

      <div class="req">
         <h3>¡Conoce los requisitos para vender!</h3>
       </div>
       <div class="img-cen">
            <img src="assets/utilities/brett.jpg" alt="Image">
       </div>
      <div class="inf-container">
        <div class="inf-art">
            <h3>Artxicans permite únicamente la venta de productos y artesanías mexicanas.</h3>
        </div>
    
        <h3 class="title-question">Preguntas frecuentes:</h3>
<!-- Pregunta1 -->
        <div class="info-collapse">
            <p>
                <a class="btn btn-warning" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                  ¿Que tipos de productos no se pueden publicar en Artxicans?
                </a>
              </p>
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                  Algunos productos se encuentran prohibidos y restringidos debido a múltiples razones, tales como seguridad, salud y lamentablemente fragilidad de algunos productos.
                  Para obtener información detallada sobre que productos no pueden venderse en Artxicans, consulta el documento de ayuda <strong>Restricciones de productos</strong>
                </div>
              </div>
        </div>
<!-- Pregunta 2 -->
        <div class="info-collapse">
            <p>
                <a class="btn btn-warning" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                  ¿Cuánto cuesta vender en Artxicans?
                </a>
              </p>
              <div class="collapse" id="collapseExample2">
                <div class="card card-body">
                  Se cobraran $ MXN y más una pequena tarifa por cada venta de tú artículo, la tarifa puede variar según el costo de tu producto.
                  Consulta el documento de <strong>Más información sobre tarifas y precios</strong>
                </div>
              </div>
        </div>
<!-- Pregunta 3 -->
        <div class="info-collapse">
            <p>
                <a class="btn btn-warning" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                  ¿Cómo recibo mis pagos?
                </a>
              </p>
              <div class="collapse" id="collapseExample3">
                <div class="card card-body">
                  Artxicans deposita tus pagos en tu cuenta bancaria y te notificara cada vez que se haya realizado el depósito. 
                </div>
              </div>
        </div>
<!-- Pregunta 4 -->
        <div class="info-collapse">
            <p>
                <a class="btn btn-warning" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
                  ¿Cómo funciona la logística de Artxicans?
                </a>
              </p>
              <div class="collapse" id="collapseExample4">
                <div class="card card-body">
                  Logística de Artxicans es un servicio que te permite enviar tus productos de artesanias mexicanas en cualquiera de las paqueterías existentes.
                  Cuando un cliente hace un pedido ....  
                </div>
              </div>
        </div>
        
    </div>


      
<?php 
  include('templates/pie.php');
?>