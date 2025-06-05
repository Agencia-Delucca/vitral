<?php get_header();

if (function_exists('enqueue_single_produtos_css')) {
  enqueue_single_produtos_css();
}

$topo = get_field('topo');
$topo_galeria = get_field('topo_imagens');
$topo_descricao = get_field('topo_descricao');
$topo_1_titulo = get_field('topo_bloco_1_titulo');
$topo_1_texto = get_field('topo_bloco_1_texto');
$topo_2_titulo = get_field('topo_bloco_2_titulo');
$topo_2_texto = get_field('topo_bloco_2_texto');

$linhafina_1 = get_field('linhafina_1');
$linhafina_2 = get_field('linhafina_2');
$linhafina_3 = get_field('linhafina_3');
$linhafina_4 = get_field('linhafina_4');
$linhafina_5 = get_field('linhafina_5'); 

$cor = get_field('cor');

$comparativo = get_field('comparativo');
$comparativo_titulo = get_field('comparativo_titulo');
?>

<div id="single" class="py-5">
  <?php if ($topo) : ?>
    <div class="container-xxl topo pb-5">
      <div class="row">
        <div class="col-lg-9">
          <div class="galeria">
            <div class="swiper-wrapper">
              <?php if ($topo_galeria) : ?>
                <?php foreach ($topo_galeria as $galeria) : ?>
                  <div class="swiper-slide">
                    <img
                      src="<?= $galeria ?>"
                      alt="<?php the_title(); ?>">
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="infos__wrapper">
              <div class="text__wrapper text-white">
                <h1>
                  <?php the_title(); ?>
                </h1>
                <p class="mb-0">
                  <?= $topo_descricao; ?>
                </p>
              </div>
              <div class="btn__wrapper">
                <a href="<?= home_url() ?>/orcamento">
                  Solicitar orçamento
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="bloco__wrapper">
            <div class="item item-1">
              <h3>
                <?= $topo_1_titulo; ?>
              </h3>
              <p class="mb-0">
                <?= $topo_1_texto; ?>
              </p>
            </div>
            <div class="item item-2">
              <h3>
                <?= $topo_2_titulo; ?>
              </h3>
              <p class="mb-0">
                <?= $topo_2_texto; ?>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="linhafina">
        <div class="item titulo">
          <h3 class="text-primary mb-0">
            <?= $linhafina_1; ?>
          </h3>
        </div>
        <div class="item">
          <p class="mb-0">
            <?= $linhafina_2; ?>
          </p>
        </div>
        <div class="item">
          <p class="mb-0">
            <?= $linhafina_3; ?>
          </p>
        </div>
        <div class="item">
          <p class="mb-0">
            <?= $linhafina_4; ?>
          </p>
        </div>
        <div class="item">
          <p class="mb-0">
            <?= $linhafina_5; ?>
          </p>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($cor) : ?>
    <div class="container-xxl cores py-5 mb-5">
      <h2 class="text-primary mb-3">
        Cores
      </h2>
      <div class="cores__slide">
        <div class="swiper-wrapper mb-5">
          <?php if (have_rows('cor')) : ?>
            <?php while (have_rows('cor')) : the_row(); ?>
              <div class="swiper-slide item">
                <div
                  class="img__wrapper">
                  <div
                    class="img"
                    <?php if (get_sub_field('imagem')) : ?>
                    style="background-image: url('<?= esc_url(get_sub_field('imagem')); ?>')"
                    <?php else: ?>
                    style="background-color: <?= esc_attr(get_sub_field('code')); ?>;"
                    <?php endif; ?>>
                  </div>
                </div>
                <div class="text__wrapper">
                  <p class="text-white mb-0">
                    <?= get_sub_field('nome'); ?>
                  </p>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($comparativo) : ?>
    <div class="container-xxl comparativo pb-5">
      <h2 class="text-primary mb-3">
        <?= $comparativo_titulo; ?>
      </h2>
      <div class="tabela">
        <?php if (have_rows('comparativo_linha')) : ?>
          <?php while (have_rows('comparativo_linha')) : the_row(); ?>
            <div class="linha">
              <?php if (have_rows('coluna')) : ?>
                <?php while (have_rows('coluna')) : the_row(); ?>
                  <p><?= get_sub_field('item'); ?></p>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
</div>

<?php get_footer(); ?>