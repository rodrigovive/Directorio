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
                        <th>Acronimo</th>
                        <th>Email</th>
                        <th>Anexo</th>
                    </tr>
                    </thead>
                    
                </table>
                
            </div>
        </div>
    </div>
</section>
@endsection

