<?php
include("../../database.php");

if (isset($_GET['txtID4'])) {
    $txtID4 = isset($_GET['txtID4']) ? $_GET['txtID4'] : "";

    $sentencia = $conexion->prepare("SELECT * FROM funciones WHERE id_funcion = :id_funcion");
    $sentencia->bindParam(":id_funcion", $txtID4);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);
    
    $hora_inicio=$registro["hora_inicio"];
    $fecha=$registro["fecha"];
    $precio_entrada=$registro["precio_entrada"];
    $id_pelicula=$registro["id_pelicula"];
    $id_sala=$registro["id_sala"];
}
if ($_POST) {
    
    $txtID4 = isset($_POST['txtID4']) ? $_GET['txtID4'] : "";

    $id_funcion = isset($_POST["id_funcion"]) ? $_POST["id_funcion"] : "";
    $hora_inicio = isset($_POST["hora_inicio"]) ? $_POST["hora_inicio"] : "";
    $fecha = isset($_POST["fecha"]) ? $_POST["fecha"] : "";
    $precio_entrada = isset($_POST["precio_entrada"]) ? $_POST["precio_entrada"] : "";
    $id_pelicula = isset($_POST["id_pelicula"]) ? $_POST["id_pelicula"] : "";
    $id_sala = isset($_POST["id_sala"]) ? $_POST["id_sala"] : "";

    $sentencia = $conexion->prepare("UPDATE funciones SET hora_inicio=:hora_inicio, fecha=:fecha,
                                    precio_entrada=:precio_entrada, id_pelicula=:id_pelicula, id_sala=:id_sala
                                    WHERE id_funcion=:id_funcion");

    $sentencia->bindParam(":id_funcion", $txtID);
    $sentencia->bindParam(":hora_inicio", $hora_inicio);
    $sentencia->bindParam(":fecha", $fecha);
    $sentencia->bindParam(":precio_entrada", $precio_entrada);
    $sentencia->bindParam(":id_pelicula", $id_pelicula);
    $sentencia->bindParam(":id_sala", $id_sala);
    $sentencia->execute();

    header("Location: index.php");
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
                <label for="txtID4" class="form-label">Id Funcion</label>
                <input type="text"
                value="<?php echo $txtID4;?>"
                class="form-control" readonly name="txtID4" id="txtID4" aria-describedby="helpId" placeholder="Id funcion">
            </div>

            <div class ="mb-3">
                <label for="hora_inicio" class="form-label">Hora de inicio</label>
                <input type="text"
                value="<?php echo $hora_inicio;?>"
                class="form-control" name="hora_inicio" id="hora_inicio" aria-describedby="helpId" placeholder="Hora">
            </div>

            <div class ="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="text"
                value="<?php echo $fecha;?>"
                class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="Fecha">
            </div>
            <div class ="mb-3">
                <label for="precio_entrada" class="form-label">Precio de entrada</label>
                <input type="text"
                value="<?php echo $precio_entrada;?>"
                class="form-control" name="precio_entrada" id="precio_entrada" aria-describedby="helpId" placeholder="Precio de entrada">
            </div>

            <div class ="mb-3">
                <label for="id_pelicula" class="form-label">Id de la pelicula</label>
                <input type="text"
                value="<?php echo $id_pelicula;?>"
                class="form-control" name="id_pelicula" id="id_pelicula" aria-describedby="helpId" placeholder="Id de la pelicula">
            </div>
            <div class ="mb-3">
                <label for="id_sala" class="form-label">Id de la sala</label>
                <input type="text"
                value="<?php echo $id_sala;?>"
                class="form-control" name="id_sala" id="id_sala" aria-describedby="helpId" placeholder="Id de la sala">
            </div>

            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a> 
            <button type="submit" class="btn btn-success">Actualizar</button>
            
        </form>
    </div>
</div>




<?php include("../../templates/footer.php");?>