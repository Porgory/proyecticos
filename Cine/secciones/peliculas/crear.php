<?php
include("../../database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pelicula = isset($_POST["id_pelicula"]) ? $_POST["id_pelicula"] : "";
    $titulo = isset($_POST["titulo"]) ? $_POST["titulo"] : "";
    $genero = isset($_POST["genero"]) ? $_POST["genero"] : "";
    $duracion = isset($_POST["duracion"]) ? $_POST["duracion"] : "";
    $añolanzamiento = isset($_POST["añolanzamiento"]) ? $_POST["añolanzamiento"] : "";
    $id_director = isset($_POST["id_director"]) ? $_POST["id_director"] : "";

    // Procesar el archivo de imagen (caratula)
    $foto_nombre = isset($_FILES["foto"]['name']) ? $_FILES["foto"]['name'] : "";
    $foto_temporal = isset($_FILES["foto"]['tmp_name']) ? $_FILES["foto"]['tmp_name'] : "";

    // Ruta donde se guardará la foto
    $ruta_foto = "helpings/" . $foto_nombre;

    // Mover la foto a la carpeta deseada
    move_uploaded_file($foto_temporal, $ruta_foto);

    // Preparar la sentencia SQL para la inserción
    $sentencia = $conexion->prepare("INSERT INTO peliculas (id_pelicula, titulo, genero, duracion, añolanzamiento, foto, id_director) 
                                    VALUES (:id_pelicula, :titulo, :genero, :duracion, :añolanzamiento, :foto, :id_director)");

    // Vincular los parámetros
    $sentencia->bindParam(":id_pelicula", $id_pelicula);
    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":genero", $genero);
    $sentencia->bindParam(":duracion", $duracion);
    $sentencia->bindParam(":añolanzamiento", $añolanzamiento);
    $sentencia->bindParam(":foto", $ruta_foto); // Cambio aquí
    $sentencia->bindParam(":id_director", $id_director);

    try {
        $sentencia->execute();
        header("Location: index.php");
        exit();
    } catch (PDOException $ex) {
        echo "Error al insertar la película: " . $ex->getMessage();
    }
}
?>

<?php include("../../templates/header.php");?>


<div class="card">
    <div class="card-header">
        Datos de la pelicula  
    </div>

    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class ="mb-3">
                <label for="id_pelicula" class="form-label">Id Pelicula</label>
                <input type="text"
                class="form-control" name="id_pelicula" id="id_pelicula" aria-describedby="helpId" placeholder="Id Pelicula">
            </div>

            <div class ="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text"
                class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Titulo">
            </div>

            <div class ="mb-3">
                <label for="genero" class="form-label">Genero</label>
                <input type="text"
                class="form-control" name="genero" id="genero" aria-describedby="helpId" placeholder="Genero">
            </div>

            <div class ="mb-3">
                <label for="duracion" class="form-label">Duracion</label>
                <input type="text"
                class="form-control" name="duracion" id="duracion" aria-describedby="helpId" placeholder="Duracion">
            </div>

            <div class ="mb-3">
                <label for="añolanzamiento" class="form-label">Año de lanzamiento</label>
                <input type="text"
                class="form-control" name="añolanzamiento" id="añolanzamiento" aria-describedby="helpId" placeholder="Año de lanzamiento">
            </div>

            <div class ="mb-3">
                <label for="id_director" class="form-label">Id del director</label>
                <input type="text"
                class="form-control" name="id_director" id="id_director" aria-describedby="helpId" placeholder="Id del director">
            </div>

            <div class ="mb-3">
                <label for="foto" class="form-label">Caratula</label>
                <input type="file"
                class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="Caratula">
            </div>
            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a> 
            <button type="submit" class="btn btn-success">Agregar pelicula</button>

        </form>
    </div>
</div>




<?php include("../../templates/footer.php");?>