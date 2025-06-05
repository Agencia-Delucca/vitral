<?php get_header();
if (function_exists('enqueue_single_portfolio_css')) {
  enqueue_single_portfolio_css();
}

$galeria = get_field('imagens');
$descricao = get_field('descricao');
$produtos_aplicados = get_field('produtos_aplicados');
$texto = get_field('texto');
?>

<div id="single" class="py-5">
  <div class="container-xxl">
    <div class="row">
      <div class="col-lg-8">
        <div class="galeria__wrapper">
          <?php if ($galeria): ?>
            <div class="galeria <?php if (count($galeria) > 1): ?>scroll<?php endif; ?>">
              <?php foreach ($galeria as $image): ?>
                <img
                  src="<?php echo $image; ?>"
                  class="w-100">
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="topo__wrapper">
          <h1 class="fw-medium text-primary mb-0">
            <?php the_title(); ?>
          </h1>
          <h3 class="fw-medium text-primary mb-3">
            <?= $descricao; ?>
          </h3>
          <?php if ($produtos_aplicados) : ?>
            <h3 class="fw-medium text-primary">Produtos aplicados:</h3>
            <div class="produtos">
              <?php if (have_rows('produtos_aplicados')) : ?>
                <?php while (have_rows('produtos_aplicados')) : the_row();
                  $produto = get_sub_field('produto');
                  if ($produto) :
                    $url = $produto['url'];
                    $title = $produto['title'];
                ?>
                    <a href="<?= $url; ?>" class="item">
                      <?= $title; ?>
                    </a>
                <?php endif;
                endwhile; ?>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="text__wrapper">
          <?= $texto; ?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php get_footer(); ?>