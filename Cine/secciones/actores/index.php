<?php
include("../../database.php");

if (isset($_GET['txtID2'])) {
    $txtID2 = isset($_GET['txtID2']) ? $_GET['txtID2'] : "";

    // Preparar la sentencia SQL para la eliminación
    $sentencia = $conexion->prepare("DELETE FROM actores WHERE id_actor = :id_actor");

    // Vincular el parámetro
    $sentencia->bindParam(":id_actor", $txtID2);

    // Ejecutar la sentencia
    $sentencia->execute();

    // Redirigir después de la eliminación
    header("Location: index.php");
    exit();
}

$sentencia = $conexion->prepare("SELECT
actores.id_actor,
actores.nomb_actor,
array_agg(peliculas.titulo) AS peliculas,
array_agg(actua.personaje) AS personajes
FROM
actores
LEFT JOIN actua ON actores.id_actor = actua.id_actor
LEFT JOIN peliculas ON actua.id_pelicula = peliculas.id_pelicula
GROUP BY
actores.id_actor, actores.nomb_actor;
");
$sentencia->execute();
$lista_actores = $sentencia->fetchAll(PDO::FETCH_ASSOC);

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
    <h1>Actores en cartelera</h1>
</header>
<br/>
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-info" href="crear.php" role="button">Contratar actor</a>
        <a name="" id="" class="btn btn-primary" href="actua.php" role="button">Contratar actor para pelicula</a>
    </div>
    <div class="card-body">

        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Películas</th>
                        <th scope="col">Personajes</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                foreach($lista_actores as $registro){?>
                    <tr class="">
                        <td scope="row"> <?php echo $registro['id_actor'] ?> </td>
                        <td> <?php echo $registro['nomb_actor'] ?> </td>
                        <td> <?php echo $registro['peliculas'] ?> </td>
                        <td> <?php echo $registro['personajes'] ?> </td>
                        <td>
                            <a name="btneditar" id="" class="btn btn-info" href="editar.php?txtID2=<?php echo $registro['id_actor']?>" role="button">Editar</a> |
                            <a name="btnborrar" id="" class="btn btn-danger" href="index.php?txtID2=<?php echo $registro['id_actor']?>" role="button">Eliminar</a>
                        </td>
                    </tr>

                <?php }?>

                </tbody>
            </table>
        </div>

    </div>
</div>

<?php include("../../templates/footer.php");?>