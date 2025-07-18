<?= get_header();
// Template Name: Blog

if (function_exists('enqueue_blog_css')) {
  enqueue_blog_css();
}

$topo_titulo = get_field('topo_titulo');
$topo_subtitulo = get_field('topo_subtitulo');

$post_1_titulo = get_field('post_1_titulo');
$post_1_img = get_field('post_1_imagem');
$post_1_link = get_field('post_1_link');

$post_2_titulo = get_field('post_2_titulo');
$post_2_img = get_field('post_2_imagem');
$post_2_link = get_field('post_2_link');

$post_3_titulo = get_field('post_3_titulo');
$post_3_img = get_field('post_3_imagem');
$post_3_link = get_field('post_3_link');

$post_4_titulo = get_field('post_4_titulo');
$post_4_img = get_field('post_4_imagem');
$post_4_link = get_field('post_4_link');

$post_5_titulo = get_field('post_5_titulo');
$post_5_img = get_field('post_5_imagem');
$post_5_link = get_field('post_5_link');

$post_6_titulo = get_field('post_6_titulo');
$post_6_img = get_field('post_6_imagem');
$post_6_link = get_field('post_6_link');
?>

<main id="blog">
  <div class="topo pt-5">
    <div class="header mt-3">
      <div class="header__wrapper">
        <h1>
          <?= $topo_titulo; ?>
        </h1>
        <p>
          <?= $topo_subtitulo; ?>
        </p>
      </div>
    </div>

    <div class="main-posts container-xxl pt-5 d-none d-lg-block">
      <div class="grid">
        <?php
        $latest_post = new WP_Query(array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => 3,
        ));

        $exclude_ids = wp_list_pluck($latest_post->posts, 'ID');

        if ($latest_post->have_posts()) :
          while ($latest_post->have_posts()) : $latest_post->the_post(); ?>
            <a href="<?php the_permalink(); ?>">
              <div class="infos__wrapper">
                <h2 class="mb-0 fw-normal"><?= wp_html_excerpt(get_the_title(), 64, '...'); ?></h2>
                <p class="mb-0">
                  Ler mais
                </p>
              </div>
              <div class="img__wrapper">
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?= the_title(); ?>">
              </div>
            </a>
          <?php endwhile; ?>
        <?php else : ?>
          <p>Nenhum resultado encontrado.</p>
        <?php endif;
        wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
  <div class="container-xxl more-posts py-5">
    <div class="row">
      <div class="col-12 col-lg-9">
        <div class="grid desktop d-none d-lg-grid">
          <?php
          $paged = max(1, get_query_var('paged') ? get_query_var('paged') : get_query_var('page'));

          $latest_id = isset($latest_post->posts[0]->ID) ? $latest_post->posts[0]->ID : 0;

          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 9,
            'post__not_in'   => $exclude_ids,
            'paged' => $paged
          );

          $query = new WP_Query($args);

          if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
              <a href="<?php the_permalink(); ?>">
                <div class="infos__wrapper">
                  <h2 class="mb-3 fw-normal"><?= wp_html_excerpt(get_the_title(), 48, '...'); ?></h2>
                  <p class="mb-0">
                    Ler mais
                  </p>
                </div>
                <div class="img__wrapper">
                  <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?= the_title(); ?>">
                </div>
              </a>
            <?php endwhile; ?>

          <?php else : ?>
            <p>Nenhum resultado encontrado.</p>
          <?php endif;
          wp_reset_postdata(); ?>
        </div>
        <div class="pagination mb-5 mb-lg-0 mt-5 d-none d-lg-block">
          <div class="pagination__wrapper">
            <?php
            $paged = max(1, get_query_var('paged'));
            $total = $query->max_num_pages;

            $links = paginate_links(array(
              'total'     => $query->max_num_pages,
              'current'   => $paged,
              'type'      => 'array',
              'prev_text' => __('‹ Anterior'),
              'next_text' => __('Próxima ›'),
            ));

            if ($links) {
              foreach ($links as $link) {
                preg_match('/>(\d+)<\/a>/', $link, $match);
                $num = isset($match[1]) ? (int)$match[1] : null;

                if (
                  strpos($link, 'current') !== false || // Página atual
                  $num === $paged - 1 ||                // Página anterior
                  $num === $paged + 1 ||                // Página seguinte
                  strpos($link, 'prev') !== false ||    // Botão de voltar
                  strpos($link, 'next') !== false       // Botão de avançar
                ) {
                  echo $link;
                }
              }
            }
            ?>
          </div>
        </div>



        <div class="grid mobile d-lg-none">
          <?php
          $paged = max(1, get_query_var('paged') ? get_query_var('paged') : get_query_var('page'));

          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 4,
            'paged' => $paged
          );

          $query = new WP_Query($args);

          if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
              <a href="<?php the_permalink(); ?>">
                <div class="infos__wrapper">
                  <h2 class="mb-0 fw-normal"><?= the_title(); ?></h2>
                  <?= get_the_date(); ?>
                  <p class="mb-0">
                    Ler mais
                  </p>
                </div>
                <div class="img__wrapper">
                  <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?= the_title(); ?>">
                </div>
              </a>
            <?php endwhile; ?>

          <?php else : ?>
            <p>Nenhum resultado encontrado.</p>
          <?php endif;
          wp_reset_postdata(); ?>
        </div>
        <div class="pagination mb-5 mb-lg-0 mt-5 d-lg-none">
          <div class="pagination__wrapper">
            <?php
            $paged = max(1, get_query_var('paged'));
            $total = $query->max_num_pages;

            $links = paginate_links(array(
              'total'     => $query->max_num_pages,
              'current'   => $paged,
              'type'      => 'array',
              'prev_text' => __('‹ Anterior'),
              'next_text' => __('Próxima ›'),
            ));

            if ($links) {
              foreach ($links as $link) {
                preg_match('/>(\d+)<\/a>/', $link, $match);
                $num = isset($match[1]) ? (int)$match[1] : null;

                if (
                  strpos($link, 'current') !== false || // Página atual
                  $num === $paged - 1 ||                // Página anterior
                  $num === $paged + 1 ||                // Página seguinte
                  strpos($link, 'prev') !== false ||    // Botão de voltar
                  strpos($link, 'next') !== false       // Botão de avançar
                ) {
                  echo $link;
                }
              }
            }
            ?>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>


<?= get_footer(); ?>