<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>> 
    <!-- Page wrapper-->
    <main class="page-wrapper">
    <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
      <!-- navbar section -->
      <header>
          <nav class="navbar navbar-expand-lg navbar-light  shadow-sm">
              <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                      <img src="<?php echo get_theme_file_uri('assets/img/logo.png') ?>" alt="" class="">
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav m-auto">
                          <li class="nav-item">
                              <a class="nav-link" href="#">Comparison</span></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Bond</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Testimonials</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Contact</a>
                          </li>
                      </ul>
                      <button class="btn arena-btn"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg> +971 12 345 6789
                      </button>
                  </div>
              </div>
          </nav>
      </header>


