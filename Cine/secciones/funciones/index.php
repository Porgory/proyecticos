<?php
include("../../database.php");

if (isset($_GET['txtID4'])) {
    $txtID4 = isset($_GET['txtID4']) ? $_GET['txtID4'] : "";

    // Preparar la sentencia SQL para la eliminación
    $sentencia = $conexion->prepare("DELETE FROM funciones WHERE id_funcion = :id_funcion");

    // Vincular el parámetro
    $sentencia->bindParam(":id_funcion", $txtID4);

    // Ejecutar la sentencia
    $sentencia->execute();

    // Redirigir después de la eliminación
    header("Location: index.php");
    exit();
}
/*VISTA QUE SE MANEJA PARA MOSTRAR LA INFO
CREATE VIEW vista_funciones AS
SELECT
    funciones.id_funcion,
    funciones.hora_inicio,
    funciones.fecha,
    funciones.precio_entrada,
    peliculas.titulo AS nomb_pelicula,
    salas.nomb_sala
FROM
    funciones
JOIN peliculas ON funciones.id_pelicula = peliculas.id_pelicula
JOIN salas ON funciones.id_sala = salas.id_sala;*/

// Obtener la fecha seleccionada, si está presente en la solicitud
$fechaSeleccionada = isset($_GET['fechaSeleccionada']) ? $_GET['fechaSeleccionada'] : null;

// Consulta para obtener las funciones filtradas por la fecha seleccionada
$sentencia = $conexion->prepare("SELECT * FROM vista_funciones WHERE fecha = :fechaSeleccionada");
$sentencia->bindParam(":fechaSeleccionada", $fechaSeleccionada);
$sentencia->execute();
$lista_funciones = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include("../../templates/header.php");?>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 1em;
        text-align: center;
    }

    #carousel-container {
        overflow-x: scroll;
        white-space: nowrap;
        padding: 1em;
    }

    .movie-card {
        display: inline-block;
        width: 250px;
        margin-right: 10px;
        background-color: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .movie-card img {
        width: 100%;
        height: auto;
        border-bottom: 1px solid #ddd;
    }

    .movie-card .movie-info {
        padding: 1em;
    }

    footer {
        background-color: #333;
        color: #fff;
        padding: 1em;
        text-align: center;
    }
</style>
<header>
    <h1>Funciones de la semana</h1>
</header>
<br />
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Crear Funcion</a>
    </div>
    <div class="card-body">

        <form method="GET" action="index.php">
            <label for="fechaSeleccionada">Seleccione una fecha:</label>
            <input type="date" id="fechaSeleccionada" name="fechaSeleccionada" value="<?php echo $fechaSeleccionada; ?>">
            <button type="submit" class="btn btn-primary">Filtrar por fecha</button>
        </form>

        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Pelicula</th>
                        <th scope="col">Sala</th>
                        <th scope="col">Mas</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($lista_funciones as $registro) {
                    ?>
                        <tr class="">
                            <td scope="row"> <?php echo $registro['id_funcion'] ?> </td>
                            <td> <?php echo $registro['hora_inicio'] ?> </td>
                            <td> <?php echo $registro['fecha'] ?> </td>
                            <td> <?php echo $registro['precio_entrada'] ?> </td>
                            <td> <?php echo $registro['nomb_pelicula'] ?> </td>
                            <td> <?php echo $registro['nomb_sala'] ?> </td>
                            <td>
                                <a name="btneditar" id="" class="btn btn-info" href="editar.php?txtID4=<?php echo $registro['id_funcion'] ?>" role="button">Editar</a> |
                                <a name="btnborrar" id="" class="btn btn-danger" href="index.php?txtID4=<?php echo $registro['id_funcion'] ?>" role="button">Eliminar</a> |
                                <a name="btncomprar" id="" class="btn btn-success" href="comprar.php?txtID4=<?php echo $registro['id_funcion'] ?>" role="button">Comprar</a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>
</div>

<?php include("../../templates/footer.php"); ?>