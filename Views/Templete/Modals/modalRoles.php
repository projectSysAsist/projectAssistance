<!-- Modal -->
<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Nuevo Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="tile-body">
              <form id="formRol" name="formRol"method="post">
                <div class="form-group">
                  <label class="control-label">Nombre</label>
                  <input class="form-control" name="txtNombre" id="txtNombre" placeholder="" type="text" placeholder="Enter full name">
                </div>
  
                <div class="form-group">
                  <label class="control-label">Descripción</label>
                  <textarea class="form-control" name="txtDescripcion" id="txtDescripcion" placeholder="" rows="2" placeholder="Ingresa la descripción"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleSelect1" name="listStatus" id="listStatus" placeholder="">Estado</label>
                    <select class="form-control" id="exampleSelect1">
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                    </select>
                  </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                
              </form>
            </div>
      <!---->
      </div>
    </div>
  </div>
</div>