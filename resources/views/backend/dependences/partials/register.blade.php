<!-- ADD DEPENDENCE MODAL -->
<div class="modal fade" id="addDependenceModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addDependenceModalLabel">Agregar Dependencia</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method='POST' action={{route('backend.dependence.build')}} enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name-dependence" class="form-control-label">Nombre de la dependencia</label>
                        <input type="text" name="name-dependence" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="acronym-dependence" class="form-control-label">Siglas de la dependencia</label>
                        <input type="text" name="acronym-dependence" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nature-dependence" class="form-control-label">Natualeza de la dependencia</label>
                        <select class="form-control" name="nature-dependence">
                            @foreach($natures as $nature)
                                <option value="{{$nature->id}}">{{$nature->name}}</option>
                            @endforeach
                        
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email-dependence" class="form-control-label">Email de la dependencia</label>
                        <input type="text" name="email-dependence" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone-dependence" class="form-control-label">Telefono de la dependencia</label>
                        <input type="text" name="phone-dependence" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="annex-dependence" class="form-control-label">Anexo de la dependencia</label>
                        <input type="text" name="annex-dependence" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="category-dependence" class="form-control-label">Categoria</label>
                        <select class="form-control" name="category-dependence">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dependence-dependence" class="form-control-label">Dependende</label>
                        <select name="dependence-dependence" class="form-control">
                            <option>OSIS</option>
                            <option>Comedor</option>
                            <option>Facultad de Ingenieria</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="description-dependence">Descripcion de la dependencia</label>
                        <textarea name="description-dependence" class="form-control"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="submit" id="submit-dependence" data-dismiss="modal">Agregar Dependencia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>