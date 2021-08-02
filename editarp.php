<?php
 include("conexion.php");
 $con= conectar();
 $id = $_GET['id_paciente'];
 $sql = "SELECT * FROM paciente WHERE id_paciente ='$id'";
 $query = mysqli_query($con,$sql);

 $row = mysqli_fetch_array($query);
 ?>



<div class="modal" tabindex="-1" id="modaleditar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="container mt-5">
                    <form action="updatep.php" method="POST">                      
                        <input type="hidden" class="form-control mb-4" name="id_paciente" value="<?php echo $row['id_paciente']?>">     
                        <input type="text" class="form-control mb-4" name="nombres_paciente" value="<?php echo $row['nombres_paciente']?>">
                        <input type="text" class="form-control mb-4" name="apellidos_paciente" value="<?php echo $row['apellidos_paciente'] ?>">
                        <input type="text" class="form-control mb-4" name="edad_paciente" value="<?php echo $row['edad_paciente'] ?>">
                        <input type="text" class="form-control mb-4" name="direccion_paciente" value="<?php echo $row['direccion_paciente'] ?>">
                        <input type="text" class="form-control mb-4" name="telefono_paciente" value="<?php echo $row['telefono_paciente'] ?>">
                        <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>