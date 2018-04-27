<!-- ADD CATEGORY MODAL -->

<div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="addCategoryModalLabel">Agregar Categoria de Dependencia</h5>
                <button class="close" data-dismiss="modal">
                <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="title" class="form-control-label">Nombre</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-warning" id="submit-category" data-dismiss="modal">Agregar categoria</button>
            </div>
        </div>
    </div>
</div>