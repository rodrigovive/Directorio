@extends('frontend.layouts.app')

@section('content')

<section id="about" class="py-5 text-center bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <table id="dependenceTable" class="table table-striped table-bordered dt-responsive small" style="width: 100%">
                    <thead class="thead-inverse">
                    <tr>
                        <th>Nombre</th>
                        <th>Sigla</th>
                        <th>Naturaleza</th>
                        <th>Jefe</th>
                        <th>Telefono</th>
                        <th>Anexo</th>
                        <th>Categoria</th>
                        <th>Dependencia</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Oficina de Sistemas y Informacion</td>
                        <td>OSIS</td>
                        <td>Control</td>
                        <td>Ing. Osco</td>
                        <td>2312313</td>
                        <td>312321</td>
                        <td>Oficina</td>
                        <td>X</td>
                    
                    </tr>
                    <tr>
                        <td>Escuela de Ingenieria Informatica y Sistemas</td>
                        <td>ESIS</td>
                        <td>Control</td>
                        <td>Ing. Hinojosa</td>
                        <td>123213</td>
                        <td>1231231</td>
                        <td>Escuela</td>
                        <td>FAIN</td>
                    
                    </tr>
                    
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</section>
@endsection