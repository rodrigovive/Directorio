
  <!-- ADD MANAGER MODAL -->

  <div class="modal fade" id="addManagerModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="addManagerModalLabel">Agregar personal</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="name-manager" class="form-control-label">Nombre</label>
              <input type="text" name="name-manager" class="form-control">
            </div>
            <div class="form-group">
              <label for="lastname-manager" class="form-control-label">Apellidos</label>
              <input type="text" name="lastname-manager" class="form-control">
            </div>
            <div class="form-group">
              <label for="dni-manager" class="form-control-label">DNI</label>
              <input type="text" name="dni-manager" class="form-control">
            </div>

            <div class="form-group">
              <label for="email-manager" class="form-control-label">Email</label>
              <input type="text" name="email-manager" class="form-control">
            </div>

            <div class="form-group">
              <label for="phone-manager" class="form-control-label">Telefono</label>
              <input type="text" name="phone-manager" class="form-control">
            </div>
            <div class="form-group">
              <label for="cellphone-manager" class="form-control-label">Celular</label>
              <input type="text" name="cellphone-manager" class="form-control">
            </div>

            <div class="form-group">
              <label for="occupation-manager" class="form-control-label">Cargo</label>
              <select name="occupation-manager" class="form-control">
                @foreach($occupations as $occupation)
                  <option value="{{$occupation->id}}">{{$occupation->name}}</option>
                @endforeach
              </select>
            </div>
  
            <div class="form-group">
              <label for="dependence-manager" class="form-control-label">Dependencia</label>
              <select name="dependence-manager" class="form-control">
                @foreach($dependences as $dependence)
                  <option value="{{$dependence->id}}">{{$dependence->name}}</option>
                @endforeach
              </select>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button class="btn btn-success" id="submit-manager" data-dismiss="modal">Agregar personal</button>
        </div>
      </div>
    </div>
  </div>