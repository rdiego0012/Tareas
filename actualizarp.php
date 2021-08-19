<?php
 include("conexion.php");
 $con= conectar();
 $id = $_GET['id_paciente'];
 $sql = "SELECT * FROM paciente WHERE id_paciente ='$id'";
 $query = mysqli_query($con,$sql);

 $row = mysqli_fetch_array($query);
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Paciente</title>
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
          <a class="nav-link "  href="index.php">Pacientes</a>
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
    <form action="updatep.php" method="POST">                      
                <input type="hidden" class="form-control mb-4" name="id_paciente" value="<?php echo $row['id_paciente']?>">     
                <input type="text" class="form-control mb-4" name="nombres_paciente" value="<?php echo $row['nombres_paciente']?>">
                <input type="text" class="form-control mb-4" name="apellidos_paciente" value="<?php echo $row['apellidos_paciente'] ?>">
                <input type="text" class="form-control mb-4" name="edad_paciente" value="<?php echo $row['edad_paciente'] ?>">
                <input type="text" class="form-control mb-4" name="direccion_paciente" value="<?php echo $row['direccion_paciente'] ?>">
                <input type="text" class="form-control mb-4" name="telefono_paciente" value="<?php echo $row['telefono_paciente'] ?>">
                <input type="text" class="form-control mb-4" name="ocupacion_paciente" value="<?php echo $row['ocupacion_paciente'] ?>">
                <input type="text" class="form-control mb-4" name="genero_paciente" value="<?php echo $row['genero_paciente'] ?>">
                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>
    </div>
</body>
</html>