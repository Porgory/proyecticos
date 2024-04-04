<?php
include("../../database.php");

if ($_POST) {
    // Obtener los datos del formulario
    $id_director = isset($_POST["id_director"]) ? $_POST["id_director"] : "";
    $nomb_director = isset($_POST["nomb_director"]) ? $_POST["nomb_director"] : "";

    // Preparar la sentencia SQL para la inserción
    $sentencia = $conexion->prepare("INSERT INTO directores (id_director, nomb_director)
                                    VALUES (:id_director, :nomb_director)");

    // Vincular los parámetros
    $sentencia->bindParam(":id_director", $id_director);
    $sentencia->bindParam(":nomb_director", $nomb_director);

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
        Datos del Director
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <div class ="mb-3">
                <label for="id_director" class="form-label">Id del Director</label>
                <input type="text"
                class="form-control" name="id_director" id="id_director" aria-describedby="helpId" placeholder="Id Cliente">
            </div>

            <div class ="mb-3">
                <label for="nomb_director" class="form-label">Nombre del director</label>
                <input type="text"
                class="form-control" name="nomb_director" id="nomb_director" aria-describedby="helpId" placeholder="Nombre">
            </div>

            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a> 
            <button type="submit" class="btn btn-success">Agregar director</button>
            
        </form>
    </div>
</div>