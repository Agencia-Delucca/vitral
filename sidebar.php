<?php
if (function_exists('enqueue_sidebar_css')) {
  enqueue_sidebar_css();
}
?>

<aside id="sidebar">
  <section class="categories">
    <h3>Navegue por categoria</h3>
    <ul>
      <?php
      wp_list_categories(array(
        'title_li' => '',
      ));
      ?>
    </ul>
  </section>

  <section class="side-banner">
    <div class="swiper-wrapper">
      <?php
      $bannerLateral = new WP_Query(array(
        'post_type' => 'sidebanner',
        'posts_per_page' => 99,
        'post_status' => 'publish',
        'orderby' => 'title',
        'order' => 'ASC'
      ));
      if ($bannerLateral->have_posts()) {
        while ($bannerLateral->have_posts()) {
          $bannerLateral->the_post();

          $imagem = get_field('imagem');
          $titulo = get_field('titulo');
          $subtitulo = get_field('subtitulo');
          $link = get_field('link');
      ?>
          <div class="swiper-slide">
            <a
              <?php if ($link): ?>
              href="<?= $link ?>"
              <?php endif; ?>>
              <div class="text__wrapper">
                <h2>
                  <?= $titulo ?>
                </h2>
                <p>
                  <?= $subtitulo ?>
                </p>
              </div>
              <img
                src="<?= $imagem ?>"
                alt="<?= $titulo . ' ' . $subtitulo ?>"
                class="img-fluid">
            </a>
          </div>
      <?php
        }
      }
      ?>
    </div>
  </section>
</aside>