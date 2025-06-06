<?php

add_theme_support('post-thumbnails');

function my_theme_fonts()
{
?>
  <style>
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/inter-variable.ttf') format('truetype');
    }

    @font-face {
      font-family: 'Inter';
      font-style: italic;
      src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/inter-italic-variable.ttf') format('truetype');
    }

    @font-face {
      font-family: 'Quentin';
      font-weight: 400;
      font-style: normal;
      src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/quentin.otf') format('opentype');
    }
  </style>
<?php
}
add_action('wp_head', 'my_theme_fonts');

function load_scripts()
{
  wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), null, true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, true);
  wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/fancybox.umd.js', array(), null, true);
  wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), null, true);

  wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', 'all');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', '5.3', 'all');
  wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css', 'all');
  wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/fancybox.css', 'all');

  if (is_single()) {
    wp_enqueue_style('single-style', get_template_directory_uri() . '/assets/css/single.css', array(), null, 'all');
  }

  wp_add_inline_script('custom', "
    window.addEventListener('load', function () {
      document.body.classList.add('loaded');
    });
  ");
}

add_action('wp_enqueue_scripts', 'load_scripts');

function menu_register()
{
  register_nav_menus(
    array(
      'menu-principal' => __('Menu Principal', 'menu'),
      'menu-rodape' => __('Menu Rodapé', 'menu'),
    )
  );
}
add_action('after_setup_theme', 'menu_register');

function set_posts_per_page_for_search($query)
{
  if (!is_admin() && $query->is_search() && $query->is_main_query()) {
    $query->set('posts_per_page', 16);
    $query->set('post_status', 'publish');
    $query->set('post_type', 'post');
  }
}
add_action('pre_get_posts', 'set_posts_per_page_for_search');

require_once get_template_directory() . '/includes/custom-post-types.php';

function carregar_css_homepage()
{
  if (is_front_page()) {
    wp_enqueue_style(
      'css-homepage',
      get_template_directory_uri() . '/assets/css/home.css',
      array(),
      '1.0'
    );

    $inline_home_script = '
      const swiperReviews = new Swiper("#home .depoimentos__slide", {
        slidesPerView: 4,
        spaceBetween: 16,
        pagination: {
          el: "#home .depoimentos__slide .swiper-pagination",
          clickable: true,
        },
      });
    ';

    wp_add_inline_script('swiper', $inline_home_script);
  }
}

function enqueue_blog_css()
{
  if (!wp_style_is('blog', 'enqueued')) {
    wp_enqueue_style(
      'blog',
      get_template_directory_uri() . '/assets/css/blog.css',
      array(),
      null,
      'all'
    );
  }
}

function enqueue_sidebar_css()
{
  if (!wp_style_is('sidebar', 'enqueued')) {
    wp_enqueue_style(
      'sidebar',
      get_template_directory_uri() . '/assets/css/sidebar.css',
      array(),
      null,
      'all'
    );

    wp_add_inline_script('swiper', '
      const swiperSidebanner = new Swiper("#sidebar .side-banner", {
          loop: true,
          slidesPerView: 1,
          autoplay: {
            delay: 5000,
            pauseOnMouseEnter: true,
          }
      });
  ');
  }
}
add_action('wp_enqueue_scripts', 'enqueue_sidebar_css');

function enqueue_orcamento_css()
{
  if (!wp_style_is('orcamento', 'enqueued')) {
    wp_enqueue_style(
      'orcamento',
      get_template_directory_uri() . '/assets/css/orcamento.css',
      array(),
      null,
      'all'
    );
  }
}

function enqueue_central_de_atendimento_css()
{
  if (!wp_style_is('central_de_atendimento', 'enqueued')) {
    wp_enqueue_style(
      'central-de-atendimento',
      get_template_directory_uri() . '/assets/css/central-de-atendimento.css',
      array(),
      null,
      'all'
    );
  }
}

function enqueue_single_portfolio_css()
{
  if (!wp_style_is('single_portfolio', 'enqueued')) {
    wp_enqueue_style(
      'single-portfolio',
      get_template_directory_uri() . '/assets/css/single-portfolio.css',
      array(),
      null,
      'all'
    );
  }
}

function enqueue_produtos_css()
{
  if (!wp_style_is('produtos', 'enqueued')) {
    wp_enqueue_style(
      'produtos',
      get_template_directory_uri() . '/assets/css/produtos.css',
      array(),
      null,
      'all'
    );
  }
}

function enqueue_single_produtos_css()
{
  if (!wp_style_is('single-produtos', 'enqueued')) {
    wp_enqueue_style(
      'single-produtos',
      get_template_directory_uri() . '/assets/css/single-produtos.css',
      array(),
      null,
      'all'
    );

    $inline_script = '
      const swiperGaleria = new Swiper("#single .galeria", {
        slidesPerView: 1,
        spaceBetween: 16,
        loop: true,
        autoplay: {
          delay: 5000,
          pauseOnMouseEnter: true,
        },
        pagination: {
          el: ".galeria .swiper-pagination",
          clickable: true,
        },
      });

      const swiper = new Swiper("#single .cores__slide", {
        slidesPerView: 6,
        breakpoints: {
          1200: {
            slidesPerView: 6,
          },
          992: {
            slidesPerView: 5,
          },
          768: {
            slidesPerView: 4,
          },
          0: {
            slidesPerView: 2,
          },
        },
        freeMode: true,
        spaceBetween: 16,
        pagination: {
          el: ".cores__slide .swiper-pagination",
          clickable: true,
        },
      });
    ';

    wp_add_inline_script('swiper', $inline_script);
  }
}

function enqueue_quem_somos_css()
{
  if (!wp_style_is('quem-somos', 'enqueued')) {
    wp_enqueue_style(
      'quem-somos',
      get_template_directory_uri() . '/assets/css/quem-somos.css',
      array(),
      null,
      'all'
    );
  }
}

function enqueue_search_css()
{
  if (!wp_style_is('search', 'enqueued')) {
    wp_enqueue_style(
      'search',
      get_template_directory_uri() . '/assets/css/search.css',
      array(),
      null,
      'all'
    );
  }
}

function carregar_scripts_fullbanner()
{
  if (is_front_page()) {
    wp_enqueue_style(
      'css-fullbanner',
      get_template_directory_uri() . '/assets/css/fullbanner.css',
      array(),
      '1.0'
    );

    wp_add_inline_script('swiper', '
          const swiper = new Swiper("#template.fullbanner", {
            loop: true,
            autoplay: {
              delay: 5000,
              pauseOnMouseEnter: true,
            },
            pagination: {
              el: ".fullbanner .swiper-pagination",
              clickable: true,
            },
          });
      ');
  }
}
add_action('wp_enqueue_scripts', 'carregar_scripts_fullbanner');

function enqueue_css_portfolio()
{
  if (!wp_style_is('portfolio', 'enqueued')) {
    wp_enqueue_style(
      'css-portfolio',
      get_template_directory_uri() . '/assets/css/portfolio.css',
      array(),
      '1.0'
    );
  }
}

?>