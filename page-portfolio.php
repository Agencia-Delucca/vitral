<?php 
get_header();
// Template Name: Portfolio

if (function_exists('enqueue_css_portfolio')) {
  enqueue_css_portfolio();
}
?>

<div id="portfolio" class="py-5">
  <div class="topo container-xxl pb-5">
    <h1 class="mb-0 text-primary">
      <?= get_the_title(); ?>
    </h1>
    <p class="mb-0 mt-3 text-primary">
      <?= get_the_excerpt(); ?>
  </p>
  </div>

  <div class="grid container-xxl pb-5 mb-5">
    <?php
    $query = new WP_Query(array(
      'post_type' => 'portfolio',
      'post_status' => 'publish',
      'posts_per_page' => -1,
    ));

    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="item">
          <div class="infos__wrapper">
            <h2 class="mb-0"><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <p>Saiba mais</p>
          </div>
          <div class="img__wrapper">
            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
          </div>
        </a>
      <?php endwhile; ?>
    <?php else : ?>
      <p>Nenhum projeto encontrado.</p>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>