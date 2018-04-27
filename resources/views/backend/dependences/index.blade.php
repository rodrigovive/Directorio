@extends('backend.layouts.app')

@section('title',"Dependencias")

@section('after-styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">
@endsection

@section('header')
    @include('backend.dependences.partials.header')
@endsection

@section('content')
  <!-- Errors-->
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  <!-- dependences -->
  <section id="dependences">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Dependencias</h4>
            </div>
          </div>
          <br>
          <table id="dependenceTable" class="table table-striped table-bordered dt-responsive small" style="width: 100%">
            <thead class="thead-inverse">
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Sigla</th>
                <th>Naturaleza</th>
                <th>Jefe</th>
                <th>Telefono</th>
                <th>Anexo</th>
                <th>Categoria</th>
                <th>Dependencia</th>
                <th>Detalles</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Oficina de Sistemas y Informacion</td>
                <td>OSIS</td>
                <td>Control</td>
                <td>Ing. Osco</td>
                <td>2312313</td>
                <td>312321</td>
                <td>Oficina</td>
                <td>X</td>
                <td>
                  <a href="details.html" class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-eye"></i></a>
                  <a href="details.html" class="btn btn-outline-warning btn-sm">
                    <i class="fa fa-pencil"></i></a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Escuela de Ingenieria Informatica y Sistemas</td>
                <td>ESIS</td>
                <td>Control</td>
                <td>Ing. Hinojosa</td>
                <td>123213</td>
                <td>1231231</td>
                <td>Escuela</td>
                <td>FAIN</td>
                <td>
                  <a href="details.html" class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-eye"></i></a>
                  <a href="details.html" class="btn btn-outline-warning btn-sm">
                    <i class="fa fa-pencil"></i></a>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('modal')
  @include('backend.dependences.partials.register')
@endsection

@section('after-scripts')

  <!-- <script src="js/jquery.min.js"></script> -->
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap4.min.js"></script>
  <script type="text/javascript" src="{{asset('js/datatables.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
  <script src="{{asset("js/backend/registerDependence.js")}}"></script>
@endsection