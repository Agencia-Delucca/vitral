<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php wp_title(); ?></title>

  <!-- <meta property="og:url" content="https://www.vitralaluminio.com.br/"> -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="Vitral Alumínio e Vidro">
  <!-- <meta property="og:description" content="Os Melhores Produtos para Micropigmentação, Tattoo e Estética em até 10x Sem Juros e Entrega Para todo o Brasil."> -->
  <meta property="og:logo" content="<?php bloginfo("stylesheet_directory"); ?>/assets/imgs/favicon.jpg" />
  <meta property="og:image" content="<?php bloginfo("stylesheet_directory"); ?>/assets/imgs/og.jpg">

  <?php wp_head(); ?>

  <link href="<?php bloginfo("stylesheet_directory"); ?>/assets/imgs/favicon.jpg" rel="icon" size="32x32">
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
          'container_class' => 'header-nav w-100',
        ));
        ?>
      </div>
    </div>

    <div class="navbar__mobile container-xxl p-3 d-lg-none" data-bs-theme="light">
      <button type="button" class="offcanvas-toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/menu-icon.svg" alt="Ícone de menu">
      </button>

      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-vitral-33-anos-horizontal.svg" alt="Logo" class="img-fluid d-lg-none">
      </a>

      <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
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

  <div class="toast__alert">
    <div class="img">
      <svg viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" class="img-fluid">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path d="M10.8809 16.15C10.8809 16.0021 10.9101 15.8556 10.967 15.7191C11.024 15.5825 11.1073 15.4586 11.2124 15.3545C11.3175 15.2504 11.4422 15.1681 11.5792 15.1124C11.7163 15.0567 11.8629 15.0287 12.0109 15.03C12.2291 15.034 12.4413 15.1021 12.621 15.226C12.8006 15.3499 12.9399 15.5241 13.0211 15.7266C13.1024 15.9292 13.122 16.1512 13.0778 16.3649C13.0335 16.5786 12.9272 16.7745 12.7722 16.9282C12.6172 17.0818 12.4204 17.1863 12.2063 17.2287C11.9922 17.2711 11.7703 17.2494 11.5685 17.1663C11.3666 17.0833 11.1938 16.9426 11.0715 16.7618C10.9492 16.5811 10.8829 16.3683 10.8809 16.15ZM11.2408 13.42L11.1008 8.20001C11.0875 8.07453 11.1008 7.94766 11.1398 7.82764C11.1787 7.70761 11.2424 7.5971 11.3268 7.5033C11.4112 7.40949 11.5144 7.33449 11.6296 7.28314C11.7449 7.2318 11.8697 7.20526 11.9958 7.20526C12.122 7.20526 12.2468 7.2318 12.3621 7.28314C12.4773 7.33449 12.5805 7.40949 12.6649 7.5033C12.7493 7.5971 12.813 7.70761 12.8519 7.82764C12.8909 7.94766 12.9042 8.07453 12.8909 8.20001L12.7609 13.42C12.7609 13.6215 12.6809 13.8149 12.5383 13.9574C12.3958 14.0999 12.2024 14.18 12.0009 14.18C11.7993 14.18 11.606 14.0999 11.4635 13.9574C11.321 13.8149 11.2408 13.6215 11.2408 13.42Z" fill="red"></path>
          <path d="M12 21.5C17.1086 21.5 21.25 17.3586 21.25 12.25C21.25 7.14137 17.1086 3 12 3C6.89137 3 2.75 7.14137 2.75 12.25C2.75 17.3586 6.89137 21.5 12 21.5Z" stroke="red" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        </g>
      </svg>
    </div>
    <p class="mb-0">Você não pode realizar essa ação.</p>
  </div>

  <?php get_template_part('template-parts/breadcrumb'); ?>