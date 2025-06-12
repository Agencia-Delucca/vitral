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

$loop = get_field('loop');

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

      <div class="linhafina mobile">
        <div class="item titulo">
          <h3 class="text-primary mb-0">
            <?= $linhafina_1; ?>
          </h3>
        </div>
        <div class="item__wrapper">
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
    </div>
  <?php endif; ?>

  <?php if ($loop) : ?>
    <div class="cores pt-5">
      <div class="container-xxl">
        <?php if (have_rows('loop')): ?>
          <?php while (have_rows('loop')): the_row(); ?>
            <?php
            $slide = get_sub_field('slide');
            $titulo = $slide['titulo'];
            $cores = $slide['cores'];
            ?>
            <div class="slide">
              <h2 class="mb-3 text-primary"><?php echo esc_html($titulo); ?></h2>

              <div class="swiper-wrapper mb-5 pb-5">
                <?php foreach ($cores as $cor): ?>
                  <img src="<?php echo esc_url($cor['img']); ?>" alt="<?php echo esc_attr($cor['name']); ?>" class="swiper-slide">
                <?php endforeach; ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($comparativo) : ?>
    <div class="container-xxl comparativo pb-5">
      <h2 class="text-primary mb-3">
        <?= $comparativo_titulo; ?>
      </h2>
      <div class="tabela">
        <?php if (have_rows('comparativo_segmentos')) : ?>
          <div class="container__segmentos">
            <?php while (have_rows('comparativo_segmentos')) : the_row(); ?>
              <div class="segmento">
                <?php if (have_rows('coluna')) : ?>
                  <?php while (have_rows('coluna')) : the_row(); ?>
                    <p>
                      <?= get_sub_field('item'); ?>
                    </p>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <div class="wrapper__scroll">
          <?php if (have_rows('comparativo_linha')) : ?>
            <div class="container__linha">
              <?php while (have_rows('comparativo_linha')) : the_row(); ?>
                <div class="linha">
                  <?php if (have_rows('coluna')) : ?>
                    <?php while (have_rows('coluna')) : the_row(); ?>
                      <p><?= get_sub_field('item'); ?></p>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>

<script>
function igualarAlturaTodosPs() {
  const elementos = document.querySelectorAll('.tabela p');
  if (!elementos.length) return;

  // Zera altura antes
  elementos.forEach(el => el.style.height = 'auto');

  // Acha a maior altura
  let maiorAltura = 0;
  elementos.forEach(el => {
    if (el.offsetHeight > maiorAltura) {
      maiorAltura = el.offsetHeight;
    }
  });

  // Aplica a mesma altura a todos
  elementos.forEach(el => {
    el.style.height = `${maiorAltura}px`;
  });
}

window.addEventListener('load', igualarAlturaTodosPs);
window.addEventListener('resize', () => {
  setTimeout(igualarAlturaTodosPs, 100);
});



  const scrollContainer = document.querySelector('.wrapper__scroll');

  let isDown = false;
  let startX;
  let scrollLeft;

  scrollContainer.addEventListener('mousedown', (e) => {
    isDown = true;
    scrollContainer.classList.add('dragging');
    startX = e.pageX - scrollContainer.offsetLeft;
    scrollLeft = scrollContainer.scrollLeft;
  });

  scrollContainer.addEventListener('mouseleave', () => {
    isDown = false;
    scrollContainer.classList.remove('dragging');
  });

  scrollContainer.addEventListener('mouseup', () => {
    isDown = false;
    scrollContainer.classList.remove('dragging');
  });

  scrollContainer.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - scrollContainer.offsetLeft;
    const walk = (x - startX) * 1.5; // velocidade
    scrollContainer.scrollLeft = scrollLeft - walk;
  });
</script>

<?php get_footer(); ?>