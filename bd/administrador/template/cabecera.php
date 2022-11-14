<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     Bootstrap CSS -->
   
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="/css/bootstrap.min.css">
  </head>
  <body>
    <?php $url="http://".$_SERVER['HTTP_HOST']."/sitioweb"?>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">administrador del sistema <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="">inicio</a>
            <a class="nav-item nav-link" href="#">productos</a>           
            <a class="nav-item nav-link" href="#">cerrar</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>">ver sitio web</a>
        </div>
    </nav>
    <div class="container">
        <br/>
        <div class="row">
          