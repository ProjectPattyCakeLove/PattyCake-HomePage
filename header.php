<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css'>

        <?php wp_head(); ?>
    </head>
    <body>
    <header class="site-header">
    <div class="container">
      <!--h1 class="school-logo-text float-left"><a href="#"><strong>Fictional</strong> University</a></h1-->
	  <img class="site-header__logo-behavior" src=<?php echo get_theme_file_uri('/images/PattyCake-Logo.png'); ?> width="128px">
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Forum</a></li>
            <li><a href="#">Baby Store</a></li>
            <li><a href="#">Info</a></li>            
          </ul>
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>
    