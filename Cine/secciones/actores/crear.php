<?php
include("../../database.php");

if ($_POST) {
    // Obtener los datos del formulario
    $id_actor = isset($_POST["id_actor"]) ? $_POST["id_actor"] : "";
    $nomb_actor = isset($_POST["nomb_actor"]) ? $_POST["nomb_actor"] : "";

    // Preparar la sentencia SQL para la inserción
    $sentencia = $conexion->prepare("INSERT INTO actores (id_actor, nomb_actor)
                                    VALUES (:id_actor, :nomb_actor)");

    // Vincular los parámetros
    $sentencia->bindParam(":id_actor", $id_actor);
    $sentencia->bindParam(":nomb_actor", $nomb_actor);
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
        Datos del actor
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <div class ="mb-3">
                <label for="id_actor" class="form-label">Id del actor</label>
                <input type="text"
                class="form-control" name="id_actor" id="id_actor" aria-describedby="helpId" placeholder="Id Cliente">
            </div>

            <div class ="mb-3">
                <label for="nomb_actor" class="form-label">Nombre del actor</label>
                <input type="text"
                class="form-control" name="nomb_actor" id="nomb_actor" aria-describedby="helpId" placeholder="Nombre">
            </div>

            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a> 
            <button type="submit" class="btn btn-success">Agregar actor</button>
            
        </form>
    </div>
</div>




<?php include("../../templates/footer.php");?>