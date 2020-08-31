<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php RUTA_URL?>css/style.css">
    <link rel="stylesheet" href="<?php RUTA_URL?>css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Peta&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    
<nav style="font-family: 'Lato';" class="navbar navbar-expand-lg navbar-light bg-dark text-light">
  <a class="navbar-brand text-light" href="<?php RUTA_APP?>/controladores/Paginas.php">
    <img src="img/logo.png" width="60" height="40" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link text-light" href="#">Biblioteca <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Ofertas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Descubre</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>


