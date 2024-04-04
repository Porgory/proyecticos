<?php
include("../../database.php");

if (isset($_GET['txtID5'])) {
    $txtID5 = isset($_GET['txtID5']) ? $_GET['txtID5'] : "";

    // Preparar la sentencia SQL para la eliminación
    $sentencia = $conexion->prepare("DELETE FROM salas WHERE id_sala = :id_sala");

    // Vincular el parámetro
    $sentencia->bindParam(":id_sala", $txtID5);

    // Ejecutar la sentencia
    $sentencia->execute();

    // Redirigir después de la eliminación
    header("Location: index.php");
    exit();
}
$sentencia = $conexion->prepare("SELECT * FROM salas");
$sentencia->execute();
$lista_salas = $sentencia->fetchAll(PDO::FETCH_ASSOC);

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
    <h1>Salas creadas</h1>
</header>
<br/>
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Crear Salas</a>
    </div>
    <div class="card-body">

    <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id de la sala</th>
                    <th scope="col">Nombre de la sala</th>
                    <th scope="col">Capacidad</th>
                    <th scope="col">Mas</th>
                </tr>
            </thead>
            <tbody>

            <?php
            foreach($lista_salas as $registro){?>
                <tr class="">
                    <td scope="row"> <?php echo $registro['id_sala'] ?> </td>
                    <td> <?php echo $registro['nomb_sala'] ?> </td>
                    <td> <?php echo $registro['capacidad'] ?> </td>
                    <td>
                        <a name="btneditar" id="" class="btn btn-info" href="editar.php?txtID5=<?php echo $registro['id_sala']?>" role="button">Editar</a> |
                        <a name="btnborrar" id="" class="btn btn-danger" href="index.php?txtID5=<?php echo $registro['id_sala']?>" role="button">Eliminar</a> 
                        
                    </td>
                </tr>
            
            <?php }?>
            

            </tbody>
        </table>
    </div>
    

    </div>
</div>

<?php include("../../templates/footer.php");?>