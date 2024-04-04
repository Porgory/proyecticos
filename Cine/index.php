<?php

include("database.php");
$sentencia = $conexion->prepare("SELECT * FROM peliculas LIMIT 5");
$sentencia->execute();
$lista_peliculas = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// Para todas las películas
$sentencia2 = $conexion->prepare("SELECT * FROM peliculas");
$sentencia2->execute();
$lista_todas_peliculas = $sentencia2->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include("templates/header.php"); ?>

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

    #carousel-container,
    .movie-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 1em;
    }

    .movie-card {
        width: 250px;
        margin-bottom: 20px;
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

    ul.movie-list img {
        width: 20%;
        height: auto;
        border-bottom: 1px solid #ddd;
    }
</style>

<body>
    <header>
        <h1>Bienvenido al Cine</h1>
    </header>

    <br>
    <h2>Cartelera semanal</h2>
    <div id="carousel-container">
        <?php foreach ($lista_peliculas as $pelicula): ?>
            <div class="movie-card">
                <img href="" src="helpings/<?= $pelicula['foto'] ?>" alt="<?= $pelicula['titulo'] ?>">
                <div class="movie-info">
                    <h4><?= $pelicula['titulo'] ?></h4>
                    <p><?= $pelicula['genero'] ?></p>
                    <p><?= $pelicula['duracion'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        <a name="btneditar" id="" class="btn btn-info" href="secciones/funciones/index.php?txtID4=<?php echo $registro['id_funcion']?>" role="button">Mirar Funciones...</a>
    </div>

    <br>
    <h2>Todas las películas</h2>
    <div class="movie-grid">
        <?php foreach ($lista_todas_peliculas as $pelicula): ?>
            <div class="movie-card">
                <img src="helpings/<?= $pelicula['foto'] ?>" alt="<?= $pelicula['titulo'] ?>">
                <div class="movie-info">
                    <h4><?= $pelicula['titulo'] ?></h4>
                    <p>Categoría: <?= $pelicula['genero'] ?></p>
                    <p>Duración: <?= $pelicula['duracion'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

<?php include("templates/footer.php"); ?>
