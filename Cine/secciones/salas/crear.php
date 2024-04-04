<?php
include("../../database.php");

if ($_POST) {
    // Obtener los datos del formulario
    $id_sala = isset($_POST["id_sala"]) ? $_POST["id_sala"] : "";
    $nomb_sala = isset($_POST["nomb_sala"]) ? $_POST["nomb_sala"] : "";
    $capacidad = isset($_POST["capacidad"]) ? $_POST["capacidad"] : "";

    // Preparar la sentencia SQL para la inserción
    $sentencia = $conexion->prepare("INSERT INTO salas (id_sala, nomb_sala, capacidad)
                                    VALUES (:id_sala, :nomb_sala, :capacidad");

    // Vincular los parámetros
    $sentencia->bindParam(":id_sala", $id_sala);
    $sentencia->bindParam(":nomb_sala", $nomb_sala);
    $sentencia->bindParam(":capacidad", $capacidad);

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
        Datos de la sala
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <div class ="mb-3">
                <label for="id_sala" class="form-label">Id sala</label>
                <input type="text"
                class="form-control" name="id_sala" id="id_sala" aria-describedby="helpId" placeholder="Id sala">
            </div>

            <div class ="mb-3">
                <label for="nomb_sala" class="form-label">Nombre</label>
                <input type="text"
                class="form-control" name="nomb_sala" id="nomb_sala" aria-describedby="helpId" placeholder="Nombre">
            </div>

            <div class ="mb-3">
                <label for="capacidad" class="form-label">Capacidad</label>
                <input type="text"
                class="form-control" name="capacidad" id="capacidad" aria-describedby="helpId" placeholder="Capacidad">
            </div>

            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a> 
            <button type="submit" class="btn btn-success">Agregar sala</button>
            
        </form>
    </div>
</div>




<?php include("../../templates/footer.php");?>