@extends('backend.layouts.app')

@section('title','Tipos')

@section('after-styles')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">
@endsection

@section('header')
    @include('backend.types.partials.header')
@endsection

@section('content')
  <!-- POSTS -->
  <section id="users">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Categoria</h4>
            </div>
          </div>
          <br>
          <table id="dependenceTable" class="table table-striped table-bordered dt-responsive text-center" style="width: 100%">
            <thead class="thead-inverse">
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">Nombre</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Oficina</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Facultad</td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </section>
@endsection

@section('modal')
  @include('backend.types.partials.register')
@endsection

@section('after-scripts')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
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