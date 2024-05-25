<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dark Admin by Bootstrapious.com</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Choices.js-->
  <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
  <!-- Google fonts - Muli-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.ico">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  <style>
    .pokemon-card {
      width: 24rem;
      margin: 1rem auto;
      height: 400px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .pokemon-card img {
      object-fit: cover;
      width: 100%;
      height: 300px;
    }
  </style>
</head>
<body>
  <header class="header">
    <!-- Navbar code -->
  </header>
  <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar code -->
    </nav>
    <div class="page-content">
      <!-- Page Header-->
      <div class="bg-dash-dark-2 py-4">
        <div class="container-fluid">
          <h2 class="h5 mb-0">Pokemon</h2>
        </div>
      </div>
      <!-- Breadcrumb-->
      <div class="container-fluid py-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 py-3 px-0">
            <li class="breadcrumb-item"><a href="home.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pokemon</li>
          </ol>
        </nav>
      </div>
      <!-- Pokemon cards and randomizer button -->
      <div id="pokemon-container">
        <?php
        // Include the PHP script six times to display six random Pokémon
        for ($i = 0; $i < 6; $i++) {
          include 'logic/pokemonrandomgenerator.php';
        }
        ?>
      </div>
      <div class="text-center">
        <button id="randomizeButton" class="btn btn-primary" onclick="location.reload();">Randomize Pokémon</button>
      </div>
      <!-- Page Footer-->
      <footer class="position-absolute bottom-0 bg-dash-dark-2 text-white text-center py-3 w-100 text-xs" id="footer">
        <div class="container-fluid text-center">
          <p class="mb-0 text-dash-gray">2021 &copy; Your company. Design by <a href="https://bootstrapious.com">Bootstrapious</a>.</p>
        </div>
      </footer>
    </div>
  </div>
  <!-- JavaScript files-->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/just-validate/js/just-validate.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
  <script src="js/charts-custom.js"></script>
  <!-- Main File-->
  <script src="js/front.js"></script>
  <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>
</html>
