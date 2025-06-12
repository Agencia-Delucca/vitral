<?php
get_header();

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
        <?php if (category_description()) : ?>
          <p class="mb-0">
            <?= category_description(); ?>
          </p>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="container-xxl more-posts pt-0 pt-lg-5 pb-5">
    <div class="row">
      <div class="col-12 col-lg-9">
        <div class="grid">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>">
                <div class="infos__wrapper">
                  <h2 class="mb-3 fw-normal"><?= wp_html_excerpt(get_the_title(), 48, '...'); ?></h2>
                  <p class="mb-0">Ler mais</p>
                </div>
                <div class="img__wrapper">
                  <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
                </div>
              </a>
            <?php endwhile; ?>
          <?php else : ?>
            <p>Nenhum resultado encontrado.</p>
          <?php endif; ?>
        </div>

        <div class="pagination mt-5 mb-5 mb-lg-0">
          <div class="pagination__wrapper">
            <?php
            $paged = max(1, get_query_var('paged'));

            $links = paginate_links([
              'total'     => $wp_query->max_num_pages,
              'current'   => $paged,
              'type'      => 'array',
              'prev_text' => __('‹ Anterior'),
              'next_text' => __('Próxima ›'),
            ]);

            if ($links) {
              foreach ($links as $link) {
                preg_match('/>(\d+)<\/a>/', $link, $match);
                $num = isset($match[1]) ? (int)$match[1] : null;

                if (
                  strpos($link, 'current') !== false ||
                  $num === $paged - 1 ||
                  $num === $paged + 1 ||
                  strpos($link, 'prev') !== false ||
                  strpos($link, 'next') !== false
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

<?php get_footer(); ?>
