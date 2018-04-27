@extends('backend.layouts.app')

@section('title', "Dashboard")

@section('content')
    <!-- POSTS -->
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Ultimos cambios realizados</h4>
                        </div>
                        <table class="table table-striped" id="dependenceTabla">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>Dato</th>
                                    <th>Categoria</th>
                                    <th>Fecha</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Dependencia</td>
                                    <td>Edicion</td>
                                    <td>Abril 04, 2018</td>
                                    <td>
                                        <a href="details.html" class="btn btn-secondary">
                                            <i class="fa fa-angle-double-right"></i> Detalles</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>Personal</td>
                                    <td>Agregado</td>
                                    <td>Abril 04, 2018</td>
                                    <td>
                                        <a href="details.html" class="btn btn-secondary">
                                            <i class="fa fa-angle-double-right"></i> Detalles</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center card-primary text-white mb-3">
                        <div class="card-block">
                            <h3>Dependencias</h3>
                            <h1 class="display-4">
                                <i class="fa fa-pencil"></i> 6</h1>
                            <a href="dependences.html" class="btn btn-sm btn-outline-secondary text-white">View</a>
                        </div>
                    </div>

                    <div class="card text-center card-success text-white mb-3">
                        <div class="card-block">
                            <h3>Personal</h3>
                            <h1 class="display-4">
                                <i class="fa fa-folder-open-o"></i> 4</h1>
                            <a href="personal.html" class="btn btn-sm btn-outline-secondary text-white">View</a>
                        </div>
                    </div>

                    <div class="card text-center card-warning text-white mb-3">
                        <div class="card-block">
                            <h3>Categorias</h3>
                            <h1 class="display-4">
                                <i class="fa fa-users"></i> 6</h1>
                            <a href="types.html" class="btn btn-sm btn-outline-secondary text-white">View</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('modal')
        
    @include('backend.dependences.partials.register')

    @include('backend.personal.partials.register')

    @include('backend.types.partials.register')
@endsection 