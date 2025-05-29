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
  <div class="container-xxl produtos__wrapper">
    <div class="grid">
      <?php if (have_rows('produtos_item')) :
        while (have_rows('produtos_item')) : the_row();
          $produtos_imagem = get_sub_field('imagem');
          $produtos_texto = get_sub_field('texto');
      ?>
          <div class="item">
            <div class="text__wrapper">
              <h3 class="mb-0">
                <?= the_title(); ?>
              </h3>
              <?= $produtos_texto; ?>
            </div>
            <div class="img__wrapper">
              <img src="<?= esc_url($produtos_imagem); ?>" alt="<?= esc_attr($produtos_texto); ?>">
            </div>
          </div>
      <?php endwhile;
      endif; ?>
    </div>
  </div>

  <div class="container-xxl inovacoes py-5">
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
      ?>
          <div class="item">
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