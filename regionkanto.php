<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pokémon Display</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Choices.js -->
  <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
  <!-- Google fonts - Muli -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
  <!-- Theme stylesheet -->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes -->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="img/pokemon.ico">
  <!-- Tweaks for older IEs -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <header class="header">   
    <nav class="navbar navbar-expand-lg py-3 bg-dash-dark-2 border-bottom border-dash-dark-1 z-index-10">
      <div class="search-panel">
        <div class="search-inner d-flex align-items-center justify-content-center">
          <div class="close-btn d-flex align-items-center position-absolute top-0 end-0 me-4 mt-2 cursor-pointer">
            <span>Close</span>
            <svg class="svg-icon svg-icon-md svg-icon-heavy text-gray-700 mt-1">
              <use xlink:href="#close-1"></use>
            </svg>
          </div>
          <div class="row w-100">
            <div class="col-lg-8 mx-auto">
              <form class="px-4" id="searchForm" action="#">
                <div class="input-group position-relative flex-column flex-lg-row flex-nowrap">
                  <input class="form-control shadow-0 bg-none px-0 w-100" type="search" name="search" placeholder="What are you searching for...">
                  <button class="btn btn-link text-gray-600 px-0 text-decoration-none fw-bold cursor-pointer text-center" type="submit">Search</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid d-flex align-items-center justify-content-between py-1">
        <div class="navbar-header d-flex align-items-center">
          <a class="navbar-brand text-uppercase text-reset" href="home.php">
            <div class="brand-text brand-big">
              <strong class="text-primary">POKEMON</strong>
            </div>
            <div class="brand-text brand-sm">
              <strong class="text-primary">P</strong><strong>O</strong>
            </div>
          </a>
          <button class="sidebar-toggle">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy transform-none">
              <use xlink:href="#arrow-left-1"></use>
            </svg>
          </button>
        </div>
        <ul class="list-inline mb-0">
       <li class="list-inline-item logout px-lg-2">
       <a class="nav-link text-sm text-reset px-1 px-lg-0" id="logout" href="index.php">
       <span class="d-none d-sm-inline-block">Logout</span>
       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 2 16 15">
        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
        </svg>
        </a>
       </li>
      </ul>
      </div>
    </nav>
    </header>
  <div class="d-flex align-items-stretch">      
 <nav id="sidebar">
   <div class="sidebar-header d-flex align-items-center p-4">
  </div>
  <span class="text-uppercase text-gray-600 text-xs mx-3 px-2 heading mb-2">Main</span>
  <ul class="list-unstyled">
    <li class="sidebar-item active">
      <a class="sidebar-link" href="home.php"> 
        <svg fill="currentColor" class="svg-icon svg-icon-sm text-gray-600" viewBox="0 0 24 24">
          <use xlink:href="#real-estate-1"></use>
        </svg>
        <span>Home</span>
      </a>
    </li>
    <li class="sidebar-item">
      <a class="sidebar-link" href="pokemon.php"> 
        <svg style="display: none;">
          <symbol id="pokeball" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" fill="white" stroke="black" stroke-width="2"/>
            <circle cx="12" cy="12" r="4" fill="white" stroke="black" stroke-width="2"/>
            <path d="M2 12h20" stroke="black" stroke-width="2"/>
            <circle cx="12" cy="12" r="2" fill="black"/>
          </symbol>
        </svg>
        <svg fill="currentColor" class="svg-icon svg-icon-sm text-gray-600" viewBox="0 0 24 24">
          <use xlink:href="#pokeball"></use>
        </svg>
        <span>Pokémon</span>
      </a>
    </li>
    <li class="sidebar-item">
      <a class="sidebar-link" href="pokedex.html"> 
        <svg style="display: none;">
          <symbol id="pokedex-icon" viewBox="0 0 24 24">
            <path d="M21 4h-3V2h-2v2H8V2H6v2H3a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm0 17H3V9h18v12z"/>
            <path d="M12 15c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
            <path d="M13 11h-2v1h2v-1z"/>
          </symbol>
        </svg>
        <svg fill="currentColor" class="svg-icon svg-icon-sm text-gray-600" viewBox="0 0 24 24">
          <use xlink:href="#pokedex-icon"></use>
        </svg>
        <span>Pokédex</span>
      </a>
    </li>
    <li class="sidebar-item">
      <a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse"> 
        <svg style="display: none;">
          <symbol id="map-icon" viewBox="0 0 24 24">
            <path d="M12 1l-5 7h10zm5 15l5-7H7z"/>
            <path d="M0 0h24v24H0z" fill="none"/>
          </symbol>
        </svg>
        <svg fill="currentColor" class="svg-icon svg-icon-sm text-gray-600" viewBox="0 0 24 24">
          <use xlink:href="#map-icon"></use>
        </svg>
        <span>Regions</span>
      </a>
      <ul class="collapse list-unstyled" id="exampledropdownDropdown">
        <li><a class="sidebar-link" href="regionkanto.php">Kanto</a></li>
        <li><a class="sidebar-link" href="regionjohto.php">Johto</a></li>
        <li><a class="sidebar-link" href="regionhoenn.php">Hoenn</a></li>
        <li><a class="sidebar-link" href="regionsinnoh.php">Sinnoh</a></li>
        <li><a class="sidebar-link" href="regionunova.php">Unova</a></li>
        <li><a class="sidebar-link" href="regionkalos.php">Kalos</a></li>
      </ul>
    </li>
    <li class="sidebar-item">
      <a class="sidebar-link" href="index.php"> 
        <svg class="svg-icon svg-icon-sm svg-icon-heavy">
          <use xlink:href="#disable-1"></use>
        </svg>
        <span>Login page</span>
      </a>
    </li>
  </ul>
</nav>
      <div class="page-content">  
      <div id="pokemon-container" class="container">
        <div class="column">
        <?php
          include 'logic/pokemonkantogenerator.php';
        ?>
        </div>
      </div>
      <div class="text-center">
        <button id="randomizeButton" class="btn btn-primary" onclick="location.reload();">Randomize Pokémon</button>
      </div>
        <footer class="position-absolute bottom-0 bg-dash-dark-2 text-white text-center py-3 w-100 text-xs" id="footer">
        <div class="container-fluid text-center">
          <p class="mb-0 text-dash-gray">2024 &copy; HyperGryph. Design by <a href="https://getbootstrap.com/">Bootstrap</a>.</p>
        </div>        
      </footer>
    </div>
  </div>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/just-validate/js/just-validate.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
  <script src="js/charts-custom.js"></script>
  <script src="js/front.js"></script>
  <script>
    // ------------------------------------------------------- //
    //   Inject SVG Sprite - 
    //   see more here 
    //   https://css-tricks.com/ajaxing-svg-sprite/
    // ------------------------------------------------------ //
    function injectSvgSprite(path) {    
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');       
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>