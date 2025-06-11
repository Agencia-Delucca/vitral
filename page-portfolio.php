<?php
get_header();
// Template Name: Portfolio

if (function_exists('enqueue_css_portfolio')) {
  enqueue_css_portfolio();
}

$loop = get_field('loop');
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
    <?php foreach ($loop as $item):
      $permalink = get_permalink($item->ID);
      $title = get_the_title($item->ID);
      $excerpt = get_the_excerpt($item->ID);
      $thumbnail = get_the_post_thumbnail_url($item->ID, 'large');
    ?>
      <a href="<?php echo esc_url($permalink); ?>" class="item">
        <div class="infos__wrapper">
          <h2 class="mb-0"><?php echo esc_html($title); ?></h2>
          <p><?php echo esc_html($excerpt); ?></p>
          <p>Saiba mais</p>
        </div>
        <div class="img__wrapper">
          <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($title); ?>">
        </div>
      </a>
    <?php endforeach; ?>
  </div>
</div>

<?php get_footer(); ?>