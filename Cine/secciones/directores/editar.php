<?php
include("../../database.php");

if (isset($_GET['txtID1'])) {
    $txtID1 = isset($_GET['txtID1']) ? $_GET['txtID1'] : "";

    $sentencia = $conexion->prepare("SELECT * FROM directores WHERE id_director = :id_director");
    $sentencia->bindParam(":id_director", $txtID1);
    $sentencia->execute();
    $registro = $sentencia->fetch(PDO::FETCH_LAZY);
    $nomb_director = $registro["nomb_director"];
}

if ($_POST) {
   
    $txtID1 = isset($_POST['txtID1']) ? $_POST['txtID1'] : "";

    $id_director = isset($_POST["id_director"]) ? $_POST["id_director"] : "";
    $nomb_director = isset($_POST["nomb_director"]) ? $_POST["nomb_director"] : "";

    $sentencia = $conexion->prepare("UPDATE directores SET nomb_director=:nomb_director
                                    WHERE id_director=:id_director");

    $sentencia->bindParam(":id_director", $txtID1);
    $sentencia->bindParam(":nomb_director", $nomb_director);
    $sentencia->execute();

    header("Location: index.php");
}
?>

<?php include("../../templates/header.php"); ?>

<div class="card">
    <div class="card-header">
        Datos del Director
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

          <div class ="mb-3">
                <label for="id_director" class="form-label">Id del Director</label>
                <input type="text"
                value="<?php echo $txtID1;?>"
                class="form-control" name="id_director" id="id_director" aria-describedby="helpId" placeholder="Id Cliente">
            </div>

            <div class ="mb-3">
                <label for="nomb_director" class="form-label">Nombre</label>
                <input type="text"
                value="<?php echo $nomb_director;?>"
                class="form-control" name="nomb_director" id="nomb_director" aria-describedby="helpId" placeholder="Nombre">
            </div>

            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>
            <button type="submit" class="btn btn-success">Actualizar</button>

        </form>
    </div>
</div>

<?php include("../../templates/footer.php"); ?>
