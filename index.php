<?php
  include ("conexion.php");
  $con= conectar();
  $sql = "SELECT * FROM paciente  WHERE estado_paciente = 1 ";
  $query = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inicio </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>



<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="index.php">Inicio</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link "  href="pacientes.php">Pacientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="medicos.php">Médicos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="consultas.php" tabindex="-1" aria-disabled="true">Consultas</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>



    <div class="container mt-5">
      <h1 class="p-3 mb-2 bg-transparent text-secundary">Bienvenido</h1>        
      
      <div class="container">
  <div class="row">
    <div class="col">
    <div class="card container mt-5" style="width: 19rem;">
  <img src="https://www.pngkit.com/png/full/428-4285926_paciente-y-mdico-en-pantalla-con-resultados-physician.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pacientes</h5>
    <p class="card-text">Aqui podra agregar, actualizar y eliminar un paciente del sistema </p>
    <a href="pacientes.php" class="btn btn-primary">Ver pacientes</a>
  </div>
</div>

    </div>
    <div class="col">     
<div class="card container mt-5" style="width: 25rem;">
  <img src="https://images.vexels.com/media/users/3/151981/isolated/preview/f8863741dba8034b3e1d4809a01c782a-estetoscopio-icono-medico-iconos.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Médicos</h5>
    <p class="card-text">Aqui podra agregar, actualizar y eliminar un mèdico del sistema</p>
    <a href="medicos.php" class="btn btn-primary">Ver Médicos</a>
  </div>
  </div>


    </div>
    <div class="col">      
<div class="card container mt-5" style="width: 22rem;">
  <img src="https://www.atenciondellamadas.net/wp-content/uploads/2019/10/gestion-citas-medicas.svg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Citas</h5>
    <p class="card-text">Aqui podra reservar o reagendar una cita</p>
    <a href="consultas.php" class="btn btn-primary">Ver citas proximas</a>
    </div>
</div>
    </div>

  </div>
</div>




    
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
