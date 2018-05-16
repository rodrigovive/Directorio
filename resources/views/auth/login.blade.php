<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <title>Dashboard Directorio</title>
</head>
<body>

<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><i class="fa fa-user"></i> Directorio Administrador</h1>
            </div>
        </div>
    </div>
</header>

<!-- ACTIONS -->
<section id="actions" class="py-4 mb-4 bg-faded">
    <div class="container">
        <div class="row">
        
        </div>
    </div>
</section>

<!-- LOGIN -->
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Inicio de Sesion</h4>
                    </div>
                    <div class="card-block">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="email" class="form-control-label">Email</label>
                                <input id="email" type="email" class="form-control" name="email" required autofocus>
                                
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-3">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer id="main-footer" class="bg-inverse text-white mt-5 p-5" style="position: absolute; width: 100%; bottom: 0;">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="lead text-center">UNJBG - OSIS</p>
            </div>
        </div>
    </div>
</footer>


<script src="{{asset('js/tether.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>
</html>
