<?php
    include('./global/conexion.php');
    include('./templates/cabecera.php');
    if(!@$_SESSION['user']){ 
        echo("<script>location.href = '../index.php';</script>");  
    }
    # Mostrar chats a vendedores con usuarios. 
    $user = $_SESSION['id'];
    $id_chat = base64_decode($_GET['id_chat']);
    $query = mysqli_query($conn, "SELECT * FROM registro WHERE ID= $id_chat");
    $data = mysqli_fetch_array($query);
?>
<!-- Header del chat, mostrando con que usuario estan chateando-->
   <div class="header-chat" align="center">
            <?php echo $data['Nombre']?>
        </div>
<section class="toChat" style="color:grey">
        <div class="body-chat mt-3" >
                <?php 
                    # Consulta y obtener mensajes donde el idregistro sea igual al id del usuario que se obtuvo en la pagina anterior, y donde el id del vendedor sea igual al id en session(vendedor).

                    $message_query = mysqli_query($conn,"SELECT * FROM chats WHERE ID_registro = '$id_chat' AND seller = '$user'");
                    while($data_message = mysqli_fetch_array($message_query)){ # Mostramos todos los mensajes donde coincidan con la condicion
                      $data_m = $data_message['sent'];
                    # Si en la columna 'sent' es User, se mostrara arriba con un color distinto 
                      if($data_m == 'User'){
                ?>
                 <div class="seller-answer">
                   <div class="alert alert-secondary width-seller" role="alert">
                       <?php echo $data_message['chat']?>
                    </div>
                 </div>
                <?php 
             } 
                if($data_m =='Seller'){
                
                ?>
                <div class="user-answer" id="answer">
                    <div class="alert alert-primary width-user" role="alert">
                       <?php echo $data_message['chat']?>
                    </div>
                </div> 
        </div> 
        <?php }}?>
        
        <div id="chat-id"></div>
    </section>
    <div class="footer-chat mt-2" >
    <form method="POST" action="./helpers/message_seller.php?chat=<?php echo base64_encode($id_chat)?>">
    <div class="mb-3 w-75 mx-auto">
                    
        <textarea class="form-control" name="message" id="message" style="resize:none" rows="3" placeholder="Escribe tu mensaje"></textarea>
                  
    </div>
    <center class="container-btn-chat" style="padding:1rem">
        <!-- <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> -->
        <input type="hidden" name="<?php echo $seller;?>" id="<?php echo $seller;?>" >
        <input type="submit" class="btn btn-success sendMessage" href="javascript:;" name="sendMessage" id="sendMessage" value="Enviar">
    </center>
    </form>
    </div> 

    
<?php 
    include('./templates/pie.php');
?>