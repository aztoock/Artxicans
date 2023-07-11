<?php 
    include('./global/conexion.php');
    include('./templates/cabecera.php');
    if(!@$_SESSION['user']){ 
        echo("<script>location.href = '../index.php';</script>");  
    }
    $id_user = $_SESSION['id'];
?>
    <section class="choose-chat">
    <h2 align="center">Lista de Chats</h2>
        <div class="chats-container">
       
    
         <div class="mt-3">
         <button type="button" class="btn btn-info btn-lg" onclick="location.href='./chats.php?chat=<?php echo base64_encode($id_user)?>'">Chats de ventas</button>
            </div>
         <div class="mt-3">
         <button type="button" class="btn btn-info btn-lg" onclick="location.href='./chats.php'">Chats</button>
            </div>
      
        </div>
    </section>

<?php include('./templates/pie.php')?>