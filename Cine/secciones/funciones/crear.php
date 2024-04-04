<?php
include("../../database.php");

if ($_POST) {
    // Obtener los datos del formulario
    $id_funcion = isset($_POST["id_funcion"]) ? $_POST["id_funcion"] : "";
    $hora_inicio = isset($_POST["hora_inicio"]) ? $_POST["hora_inicio"] : "";
    $fecha = isset($_POST["fecha"]) ? $_POST["fecha"] : "";
    $precio_entrada = isset($_POST["precio_entrada"]) ? $_POST["precio_entrada"] : "";
    $id_pelicula = isset($_POST["id_pelicula"]) ? $_POST["id_pelicula"] : "";
    $id_sala = isset($_POST["id_sala"]) ? $_POST["id_sala"] : "";

    // Preparar la sentencia SQL para la inserción
    $sentencia = $conexion->prepare("INSERT INTO funciones (id_funcion, hora_inicio, fecha, precio_entrada, id_pelicula, id_sala)
                                    VALUES (:id_funcion, :hora_inicio, :fecha, :precio_entrada, :id_pelicula, :id_sala)");

    // Vincular los parámetros
    $sentencia->bindParam(":id_funcion", $id_funcion);
    $sentencia->bindParam(":hora_inicio", $hora_inicio);
    $sentencia->bindParam(":fecha", $fecha);
    $sentencia->bindParam(":precio_entrada", $precio_entrada);
    $sentencia->bindParam(":id_pelicula", $id_pelicula);
    $sentencia->bindParam(":id_sala", $id_sala);

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
        Datos de la funcion
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <div class ="mb-3">
                <label for="id_funcion" class="form-label">Id Funcion</label>
                <input type="text"
                class="form-control" name="id_funcion" id="id_funcion" aria-describedby="helpId" placeholder="Id funcion">
            </div>

            <div class ="mb-3">
                <label for="hora_inicio" class="form-label">Hora inicio</label>
                <input type="text"
                class="form-control" name="hora_inicio" id="hora_inicio" aria-describedby="helpId" placeholder="Hora">
            </div>

            <div class ="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="text"
                class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="Fecha">
            </div>
            <div class ="mb-3">
                <label for="precio_entrada" class="form-label">Precio de la boleta</label>
                <input type="text"
                class="form-control" name="precio_entrada" id="precio_entrada" aria-describedby="helpId" placeholder="Precio">
            </div>

            <div class ="mb-3">
                <label for="id_pelicula" class="form-label">Id de la pelicula</label>
                <input type="text"
                class="form-control" name="id_pelicula" id="id_pelicula" aria-describedby="helpId" placeholder="Id pelicula">
            </div>
            <div class ="mb-3">
                <label for="id_sala" class="form-label">Id de la sala</label>
                <input type="text"
                class="form-control" name="id_sala" id="id_sala" aria-describedby="helpId" placeholder="Id sala">
            </div>

            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a> 
            <button type="submit" class="btn btn-success">Agregar funcion</button>
            
        </form>
    </div>
</div>




<?php include("../../templates/footer.php");?>