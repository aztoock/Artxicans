<?php
$result = $conn->query("SELECT * FROM admins") or die ($conn->error);
if (isset($_POST['eliminar']))
    {
        $id_admin = $_POST['eliminar'];
        # Eliminamos el producto que coincida con el id que se esta solicitando eliminar
        $conn->query("DELETE FROM admins WHERE id_admin = '$id_admin'");
        header("Location: admin.php");
    }
while($row = mysqli_fetch_assoc($result))
    {
?>
	    <tbody>
	    	<tr>
	    		<td>
	    			<img src="../assets/utilities/administrador.png">
	    			<p><?php echo $row['nombre'];?></p>
	    		</td>
	    		<td><?php echo $row['correo'];?></td>
	    		<td>
                <?php 
                    if ($result->num_rows > 1)  # si se encuentran mas de 1 resultado se activa el boton eliminar
                        {  
                ?>
                            <form method="post">
                                <button type="submit" name="eliminar" value="<?php echo $row['id_admin']; ?>">
                                    <a><img src="../assets/utilities/cerrar.png"></a>
                                </button>
                            </form>
                <?php
                        }
                    else    # si solo hay un resultado el boton eliminar se desactiva
                        {
                ?>
                            <a>*</a>
                <?php
                        }
                ?>
                </td>
	    	</tr>
	    </tbody>
<?php
    }
?>