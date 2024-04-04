<?php
include("../../database.php");

if (isset($_GET['txtID2'])) {
    $txtID2 = isset($_GET['txtID2']) ? $_GET['txtID2'] : "";

    $sentencia = $conexion->prepare("SELECT * FROM actores WHERE id_actor = :id_actor");
    $sentencia->bindParam(":id_actor", $txtID2);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);
    
    $nomb_actor=$registro["nomb_actor"];
}
if ($_POST) {
    
    $txtID2 = isset($_POST['txtID2']) ? $_GET['txtID2'] : "";

    $id_actor = isset($_POST["id_actor"]) ? $_POST["id_actor"] : "";
    $nomb_actor = isset($_POST["nomb_actor"]) ? $_POST["nomb_actor"] : "";

    $sentencia = $conexion->prepare("UPDATE actores SET nomb_actor=:nomb_actor
                                    WHERE id_actor=:id_actor");

    $sentencia->bindParam(":id_actor", $txtID2);
    $sentencia->bindParam(":nomb_actor", $nomb_actor);
    $sentencia->execute();

    header("Location: index.php");
}
?>



<?php include("../../templates/header.php");?>


<div class="card">
    <div class="card-header">
        Datos del actor
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <div class ="mb-3">
                <label for="txtID2" class="form-label">Id Actor</label>
                <input type="text"
                value="<?php echo $txtID2;?>"
                class="form-control" readonly name="txtID2" id="txtID2" aria-describedby="helpId" placeholder="Id actor">
            </div>

            <div class ="mb-3">
                <label for="nomb_actor" class="form-label">Nombre</label>
                <input type="text"
                value="<?php echo $nomb_actor;?>"
                class="form-control" name="nomb_actor" id="nomb_actor" aria-describedby="helpId" placeholder="Nombre">
            </div>

            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a> 
            <button type="submit" class="btn btn-success">Actualizar</button>
            
        </form>
    </div>
</div>




<?php include("../../templates/footer.php");?>