<?php
include("../../database.php");
$sentencia = $conexion->prepare("SELECT * FROM peliculas");
$sentencia->execute();
$lista_peliculas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
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
        <h1>Bienvenido a las peliculas del Peliculas</h1>
    </header>
<br/>
    <div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Pelicula</a>
    </div>
    <div class="card-body">

    <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Duracion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>


            <?php
            foreach($lista_peliculas as $registro){?>
                <tr class="">
                    <td scope="row"> <?php echo $registro['titulo'] ?> </td>
                    <td> <?php echo $registro['genero'] ?> </td>
                    <td> <?php echo $registro['duracion'] ?> </td>
                    <td>
                        <a name="" id="" class="btn btn-primary" href="a" role="button">Comprar</a> | 
                        <a name="" id="" class="btn btn-danger" href="a" role="button">Eliminar</a>
                        
                    </td>
                </tr>
            
            <?php }?>

            </tbody>
        </table>
    </div>
    

    </div>
</div>

<?php include("../../templates/footer.php");?>