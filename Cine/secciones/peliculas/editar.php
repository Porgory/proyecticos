<?php include("../../database.php"); 
if ($_POST) {
    // Obtener los datos del formulario
    $id_actor = isset($_POST["id_actor"]) ? $_POST["id_actor"] : "";
    $nomb_actor = isset($_POST["nomb_actor"]) ? $_POST["nomb_actor"] : "";

    // Preparar la sentencia SQL para la inserción
    $sentencia2 = $conexion->prepare("INSERT INTO actores (id_actor, nomb_actor)
                                    VALUES (:id_actor, :nomb_actor)");

    // Vincular los parámetros
    $sentencia2->bindParam(":id_actor", $id_actor);
    $sentencia2->bindParam(":nomb_actor", $nomb_cliente);
    // Ejecutar la sentencia
    $sentencia2->execute();

    // Redirigir después de la inserción
    header("Location: index.php");
    exit();
 
}
?>

<?php include("../../templates/header.php");?>


<?php include("../../templates/footer.php");?>