<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?= custome_title(); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/wp-content/themes/portfolio/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/wp-content/themes/portfolio/css/modern-business.css" rel="stylesheet">

  </head>

  <body>


    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html"><?= get_bloginfo('name') ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li>
              <?php wp_nav_menu(['theme_location' => 'main'])  ?>
            </li>
              
         <!--    
            <li>
              <a href="about.html">Home</a>
            </li>
            <li>
              <a href="about.html">My Work</a>
            </li>
            <li>
              <a href="about.html">About</a>
            </li>
            <li>
              <a href="about.html">Contact</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
