<?php 
    include('./global/conexion.php');
    include('./templates/cabecera.php');
    if(!@$_SESSION['user']){ 
        echo("<script>location.href = '../index.php';</script>");  
    }
    
    $idu = $_SESSION['id'];
    ?>
    <section class="chats">
        <h2 align="center">Lista de Chats</h2>
        <div class="chats-container">
        <?php 
        #MOSTRAR CHATS CON USUARIOS
        # La variable chat la obtenemos cuando un vendedor quiere ver los chats que ha tenido con usuarios
    if(isset($_GET['chat'])){  # Si se obtiene esta variabla, entonces se mostraran los chats de usuarios al vendedor. 
        $user = base64_decode($_GET['chat']); # Se decodifica lo que hay en la varibale chat
        $query = mysqli_query($conn,"SELECT * FROM chats WHERE seller = '$user' GROUP BY ID_registro "); #Consulta para obtener las charlas con los usuarios, pero sin que se repitan
        if($query->num_rows>0){ # Para saber si hay chats, si hay chats mostrar los chats, sino mostrar mensaje que no hay chats

        while($data = mysqli_fetch_array($query)){ # Mostrar datos 
        $get = $data['ID_registro']; # Obtenemos el id de usuario de la tabla chats
        $query2 = mysqli_query($conn,"SELECT * FROM registro WHERE ID = $get"); # Y buscamos en la tabla registro el ID que coincida con el id del usuario, esto para que saquemos el nombre del usuario
        $data2 = mysqli_fetch_array($query2);
        $number = $data2['ID']; # Id de la tabla registro
        ?>
            <div>
                <button type="button" class="btn btn-primary" onclick="location.href='./toChat-s.php?id_chat=<?php echo base64_encode($number)?>#chat-id'">
                    <?php
                    # Ocupamos el id de la tabla registro para sumar el total de chats que hay de cada usuario al vendedor
                    $check = mysqli_query($conn,"SELECT COUNT(*) total FROM chats WHERE ID_registro  = $number");
                    $counter = mysqli_fetch_array($check);
                    ?>
                    <!-- Nombre del usuario con el que se esta charlando                      y aqui se muestra el total de cuantos mensajes se han hecho en la platica-->
                    <?php echo $data2['Nombre']?>&nbsp;<span class="badge text-bg-secondary"><?php echo $counter['total']?></span>
                </button>
            </div>
        <?php } 
        }else{ #No hay chats Mostrar ?>
        <div class="m-0 vh-100 row justify-content-center align-items-center">
            <div class="alert alert-dark text-center p-5 col-auto" role="alert">
                No cuentas con chats con usuarios  
            </div>
        </div>
<?php
        }    
    }else{ 
        #MOSTRAR CHATS CON VENDEDORES
        # Si no obtenemos la variable chat, significa que es un usuario queriendo ver chats con vendedores
        # Hacemos el mismo procedimineto invertido, obteniendo todos los chats que se han hecho con vendedores
        $query = mysqli_query($conn,"SELECT * FROM chats WHERE ID_registro = '$idu' GROUP BY seller ");
        if($query->num_rows>0){ # Para saber si hay chats, si hay chats mostrar los chats, sino mostrar mensaje que no hay chats

        while($data = mysqli_fetch_array($query)){
        $get = $data['seller'];
        $query2 = mysqli_query($conn,"SELECT * FROM reg_sellers WHERE ID_registro = $get");
        $data2 = mysqli_fetch_array($query2);
        $number = $data2['ID_registro']; 
        ?>
            <div>
                <button type="button" class="btn btn-primary" onclick="location.href='./toChat.php?seller_data=<?php echo base64_encode($number)?>#chat-id'">
                    <?php
                    
                    $check = mysqli_query($conn,"SELECT COUNT(*) total FROM chats WHERE ID_registro  = $number");
                    $counter = mysqli_fetch_array($check);
                    ?>
                    <?php echo $data2['nickname']?>&nbsp;<span class="badge text-bg-secondary"><?php echo $counter['total']?></span>
                </button>
            </div>


       <?php  }
        }else{ #No hay chats Mostrar ?>
            <div class="m-0  row justify-content-center align-items-center">
                <div class="alert alert-dark text-center p-5 col-auto" role="alert">
                    No tienes con chats con vendedores 
                </div>
            </div>
    <?php
        }
    } 
        ?>
        </div>
    </section>

<?php 
    include('./templates/pie.php');
?>