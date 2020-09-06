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
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
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
          <a class="nav-link text-light bold" href="<?php RUTA_URL?>bibliotecaController">
            Ofertas
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-dash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                <path fill-rule="evenodd" d="M6 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
            </svg>
          </a>
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


