<?php
include("../../database.php");

function buscarPeliculasPorActor($actor) {
    global $conn;

    $sql = "SELECT titulo, genero, añolanzamiento
            FROM peliculas_por_actor
            WHERE nomb_actor = :actor";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':actor', $actor);
    $stmt->execute();

    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $resultados;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $actorBuscado = $_POST["actor"];
    $resultados = buscarPeliculasPorActor($actorBuscado);
}

include("../../templates/header.php");
?>

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
        <h1>Buscar Películas por Actor</h1>
    </header>
    <br>
    <form method="post" action="">
        <label for="actor">Actor:</label>
        <input type="text" name="actor" id="actor" required>
        <button type="submit">Buscar</button>
    </form>

    <?php
    if (isset($resultados)) {
        if (count($resultados) > 0) {
            echo "<h2>Películas protagonizadas por $actorBuscado:</h2>";
            echo "<ul>";
            foreach ($resultados as $pelicula) {
                echo "<li>{$pelicula['titulo']} ({$pelicula['genero']}, {$pelicula['añolanzamiento']})</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No se encontraron películas protagonizadas por $actorBuscado.</p>";
        }
    }
    ?>

</body>

<?php include("../../templates/footer.php");?>
