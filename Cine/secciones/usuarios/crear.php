<?php
include("../../database.php");

if ($_POST) {
    // Obtener los datos del formulario
    $id_cliente = isset($_POST["id_cliente"]) ? $_POST["id_cliente"] : "";
    $nomb_cliente = isset($_POST["nomb_cliente"]) ? $_POST["nomb_cliente"] : "";
    $ape_cliente = isset($_POST["ape_cliente"]) ? $_POST["ape_cliente"] : "";
    $correo_cliente = isset($_POST["correo_cliente"]) ? $_POST["correo_cliente"] : "";
    $telefono_cliente = isset($_POST["telefono_cliente"]) ? $_POST["telefono_cliente"] : "";

    // Preparar la sentencia SQL para la inserción
    $sentencia = $conexion->prepare("INSERT INTO clientes (id_cliente, nomb_cliente, ape_cliente, correo_cliente, telefono_cliente)
                                    VALUES (:id_cliente, :nomb_cliente, :ape_cliente, :correo_cliente, :telefono_cliente)");

    // Vincular los parámetros
    $sentencia->bindParam(":id_cliente", $id_cliente);
    $sentencia->bindParam(":nomb_cliente", $nomb_cliente);
    $sentencia->bindParam(":ape_cliente", $ape_cliente);
    $sentencia->bindParam(":correo_cliente", $correo_cliente);
    $sentencia->bindParam(":telefono_cliente", $telefono_cliente);

    // Ejecutar la sentencia
    $sentencia->execute();

    // Redirigir después de la inserción
    header("Location: index.php");
    exit();
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
                <label for="id_cliente" class="form-label">Id Cliente</label>
                <input type="text"
                class="form-control" name="id_cliente" id="id_cliente" aria-describedby="helpId" placeholder="Id Cliente">
            </div>

            <div class ="mb-3">
                <label for="nomb_cliente" class="form-label">Nombre</label>
                <input type="text"
                class="form-control" name="nomb_cliente" id="nomb_cliente" aria-describedby="helpId" placeholder="Nombre">
            </div>

            <div class ="mb-3">
                <label for="ape_cliente" class="form-label">Apellido</label>
                <input type="text"
                class="form-control" name="ape_cliente" id="ape_cliente" aria-describedby="helpId" placeholder="Apellido">
            </div>
            <div class ="mb-3">
                <label for="correo_cliente" class="form-label">Correo</label>
                <input type="text"
                class="form-control" name="correo_cliente" id="correo_cliente" aria-describedby="helpId" placeholder="Correo">
            </div>

            <div class ="mb-3">
                <label for="telefono_cliente" class="form-label">Telefono</label>
                <input type="text"
                class="form-control" name="telefono_cliente" id="telefono_cliente" aria-describedby="helpId" placeholder="Telefono">
            </div>

            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a> 
            <button type="submit" class="btn btn-success">Agregar usuario</button>
            
        </form>
    </div>
</div>




<?php include("../../templates/footer.php");?>