<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">

  <!-- Choices.js-->
  <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">

  <!-- Google fonts - Muli-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">

  <!-- Theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">

  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">

  <!-- Favicon-->
  <link rel="shortcut icon" href="img/pokemon.ico">

  <style>
    .logo-background {
      background: url('img/pokemon.jpeg') no-repeat center center;
      background-size: cover;
    }
  </style>

  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="login-page">
    <div class="container d-flex align-items-center position-relative py-5">
      <div class="card shadow-sm w-100 rounded overflow-hidden bg-none">
        <div class="row gx-0 align-items-stretch">

          <!-- Logo & Information Panel -->
          <div class="col-lg-6">
            <div class="card border-0">
              <img src="img/pokemon.jpeg" class="card-img-top" alt="Pokemon" style="max-width: 100%; height: auto;">
            </div>
          </div>

          <!-- Form Panel -->
          <div class="col-lg-6 bg-white">
            <div class="d-flex align-items-center px-4 px-lg-5 h-100 bg-gray-300">
              <form class="w-100" action="loginprocess.php" method="post">
                <div class="input-material-group mb-3">
                  <input class="input-material" id="loginEmail" type="email" name="loginEmail" required>
                  <label class="label-material" for="loginEmail">Email</label>
                </div>
                <div class="input-material-group mb-3">
                  <input class="input-material" id="loginUsername" type="text" name="loginUsername" required>
                  <label class="label-material" for="loginUsername">Username</label>
                </div>
                <div class="input-material-group mb-4">
                  <input class="input-material" id="loginPassword" type="password" name="loginPassword" required>
                  <label class="label-material" for="loginPassword">Password</label>
                </div>
                <button id="loginUser" type="submit" action="submit" name="loginUser">Login</button><br>
              </form>
              <?php
              session_start();
              if (isset($_SESSION['register_error'])) {
                echo "<p>{$_SESSION['register_error']}</p>";
                unset($_SESSION['register_error']);
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="login-footer text-center position-absolute bottom-0 start-0 w-100">
      <p class="text-white">Design by <a class="external" href="https://getbootstrap.com/">Bootstrap</a></p>
    </div>
  </div>

  <!-- JavaScript files-->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/just-validate/js/just-validate.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>

  <!-- Main File-->
  <script src="js/front.js"></script>
  <script>
    // Inject SVG Sprite - see more here https://css-tricks.com/ajaxing-svg-sprite/
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

    // Set BootstrapTemple website as the domain for SVG sprite injection
    injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
  </script>

  <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>
</html>
