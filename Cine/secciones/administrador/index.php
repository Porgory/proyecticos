<?php
include("../../database.php");

$sentencia = $conexion->prepare("SELECT
                        fecha,
                        SUM(precio_asiento) AS monto_diario
                        FROM
                        funciones
                        JOIN ventafuncion ON funciones.id_funcion = ventafuncion.id_funcion
                        JOIN ventas ON ventafuncion.id_venta = ventas.id_venta
                        JOIN asientos ON ventas.id_asiento = asientos.id_asiento
                        GROUP BY
                        fecha;");
$sentencia->execute();
$lista_clientes = $sentencia->fetchAll(PDO::FETCH_ASSOC);

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
    <h1>Dinero del cine</h1>
</header>
<br/>
<div class="card">
    <div class="card-body">

    <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Fecha por día</th>
                    <th scope="col">Monto de dinero recogido</th>
                </tr>
            </thead>
            <tbody>

            <?php
            foreach($lista_clientes as $registro){?>
                <tr class="">
                    <td scope="row"> <?php echo $registro['fecha'] ?> </td>
                    <td> <?php echo $registro['monto_diario'] ?> </td>
                </tr>
            
            <?php }?>

            </tbody>
        </table>
    </div>
    
    </div>
</div>

<?php include("../../templates/footer.php");?>