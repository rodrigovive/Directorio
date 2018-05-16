<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap 4 Starter Pack</title>
    <link rel="stylesheet" href="{{asset('css/frontend/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/style.css')}}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">
</head>

<body id="home">
<nav class="navbar navbar-expand-md navbar-light fixed-top py-4">
    <div class="container">
        <a href="index.html" class="navbar-brand">
            <img src="img/mlogo.png" width="50" height="50" alt="">
            <h3 class="d-inline align-middle">Mizuxe</h3>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#authors" class="nav-link">Meet The Authors</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- SHOWCASE -->


<!-- NEWSLETTER -->
<section id="newsletter" class="bg-dark text-white py-5">
    <div class="container">
        
        <div class="row">
            
            <div class="col-md-8">
                <input type="text" class="form-control form-control-lg" placeholder="Buscar ...">
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary btn-lg btn-block">
                    <i class="fa fa-envelope-open-o"></i> Buscar</button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">Facultad
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">Oficina
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">Dependencia
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">Dependencia
                    </label>
                </div>
            </div>
        </div>
    
    </div>
</section>

<!-- BOXES -->
<!-- <section id="boxes" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card text-center border-primary">
          <div class="card-body">
            <h3 class="text-primary">Be Better</h3>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, quibusdam.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center bg-primary text-white">
          <div class="card-body">
            <h3>Be Smarter</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, quibusdam.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center border-primary">
          <div class="card-body">
            <h3 class="text-primary">Be Faster</h3>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, quibusdam.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center bg-primary text-white">
          <div class="card-body">
            <h3>Be Stronger</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, quibusdam.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- ABOUT / WHY SECTION -->
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
                
                
                <!-- ACCORDION -->
                <!-- <div id="accordion" role="tablist">
                  <div class="card">
                    <div class="card-header" id="heading1">
                      <h5 class="mb-0">
                        <div href="#collapse1" data-toggle="collapse" data-parent="#accordion">
                          <i class="fa fa-arrow-circle-down"></i> Get Inspired
                        </div>
                      </h5>
                    </div>
      
                    <div id="collapse1" class="collapse show">
                      <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi pariatur optio totam obcaecati facere nam nihil inventore
                        dolorum consequuntur quis unde voluptatibus numquam velit veniam explicabo eveniet fugit hic, tenetur.
                        Iusto, consequatur, obcaecati. Ab earum alias, placeat exercitationem possimus quidem Lorem ipsum dolor
                        sit amet, consectetur adipisicing elit. Dolorem officia officiis aliquam fugiat, omnis, corrupti dolorum
                        ipsa laudantium sequi dolores!
                      </div>
                    </div>
                  </div>
      
                  <div class="card">
                    <div class="card-header" id="heading2">
                      <h5 class="mb-0">
                        <div href="#collapse2" data-toggle="collapse" data-parent="#accordion">
                          <i class="fa fa-arrow-circle-down"></i> Gain The Knowledge
                        </div>
                      </h5>
                    </div>
      
                    <div id="collapse2" class="collapse">
                      <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi pariatur optio totam obcaecati facere nam nihil inventore
                        dolorum consequuntur quis unde voluptatibus numquam velit veniam explicabo eveniet fugit hic, tenetur.
                        Iusto, consequatur, obcaecati. Ab earum alias, placeat exercitationem possimus quidem Lorem ipsum dolor
                        sit amet, consectetur adipisicing elit. Dolorem officia officiis aliquam fugiat, omnis, corrupti dolorum
                        ipsa laudantium sequi dolores!
                      </div>
                    </div>
                  </div>
      
                  <div class="card">
                    <div class="card-header" id="heading3">
                      <h5 class="mb-0">
                        <div href="#collapse3" data-toggle="collapse" data-parent="#accordion">
                          <i class="fa fa-arrow-circle-down"></i> Open Your Mind
                        </div>
                      </h5>
                    </div>
      
                    <div id="collapse3" class="collapse">
                      <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi pariatur optio totam obcaecati facere nam nihil inventore
                        dolorum consequuntur quis unde voluptatibus numquam velit veniam explicabo eveniet fugit hic, tenetur.
                        Iusto, consequatur, obcaecati. Ab earum alias, placeat exercitationem possimus quidem Lorem ipsum dolor
                        sit amet, consectetur adipisicing elit. Dolorem officia officiis aliquam fugiat, omnis, corrupti dolorum
                        ipsa laudantium sequi dolores!
                      </div>
                    </div>
                  </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

<!-- AUTHORS -->
<!-- <section id="authors" class="my-5 text-center">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="info-header mb-5">
          <h1 class="text-primary pb-3">
            Meet The Authors
          </h1>
          <p class="lead pb-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet omnis fuga maiores excepturi dolores explicabo.
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="img/person1.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
            <h3>Susan Williams</h3>
            <h5 class="text-muted">Lead Writer</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae molestiae alias expedita quae esse ut.</p>
            <div class="d-flex flex-row justify-content-center">
              <div class="p-4">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </div>
              <div class="p-4">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </div>
              <div class="p-4">
                <a href="#">
                  <i class="fa fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="img/person2.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
            <h3>Grace Smith</h3>
            <h5 class="text-muted">Co-Writer</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae molestiae alias expedita quae esse ut.</p>
            <div class="d-flex flex-row justify-content-center">
              <div class="p-4">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </div>
              <div class="p-4">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </div>
              <div class="p-4">
                <a href="#">
                  <i class="fa fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="img/person3.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
            <h3>John Doe</h3>
            <h5 class="text-muted">Editor</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae molestiae alias expedita quae esse ut.</p>
            <div class="d-flex flex-row justify-content-center">
              <div class="p-4">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </div>
              <div class="p-4">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </div>
              <div class="p-4">
                <a href="#">
                  <i class="fa fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="img/person4.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
            <h3>Kevin Swanson</h3>
            <h5 class="text-muted">Designer</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae molestiae alias expedita quae esse ut.</p>
            <div class="d-flex flex-row justify-content-center">
              <div class="p-4">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </div>
              <div class="p-4">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </div>
              <div class="p-4">
                <a href="#">
                  <i class="fa fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- CONTACT -->
<!-- <section id="contact" class="bg-light py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <h3>Get In Touch</h3>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, et.</p>
        <form>
          <div class="form-group">
            <div class="input-group input-group-lg">
              <span class="input-group-addon">
                <i class="fa fa-user"></i>
              </span>
              <input type="text" class="form-control" placeholder="Name">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-lg">
              <span class="input-group-addon">
                <i class="fa fa-envelope"></i>
              </span>
              <input type="email" class="form-control" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-lg">
              <span class="input-group-addon">
                <i class="fa fa-pencil"></i>
              </span>
              <textarea class="form-control" placeholder="Message" rows="5"></textarea>
            </div>
          </div>
          <input type="submit" value="Submit" class="btn btn-primary btn-block btn-lg">
        </form>
      </div>
      <div class="col-lg-3 align-self-center">
        <img src="img/mlogo.png" alt="" class="img-fluid">
      </div>
    </div>
  </div>
</section> -->

<footer id="main-footer" class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 ml-auto">
                <p class="lead">Copyright &copy; 2017</p>
            </div>
        </div>
    </div>
</footer>


<script src="{{asset('js/frontend/jquery.min.js')}}"></script>
<script src="{{asset('js/frontend/popper.min.js')}}"></script>
<script src="{{asset('js/frontend/bootstrap.min.js')}}"></script>
<script src="{{asset('js/frontend/navbar-fixed.js')}}"></script>
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
</body>

</html>