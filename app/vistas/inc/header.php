<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php RUTA_URL?>css/all.css">
    <link rel="stylesheet" href="<?php RUTA_URL?>css/style.css">
    <link rel="stylesheet" href="<?php RUTA_URL?>css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Peta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link href='https://css.gg/user.css' rel='stylesheet'>

    <title>Document</title>
</head>
<body>
    
<nav style="font-family: 'Lato';" class="navbar navbar-expand-lg navbar-light bg-dark text-light">
  <a class="navbar-brand text-light" href="<?php RUTA_URL?>Paginas">
    <img src="img/logo.png" width="60" height="40" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    
    <form class="form-inline my-2 my-lg-0 ml-2">
      <input class="form-control mr-sm-2" type="search" placeholder="">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
    </form>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active ml-3 ">
          <a class="nav-link text-light bold" href="<?php RUTA_URL?>bibliotecaController">Biblioteca <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ml-3">
          <a class="nav-link text-light bold" href="#">Ofertas</a>
        </li>
        <li class="nav-item ml-3">
          <a class="nav-link text-light bold" href="#">Descubre</a>
        </li>
    </ul>
  </div>
</nav>


