<?php 
    include('./global/conexion.php');
    include('./templates/cabecera.php');
    include('./helpers/loader.php');
    if(@!$_SESSION['roll']){
        echo("<script>location.href = './index.php';</script>");
      } 
?>
    <h2 align="center">Agregar Producto</h2>

    <div class="m-2  row justify-content-center align-items-center mt-3">
                                <div class="alert alert-success text-center p-5 col-auto" role="alert" style="display:flex;align-items:center;justify-content:center;flex-direction:column">
                                    <img src="./assets/utilities/caja.png" alt="caja" width="100px" height="100px">
                                    Excelente! Tu producto se encuentra en proceso de revision, posteriormente te notificaremos si tu producto cumple con los requisitos establecidos y te daremos a conocer si 
                                tu producto es aceptado, rechazado o si tienes que hacer ligeros cambios. </a>
                                </div>
                            </div> 

                        <center class="mt-2">
                            <button type="button" onclick="location.href='./productList.php'" class="btn btn-info">Entendido</button>
                        </center>

<?php 
    include('./templates/pie.php');
?>