<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda - <?php echo $_GET['url'] ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="icon" href="assets/Img/st-logo.png">
</head>

<body>
  <nav class="navbar navbar-expand-lg" style="background-color:#017548">
    <div class="container">
      
      <a class="navbar-brand" href="#">
        <img src="assets/Img/st-logo.png" alt="" width="80" height="80">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto ">

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="?url=home">Inicio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?url=Productos">Productos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?url=CRUD">CRUD Productos</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <div class="container ">
    <div class="row">
      <?php
        $url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
        switch($url)
          {
            case 'home'     : SitioController::home();
                            break;
            case 'Productos': SitioController::Productos();
                            break;
            case 'CRUD'     : SitioController::CRUD();
                            break;
            default         : SitioController::home();
                            break;
          }
    ?>    
    </div>
  </div>
<footer>
  <div class="position-relative">
    <div class="position-absolute bottom- start-50 translate-middle">
      <p>
        Sitio creado por: Sergio F. y Victor V. &copy; <?php echo date('Y'); ?>
      </p>
    </div>
  </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="assets/js/tabla-dinamica.js"></script>
</body>
</html>

