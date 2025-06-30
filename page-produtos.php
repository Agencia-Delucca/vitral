<?= get_header();
// Template Name: Produtos

if (function_exists('enqueue_produtos_css')) {
  enqueue_produtos_css();
}

$topo_titulo = get_field('topo_titulo');
$topo_subtitulo = get_field('topo_subtitulo');

$inovacao_titulo = get_field('inovacao_titulo');
$inovacao_subtitulo = get_field('inovacao_subtitulo');
$inovacao_cta = get_field('inovacao_cta');
$inovacao_link = get_field('inovacao_link');
?>

<div id="produtos">
  <div class="container-xxl topo py-5">
    <div class="wrapper">
      <h1 class="mb-3">
        <?= $topo_titulo; ?>
      </h1>
      <p class="mb-0">
        <?= $topo_subtitulo; ?>
      </p>
    </div>
  </div>

  <div class="container-xxl produtos">
    <div class="grid">
      <?php
      $query = new WP_Query(array(
        'post_type' => 'produto',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'title'
      ));

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
      ?>
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
        <p>Nenhum produto encontrado.</p>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>

  <div class="container-xxl inovacoes pb-5">
    <div class="title py-5">
      <h2 class="text-primary mb-3">
        <?= $inovacao_titulo; ?>
      </h2>
      <p class="text-gray mb-0">
        <?= $inovacao_subtitulo; ?>
      </p>
    </div>
    <div class="grid">
      <?php if (have_rows('inovacao_item')) :
        while (have_rows('inovacao_item')) : the_row();
          $inovacao_imagem = get_sub_field('imagem');
          $inovacao_texto = get_sub_field('texto');
          $video = get_sub_field('video');
      ?>
          <div class="item">
            <?php if ($video) : ?>
              <div class="video__wrapper">
                <a href="<?= $video; ?>" data-fancybox>
                  <img src="<?= esc_url(get_template_directory_uri() . '/assets/imgs/play-clean.svg'); ?>" alt="Thumbnail do vídeo" title="Assistir vídeo do produto">
                </a>
              </div>
            <?php endif; ?>
            <div class="text__wrapper">
              <?= $inovacao_texto; ?>
            </div>
            <div class="img__wrapper">
              <img src="<?= esc_url($inovacao_imagem); ?>" alt="<?= esc_attr($inovacao_texto); ?>">
            </div>
          </div>
      <?php endwhile;
      endif; ?>
    </div>
    <div class="d-flex justify-content-center pt-5">
      <a href="<?= $inovacao_link; ?>" class="cta">
        <?= $inovacao_cta; ?>
      </a>
    </div>
  </div>
</div>

<?= get_footer(); ?>