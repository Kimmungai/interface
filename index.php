<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Coming Soon - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_theme_file_uri( 'vendor/bootstrap/css/bootstrap.min.css' );?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="<?php echo get_theme_file_uri( 'vendor/font-awesome/css/font-awesome.min.css' );?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_theme_file_uri( 'css/coming-soon.min.css' );?>" rel="stylesheet">

  </head>

  <body>

    <div class="overlay"></div>

    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <form>
            <div class="masthead-content text-white py-5 py-md-0">
              <h1 class="mb-3">Free Portfolio website!</h1>
              <p class="mb-5">Easily create your personal portfolio website <strong>For Free</strong>! Start by providing few details below!</p>
              <div class="input-group input-group-newsletter m-1">
                <input type="email" class="form-control" placeholder="Enter name..." aria-label="Search for...">
                <!--<span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Notify Me!</button>
                </span>-->
              </div>
              <div class="input-group input-group-newsletter  m-1">
                <input type="email" class="form-control" placeholder="Enter email..." aria-label="Search for...">
              </div>
              <div class="input-group input-group-newsletter  m-1">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit">Create!</button>
                </span>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>

    <div class="social-icons">
      <ul class="list-unstyled text-center mb-0">
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-facebook"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo get_theme_file_uri( 'vendor/jquery/jquery.min.js' );?>"></script>
    <script src="<?php echo get_theme_file_uri( 'vendor/bootstrap/js/bootstrap.bundle.min.js' );?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo get_theme_file_uri( 'vendor/vide/jquery.vide.min.js' );?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo get_theme_file_uri( 'js/coming-soon.min.js' );?>"></script>
    <script>
    (function($) {
      "use strict"; // Start of use strict

      // Vide - Video Background Settings
      $('body').vide({
        mp4: "<?php echo get_theme_file_uri( 'mp4/bg.mp4' );?>",
        poster: "<?php echo get_theme_file_uri( 'img/bg-mobile-fallback.jpg' );?>"
      }, {
        posterType: 'jpg'
      });

    })(jQuery); // End of use strict
    </script>
  </body>

</html>
