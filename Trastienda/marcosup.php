<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">  
    <title>GESTIÓN DE ALMACEN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="estilos/logoIESTuraniana.jpg">
    
<body>
  <div class="p-3 bg-success text-white text-center">          
          <h4>TRASTIENDA DE LA GESTIÓN DE ALMACEN</h4>
  </div>
  <nav class="navbar navbar-expand-sm bg-dark justify-content-center p-1">
      <ul class="navbar-nav">
        <li class="nav-item">
          <p><a href="index.php">INICIO</a></p>
        </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
          Vistas</a>
        <ul class="dropdown-menu bg-dark">
          <li><a class="dropdown-item text-warning" href="ValorAlmacen.php">CÓSTE DEL ALMACÉN</a></li>
          <li><a class="dropdown-item text-info" href="#">VALOR POR PAÍS</a></li>
          <li><a class="dropdown-item text-info" href="#">PRODUCTOS POR PAÍS</a></li>

        </ul>
        </li>


        <li class="nav-item">
          <p><a href="GProductos.php">PRODUCTOS</a></p>
        </li>
        <li class="nav-item">          
          <p><a href="GProveedores.php">PROVEEDORES</a></p>
        </li>
        <li class="nav-item">          
          <p><a href="Ayuda.php">AYUDA</a></p>
        </li>
  </ul>   
  </nav>
<?php
	// Invocamos el archivo con la conexión a la base de datos
	require_once('conexion.php');
?>
  
