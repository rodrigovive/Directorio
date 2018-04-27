<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>
                    <i class="fa fa-gear"></i> @yield('title')</h1>
            </div>
        </div>
    </div>
</header>

<!-- ACTIONS -->
<section id="actions" class="py-4 mb-4 bg-faded">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addDependenceModal">
                    <i class="fa fa-plus"></i> Agregar dependencia</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addManagerModal">
                    <i class="fa fa-plus"></i> Agregar personal</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addCategoryModal">
                    <i class="fa fa-plus"></i> Agregar categoria</a>
            </div>
        </div>
    </div>
</section>