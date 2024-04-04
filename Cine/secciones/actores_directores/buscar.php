<?php include("../../database.php");?>
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
</head>
<body>
    <header>
        <h1>Buscador de peliculas</h1>
    </header>

    <div class="container-fluid">
        <form class="d-flex">
            <form action="" method="GET">
                <input class="form-control me-2" type="seacrh" placeholder="Ingresa el nombre del actor" name="busqueda"> <br>
                <button class="btn btn-outline-info" type="submit" name="enviar"> <b>Buscar</b> </button>
            </form>
        </form>
    </div>
    <?php
    ?>

<?php include("../../templates/footer.php");?>