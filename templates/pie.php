<!-- Footer -->
 <section class="footer">
  <div class="footer-img">
    <img src="assets/material/tablas.jpg" alt="footer">
  </div>

  <div class="fooContent">
    <div class="contactsDiv flex">
      <div class="footer-text">
        <small>Artxicans</small>
      </div>
    </div>

  <div class="footerCard flex">
    <div class="footerIntro flex">
      <div class="footer-logo">
        <a href="#" class="footer-logo-sub">
          <img src="assets/logo/a.png" alt="logo" class="icon">
        </a>
      </div>
      <div class="footerParagraph">
      Esta aplicacion tiene como objetivo impulsar las artesanias mexicanas en la sociedad
      y ayudar economicamente a las personas que se dedican a este arte.
      </div>   
    </div>

    <div class="footerLinks grid">
      <div class="linkGroup">
        <span class="groupTitle">
          Servicios
        </span>
        <li class="footerList flex"><a href="helpers/validate-seller.php">Vender</a></li>
        <li class="footerList flex"><a href="./help.php">Ayuda</a></li>
        <li class="footerList flex"><a data-bs-toggle="modal" data-bs-target="#ModalPagos">Metodos de pago</a></li>
        
      </div>
      <div class="linkGroup">
        <span class="groupTitle">
          Informacion
        </span>
        <li class="footerList flex"><a href="./about.php">Nosotros</a></li>
        
        <li class="footerList flex"><a data-bs-toggle="modal" data-bs-target="#ModalPrivacidad">Aviso de privacidad</a></li>
        <li class="footerList flex"><a data-bs-toggle="modal" data-bs-target="#ModalTerminos">Términos y condiciones</a></li>
        

      </div>  
      </div>
      <div class="footer-end flex">
        <small>Desarrollada por:  Cristian Nahuatlato y Said Castillo</small>
      </div>
    </div>
  </div>
</section> 



<!-- Modals -->

<!-- Modal metodos de pago -->
<?php include('./components/ModalPay.php');?>

<!-- Modal aviso y privacidad -->
<?php include('./components/ModalPriv.php');?>
<!-- Modal terminos y condiciones -->
<?php include('./components/ModalTerm.php');?>


      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Aceptar</button>
        
      </div>
    </div>
  </div>
</div>

    <script src="js/formReg.js"></script>
    <script src="js/Burgerbtn.js"></script>
  
    <script type="text/javascript" src="./js/Loader.js"></script>
    <script type="text/javascript" src="./js/Translate.js"></script>
    <script src="./styles/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
  
   <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  </body>
</html> 