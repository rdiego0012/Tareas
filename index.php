<?php
 include ("conexion.php");
 $con= conectar();
 $sql = "SELECT * FROM paciente";
 $query = mysqli_query($con,$sql);
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Clinica </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div>
    <div  id="miModal" class="modal fade" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ingreso de Pacientes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="insertp.php" method="POST" >                
                <input type="text" class="form-control mb-3" name="nombres_paciente" placeholder="Nombres">
                <input type="text" class="form-control mb-3" name="apellidos_paciente" placeholder="Apellidos">
                <input type="text" class="form-control mb-3" name="edad_paciente" placeholder="Edad">
                <input type="text" class="form-control mb-3" name="direccion_paciente" placeholder="Dirección">
                <input type="text" class="form-control mb-3" name="telefono_paciente" placeholder="Teléfono">                           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>        
        <input type="submit"  class="btn btn-primary btn-block" >
        </form>
      </div>
    </div>
  </div>
</div>
<div>


<div class="modal fade" id="modal_edit_paciente<?php echo $row['id_paciente']; ?>" tabindex="-1" rol="dialog" aria-hidden="true" aria-labelledby="">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="updatep.php">
        <input type="hidden" name="id" value="<?php echo $dataCliente['id_paciente']; ?>">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombres:</label>
                  <input type="text" name="nombre" class="form-control" value="<?php echo $dataCliente['nombres_paciente']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Apellidos:</label>
                  <input type="email" name="correo" class="form-control" value="<?php echo $dataCliente['apellidos_paciente']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Edad:</label>
                  <input type="number" name="celular" class="form-control" value="<?php echo $dataCliente['edad_paciente']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Direccion:</label>
                  <input type="number" name="celular" class="form-control" value="<?php echo $dataCliente['direccion_paciente']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Telefono:</label>
                  <input type="number" name="celular" class="form-control" value="<?php echo $dataCliente['telefono_paciente']; ?>" required="true">
                </div>                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>
    </div>
  </div>
</div>


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
      <h1 class="p-3 mb-2 bg-transparent text-secundary">Pacientes</h1>
        <div class="row">
          <!--ventana para Update
            <div class="col-md-4">
          
            <form action="insertp.php" method="POST" >                
                <input type="text" class="form-control mb-3" name="nombres_paciente" placeholder="Nombres">
                <input type="text" class="form-control mb-3" name="apellidos_paciente" placeholder="Apellidos">
                <input type="text" class="form-control mb-3" name="edad_paciente" placeholder="Edad">
                <input type="text" class="form-control mb-3" name="direccion_paciente" placeholder="Dirección">
                <input type="text" class="form-control mb-3" name="telefono_paciente" placeholder="Teléfono">
                <input type="submit" class="btn btn-primary btn-block" >
            </form>
            </div>--->
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#miModal"> Agregar</button>
            <div class="row justify-content-md-center"> 
            <div class="col-md-8">
            <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Edad</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th> </th>
                <th></th>
                </tr>
            </thead>  
            <tbody>
                <?php 
                while ($row = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td> <?php echo $row['id_paciente'] ?> </td>
                    <td> <?php echo $row['nombres_paciente'] ?> </td>
                    <td> <?php echo $row['apellidos_paciente'] ?> </td>
                    <td> <?php echo $row['edad_paciente'] ?> </td>
                    <td> <?php echo $row['direccion_paciente'] ?> </td>
                    <td> <?php echo $row['telefono_paciente'] ?> </td>
                    <td> <a href="actualizarp.php?id_paciente=<?php echo $row['id_paciente'] ?>" class="btn btn-danger">Editar</a></td>                                     
                </tr>                             
                <?php
                }
                ?>                
            </tbody>                     
            </table>
           
            <a href="reporte.php" class="btn btn-secondary">Generar Reporte</a>
                        <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mt-5">
                            <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                        </nav>
            </div>
        </div>
        </div>
    </div>

 <!-- Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
