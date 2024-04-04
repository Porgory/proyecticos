<?php
include("../../database.php");

if ($_POST) {
    // Obtener los datos del formulario
    $personaje = isset($_POST["personaje"]) ? $_POST["personaje"] : "";
    $id_actor = isset($_POST["id_actor"]) ? $_POST["id_actor"] : "";
    $id_pelicula = isset($_POST["id_pelicula"]) ? $_POST["id_pelicula"] : "";

    // Preparar la sentencia SQL para la inserción
    $sentencia = $conexion->prepare("INSERT INTO actua (personaje, id_actor, id_pelicula)
                                    VALUES (:personaje, :id_actor, :id_pelicula)");

    // Vincular los parámetros
    $sentencia->bindParam(":personaje", $personaje);
    $sentencia->bindParam(":id_actor", $id_actor);
    $sentencia->bindParam(":id_pelicula", $id_pelicula);
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
                <label for="personaje" class="form-label">Personaje</label>
                <input type="text"
                class="form-control" name="personaje" id="personaje" aria-describedby="helpId" placeholder="Personaje">
            </div>
            <div class ="mb-3">
                <label for="id_actor" class="form-label">Id del actor</label>
                <input type="text"
                class="form-control" name="id_actor" id="id_actor" aria-describedby="helpId" placeholder="Id Cliente">
            </div>

            <div class ="mb-3">
                <label for="id_pelicula" class="form-label">Id de la pelicula</label>
                <input type="text"
                class="form-control" name="id_pelicula" id="id_pelicula" aria-describedby="helpId" placeholder="Id de la pelicula">
            </div>

            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a> 
            <button type="submit" class="btn btn-success">Contratar</button>
            
        </form>
    </div>
</div>




<?php include("../../templates/footer.php");?>