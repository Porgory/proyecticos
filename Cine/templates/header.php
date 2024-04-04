<?php
$url_base="http://localhost/proyecto/";
?>

<!doctype html>
<html lang="en">

<head>
  <title>Cine</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  
  <nav class="navbar navbar-expand navbar-light bg-light">
      <ul class="nav navbar-nav">
          <li class="nav-item">
              <a class="nav-link active" href="<?php echo $url_base;?>" aria-current="page">Inicio <span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/peliculas/">Películas</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/actores/">Actores</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/funciones/">Ver Funciones</a> <!--Info detallada sobre los actores y directores-->
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/directores/">Directores</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/usuarios/">Usuarios</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/administrador/">Administracion de fondos</a>
          </li>
      </ul>
  </nav>
  
  <main class="container">