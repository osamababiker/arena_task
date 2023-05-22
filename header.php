<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>> 
    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>جاري التحميل ...</span>
      </div>
    </div>
    <!-- Page wrapper-->
    <main class="page-wrapper">
      <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
      <header class="navbar navbar-expand-lg bg-light rounded-3 px-3">
        <a class="navbar-brand" href="#">
          <img class="border rounded-circle" src="<?php echo get_theme_file_uri('/assets/img/logo.jpeg') ?>" width="40" alt="اسامة بابكر"> 
          <span class="h6 pt-3 px-3">اسامة محمد بابكر</span> 
        </a>
        <div class="me-auto d-flex">
          <a class="d-flex align-items-center text-decoration-none" href="mailto:hello@osamababiker.com">
            <i class="ai-messages fs-3"></i>
            <div class="text-nowrap ps-2 d-none d-lg-block px-4">
              <h6 class="fs-sm lh-1 mb-0">تواصل معي</h6>
              <span class="text-body fs-xs">hello@osamababiker.com</span>
            </div>
          </a>
          <div class="form-check form-switch mode-switch" id="mode-switch" data-bs-toggle="mode">
            <input class="form-check-input" type="checkbox" id="theme-mode">
            <label class="form-check-label" for="theme-mode"><i class="ai-sun fs-lg"></i></label>
            <label class="form-check-label" for="theme-mode"><i class="ai-moon fs-lg"></i></label>
          </div>
        </div>
      </header>
