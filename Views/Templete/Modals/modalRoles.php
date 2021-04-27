
<!-- Modal -->
<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    

      
        
          <div class="tile">
            <h3 class="tile-title">Registrar</h3>
            <div class="tile-body">

              <form class="form-horizontal" id="formRol" name="formRol">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>

                <div class="form-group row">
                  <label class="control-label col-md-3">Nombre</label>
                  <div class="col-md-8">
                    <input class="form-control" id="txtNombre" name="txtNombre" type="text" placeholder="Ingrese el rol" required="">
                  </div>

                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Email</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="email" placeholder="Enter email address">
                  </div>

                </div>
                  <div class="form-group row">
                    <label class="control-label col-md-3">Descripción</label>
                    <div class="col-md-8">
                      <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="2" placeholder="Descripción del rol" required=""></textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleSelect1">Estado</label>
                      <select class="form-control" id="listStatus" name="listStatus" required="">
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                      </select>
                    </div>

                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-3">Gender</label>
                    <div class="col-md-9">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gender">Male
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gender">Female
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="control-label col-md-3">Identity Proof</label>
                    <div class="col-md-8">
                      <input class="form-control" type="file">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-3">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">I accept the terms and conditions
                        </label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

              <div class="tile-footer">
                <div class="row">
                  <div class="col-md-8 col-md-offset-3">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                  </div>
                </div>
              </div>
            </div>
          
        
      
    
  </div>
</div>