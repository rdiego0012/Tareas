
<!--ventana para Update--->
<div class="modal fade" id="modal_edit_paciente " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
<!---fin ventana Update --->