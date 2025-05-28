<section id="template" class="fullbanner">
  <div class="swiper-wrapper">
    <?php
    $bannerprincipal = new WP_Query(array(
      'post_type' => 'fullbanner',
      'post_status' => 'publish',
      'posts_per_page' => 99,
      'orderby' => 'title',
      'order' => 'ASC',
    ));
    if ($bannerprincipal->have_posts()) {
      while ($bannerprincipal->have_posts()) {
        $bannerprincipal->the_post();

        $link = get_field('fullbanner_link');
        $cta = get_field('fullbanner_botao');
        $titulo = get_field('fullbanner_titulo');
        $texto = get_field('fullbanner_texto');
    ?>
        <div class="swiper-slide banner-<?php the_ID(); ?>">
          <a
            <?php if ($link): ?>
            href="<?php echo esc_url(the_field('fullbanner_link')); ?>"
            <?php endif; ?>
            target="_blank" rel="noopener noreferrer">
            <?php if ($titulo): ?>
              <div class="texto__wrapper">
                <h2 class="mb-0 text-uppercase">
                  <?php echo $titulo; ?>
                </h2>
                <p class="mb-0">
                  <?php echo $texto; ?>
                </p>
                <?php if ($cta): ?>
                <div class="cta">
                  <?php echo $cta ?>
                </div>
                <?php endif; ?>
              </div>
            <?php endif; ?>
            <picture>
              <source
                srcset="<?php echo the_field('fullbanner_imagem_mobile') ?>"
                media="(max-width: 991px)" />
              <img
                src="<?php echo the_field('fullbanner_imagem_desktop') ?>"
                alt="<?php echo the_field('fullbanner_alt'); ?>"
                class="img-fluid" />
            </picture>
          </a>
        </div>
    <?php }
    }
    wp_reset_postdata(); ?>
  </div>
  <div class="swiper-pagination"></div>
</section>