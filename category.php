<?= get_header();
if (function_exists('enqueue_blog_css')) {
  enqueue_blog_css();
}
?>

<main id="blog" class="category">
  <div class="topo py-5">
    <div class="header">
      <div class="header__wrapper">
        <h1 class="mb-0">
          <?php single_cat_title(); ?>
        </h1>
        <p>
          <?= category_description(); ?>
        </p>
      </div>
    </div>
  </div>
  <div class="container-xxl more-posts py-5">
    <div class="row">
      <div class="col-12 col-lg-9">
        <div class="grid">
          <?php
          $paged = max(1, get_query_var('paged') ? get_query_var('paged') : get_query_var('page'));

          $latest_id = isset($latest_post->posts[0]->ID) ? $latest_post->posts[0]->ID : 0;

          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => single_cat_title('', false),
            'posts_per_page' => 9,
            'paged' => $paged
          );

          $query = new WP_Query($args);

          if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
              <a href="<?php the_permalink(); ?>">
                <div class="infos__wrapper">
                  <h2 class="mb-3 fw-normal"><?= the_title(); ?></h2>
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
        <div class="pagination mt-5">
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