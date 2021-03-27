<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Industri</title>

  <!-- Bootstrap core CSS -->
  
  <link rel="stylesheet" type="text/css" href="{!! asset('vendor/bootstrap/css/bootstrap.min.css') !!}">

  <!-- Custom fonts for this template -->
  <link rel="stylesheet" type="text/css" href="{!! asset('vendor/fontawesome-free/css/all.min.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') !!}">

  <!-- Custom styles for this template -->
  
  <link rel="stylesheet" type="text/css" href="{!! asset('css/clean-blog.min.css') !!}">


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.html">Sample Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Industri</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>INDUSTRI</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <H3>INDUSTRI</H3>
          <div class="card-body">
              <table id=bootstrap-data-table class="table table-bordered " style="border:3px solid">
                <thead>
                  <tr>
                      <th>Nama Industri</th>
                      <th>Value</th>
                  </tr>
                  <tbody>
                  @foreach (@industris as @i+>$row)
                  <tr>
                    <td>{{ $row->industri }}</td>
                    <td>{{ $row->value }}</td>
                  </tr>
                  @endforeach
                <t/body>
             </table>
             
          </div>
      </div>
      </div>
    </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <link rel="stylesheet" type="text/css" href="{!! asset('vendor/jquery/jquery.min.js') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('vendor/bootstrap/js/bootstrap.bundle.min.js') !!}">
  

  <!-- Custom scripts for this template -->
  <link rel="stylesheet" type="text/css" href="{!! asset('js/clean-blog.min.js') !!}">

</body>

</html>
