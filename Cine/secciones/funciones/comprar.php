<?php
include("../../database.php");

if (isset($_GET['txtID4'])) {
    $txtID4 = isset($_GET['txtID4']) ? $_GET['txtID4'] : "";

    $sentencia = $conexion->prepare("SELECT * FROM funciones WHERE id_funcion = :id_funcion");
    $sentencia->bindParam(":id_funcion", $txtID4);
    $sentencia->execute();
    $registro = $sentencia->fetch(PDO::FETCH_LAZY);

    $sentenciaAsientos = $conexion->prepare("SELECT id_asiento FROM asientos WHERE estado = 'Disponible' AND id_sala = :id_sala");
    $sentenciaAsientos->bindParam(":id_sala", $registro['id_sala']);
    $sentenciaAsientos->execute();
    $asientosDisponibles = $sentenciaAsientos->fetchAll(PDO::FETCH_COLUMN);
}

if ($_POST) {
    // Obtener los datos del formulario
    $id_venta = isset($_POST["id_venta"]) ? $_POST["id_venta"] : "";
    $fecha_venta = isset($_POST["fecha_venta"]) ? $_POST["fecha_venta"] : "";
    $id_asiento = isset($_POST["id_asiento"]) ? $_POST["id_asiento"] : "";
    $id_cliente = isset($_POST["id_cliente"]) ? $_POST["id_cliente"] : "";

    // Preparar la sentencia SQL para la inserción
    $sentencia = $conexion->prepare("INSERT INTO ventas (id_venta, fecha_venta, id_asiento, id_cliente)
                                    VALUES (:id_venta, :fecha_venta, :id_asiento, :id_cliente)");

    // Vincular los parámetros
    $sentencia->bindParam(":id_venta", $id_venta);
    $sentencia->bindParam(":fecha_venta", $fecha_venta);
    $sentencia->bindParam(":id_asiento", $id_asiento);
    $sentencia->bindParam(":id_cliente", $id_cliente);
    $sentencia->execute();

    $sentencia1 = $conexion->prepare("INSERT INTO ventafuncion (id_venta, id_funcion)
                                    VALUES (:id_venta, :id_funcion)");
    $sentencia1->bindParam(":id_venta", $id_venta);
    $sentencia1->bindParam(":id_funcion", $txtID4);
    $sentencia1->execute();

    // Mostrar resumen de la compra
    echo "<h2>Resumen de la compra:</h2>";
    echo "<p>ID de la boleta: $id_venta</p>";
    echo "<p>ID de la función: $txtID4</p>";
    echo "<p>Fecha de la venta: $fecha_venta</p>";
    echo "<p>ID del asiento seleccionado: $id_asiento</p>";
    echo "<p>ID del cliente: $id_cliente</p>";

    // Redirigir después de mostrar el resumen
    header("refresh:10;url=index.php"); // Redirigir después de 5 segundos
    exit();
}
?>



<?php include("../../templates/header.php");?>


<div class="card">
    <div class="card-header">
        Datos de la boleta
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
                <label for="id_venta" class="form-label">ID de la boleta</label>
                <input type="text"
                class="form-control" name="id_venta" id="id_venta" aria-describedby="helpId" placeholder="Id de la boleta">
            </div>
            <div class ="mb-3">
                <label for="fecha_venta" class="form-label">Fecha del dia</label>
                <input type="text"
                class="form-control" name="fecha_venta" id="fecha_venta" aria-describedby="helpId" placeholder="Fecha del dia de hoy">
            </div>
            <div class="mb-3">
                <label for="id_asiento" class="form-label">Seleccionar Asiento</label>
                <select class="form-select" name="id_asiento" id="id_asiento">
                    <?php foreach ($asientosDisponibles as $asiento) : ?>
                        <option value="<?php echo $asiento; ?>"><?php echo $asiento; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class ="mb-3">
                <label for="id_cliente" class="form-label">Id del usuario</label>
                <input type="text"
                class="form-control" name="id_cliente" id="id_cliente" aria-describedby="helpId" placeholder="Tu Id">
            </div>
            <a name="" id="" class="btn btn-info" href="../usuarios/crear.php" role="button">No estas registrado?</a> 
            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a> 
            <button type="submit" class="btn btn-success">Comprar</button>
            
        </form>
    </div>
</div>




<?php include("../../templates/footer.php");?>