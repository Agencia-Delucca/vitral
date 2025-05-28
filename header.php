<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php wp_title(); ?></title>

  <?php wp_head(); ?>

  <link href="<?php bloginfo("stylesheet_directory"); ?>/assets/imgs/favicon.png" rel="icon" size="32x32">
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('template-parts/loader'); ?>

  <nav class="navbar">
    <div class="navbar__wrapper d-none d-lg-block">
      <div class="navbar__top container-xxl">
        <a class="navbar-brand p-0 m-0" href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-vitral-33-anos-horizontal.svg" alt="Logo Vitral" class="img-fluid">
        </a>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'menu-principal',
          'menu_class'     => 'header-menu text-uppercase',
          'container'      => 'div',
          'container_class' => 'header-nav col-8',
        ));
        ?>
      </div>
    </div>

    <div class="navbar__mobile container-xxl p-3 d-lg-none" data-bs-theme="light">
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo_colored_cut.png" alt="Logo" class="img-fluid d-lg-none">
      </a>

      <button type="button" class="offcanvas-toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/menu-icon.svg" alt="Ícone de menu">
      </button>

      <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'menu-principal',
            'menu_class'     => 'header-menu',
            'container'      => 'nav',
            'container_class' => 'header-nav',
          ));
          ?>
        </div>
      </div>

    </div>
  </nav>

  <?php get_template_part('template-parts/breadcrumb'); ?>