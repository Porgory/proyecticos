<?php
include("../../database.php");

if (isset($_GET['txtID'])) {
    $txtID = isset($_GET['txtID']) ? $_GET['txtID'] : "";

    $sentencia = $conexion->prepare("SELECT * FROM clientes WHERE id_cliente = :id_cliente");
    $sentencia->bindParam(":id_cliente", $txtID);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);
    
    $nomb_cliente=$registro["nomb_cliente"];
    $ape_cliente=$registro["ape_cliente"];
    $correo_cliente=$registro["correo_cliente"];
    $telefono_cliente=$registro["telefono_cliente"];
}
if ($_POST) {
    
    $txtID = isset($_POST['txtID']) ? $_GET['txtID'] : "";

    $id_cliente = isset($_POST["id_cliente"]) ? $_POST["id_cliente"] : "";
    $nomb_cliente = isset($_POST["nomb_cliente"]) ? $_POST["nomb_cliente"] : "";
    $ape_cliente = isset($_POST["ape_cliente"]) ? $_POST["ape_cliente"] : "";
    $correo_cliente = isset($_POST["correo_cliente"]) ? $_POST["correo_cliente"] : "";
    $telefono_cliente = isset($_POST["telefono_cliente"]) ? $_POST["telefono_cliente"] : "";

    $sentencia = $conexion->prepare("UPDATE clientes SET nomb_cliente=:nomb_cliente, ape_cliente=:ape_cliente,
                                    correo_cliente=:correo_cliente, telefono_cliente=:telefono_cliente
                                    WHERE id_cliente=:id_cliente");

    $sentencia->bindParam(":id_cliente", $txtID);
    $sentencia->bindParam(":nomb_cliente", $nomb_cliente);
    $sentencia->bindParam(":ape_cliente", $ape_cliente);
    $sentencia->bindParam(":correo_cliente", $correo_cliente);
    $sentencia->bindParam(":telefono_cliente", $telefono_cliente);
    $sentencia->execute();

    header("Location: index.php");
}
?>



<?php include("../../templates/header.php");?>


<div class="card">
    <div class="card-header">
        Datos del Usuario
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <div class ="mb-3">
                <label for="txtID" class="form-label">Id Cliente</label>
                <input type="text"
                value="<?php echo $txtID;?>"
                class="form-control" readonly name="txtID" id="txtID" aria-describedby="helpId" placeholder="Id Cliente">
            </div>

            <div class ="mb-3">
                <label for="nomb_cliente" class="form-label">Nombre</label>
                <input type="text"
                value="<?php echo $nomb_cliente;?>"
                class="form-control" name="nomb_cliente" id="nomb_cliente" aria-describedby="helpId" placeholder="Nombre">
            </div>

            <div class ="mb-3">
                <label for="ape_cliente" class="form-label">Apellido</label>
                <input type="text"
                value="<?php echo $ape_cliente;?>"
                class="form-control" name="ape_cliente" id="ape_cliente" aria-describedby="helpId" placeholder="Apellido">
            </div>
            <div class ="mb-3">
                <label for="correo_cliente" class="form-label">Correo</label>
                <input type="text"
                value="<?php echo $correo_cliente;?>"
                class="form-control" name="correo_cliente" id="correo_cliente" aria-describedby="helpId" placeholder="Correo">
            </div>

            <div class ="mb-3">
                <label for="telefono_cliente" class="form-label">Telefono</label>
                <input type="text"
                value="<?php echo $telefono_cliente;?>"
                class="form-control" name="telefono_cliente" id="telefono_cliente" aria-describedby="helpId" placeholder="Telefono">
            </div>

            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a> 
            <button type="submit" class="btn btn-success">Actualizar</button>
            
        </form>
    </div>
</div>




<?php include("../../templates/footer.php");?>