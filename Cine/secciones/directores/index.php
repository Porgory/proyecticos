<?php
include("../../database.php");

if (isset($_GET['txtID1'])) {
    $txtID1 = isset($_GET['txtID1']) ? $_GET['txtID1'] : "";

    // Preparar la sentencia SQL para la eliminación
    $sentencia = $conexion->prepare("DELETE FROM directores WHERE id_director = :id_director");

    // Vincular el parámetro
    $sentencia->bindParam(":id_director", $txtID1);

    // Ejecutar la sentencia
    $sentencia->execute();

    // Redirigir después de la eliminación
    header("Location: index.php");
    exit();
}
$sentencia = $conexion->prepare("SELECT * FROM directores");
$sentencia->execute();
$lista_de_directores = $sentencia->fetchAll(PDO::FETCH_ASSOC);

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
<body>
    <header>
        <h1>Bienvenido al apartado de Directores</h1>
    </header>
    <div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Director</a>
    </div>
    <div class="card-body">

    <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id del Director</th>
                    <th scope="col">Nombre del director</th>
                    <th scope="col">Mas</th>
                </tr>
            </thead>
            <tbody>

            <?php
            foreach($lista_de_directores as $registro){?>
                <tr class="">
                    <td scope="row"> <?php echo $registro['id_director'] ?> </td>
                    <td> <?php echo $registro['nomb_director'] ?> </td>
                    <td>
                        <a name="btneditar" id="" class="btn btn-info" href="editar.php?txtID1=<?php echo $registro['id_director']?>" role="button">Editar</a> |
                        <a name="btnborrar" id="" class="btn btn-danger" href="index.php?txtID1=<?php echo $registro['id_director']?>" role="button">Eliminar</a> 
                        
                    </td>
                </tr>
            
            <?php }?>
            

            </tbody>
        </table>
    </div>
    

    </div>
</div>
    
</body>

<?php include("../../templates/footer.php");?>