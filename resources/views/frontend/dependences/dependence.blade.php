@extends('frontend.layouts.app')

@section('content')

<section id="about" class="py-5 text-center bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <table id="dependenceTable" class="table table-striped table-bordered dt-responsive small" style="width: 100%">
                    <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Sigla</th>
                        <th>Email</th>
                        <th>Naturaleza</th>
                        <th>Anexo</th>
                        <th>Categoria</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dependences as $key => $dependence)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$dependence->name}}</td>
                            <td>{{$dependence->acronym}}</td>
                            <td>{{$dependence->email}}</td>
                            <td>{{$dependence->nature->name}}</td>
                            <td>{{$dependence->annex}}</td>
                            <td>{{$dependence->category->name}}</td>
    
                        </tr>
                        @endforeach
                    
                    
                    
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</section>
@endsection