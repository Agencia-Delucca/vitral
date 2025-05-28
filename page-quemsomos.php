<?= get_header();
// Template Name: Quem Somos

if (function_exists('enqueue_quem_somos_css')) {
  enqueue_quem_somos_css();
}

$bloco1_imagem = get_field('bloco1_imagem');
$bloco1_titulo = get_field('bloco1_titulo');
$bloco1_subtitulo = get_field('bloco1_subtitulo');
$bloco1_texto = get_field('bloco1_texto');
$bloco1_cta = get_field('bloco1_cta');
$bloco1_link = get_field('bloco1_link');

$bloco2_texto = get_field('bloco2_texto');

$bloco3_titulo = get_field('bloco3_titulo');
$bloco3_subtitulo = get_field('bloco3_subtitulo');
$bloco3_imagem_destaque = get_field('bloco3_imagem_destaque');

$bloco3_1_titulo = get_field('bloco3_1_titulo');
$bloco3_1_texto = get_field('bloco3_1_texto');
$bloco3_1_imagem = get_field('bloco3_1_imagem');

$bloco3_2_titulo = get_field('bloco3_2_titulo');
$bloco3_2_texto = get_field('bloco3_2_texto');
$bloco3_2_imagem = get_field('bloco3_2_imagem');

$bloco3_3_titulo = get_field('bloco3_3_titulo');
$bloco3_3_texto = get_field('bloco3_3_texto');
$bloco3_3_imagem = get_field('bloco3_3_imagem');

$bloco4_titulo = get_field('bloco4_titulo');
$bloco4_texto = get_field('bloco4_texto');
$bloco4_imagem = get_field('bloco4_imagem');

$equipe_ceo_nome = get_field('equipe_ceo_nome');
$equipe_ceo_imagem = get_field('equipe_ceo_imagem');
?>

<style>
  <?php if ($bloco1_imagem): ?>
    #quemSomos .bloco-1 {
      background-image: url('<?php echo $bloco1_imagem; ?>');
    }
  <?php endif; ?>
</style>

<div id="quemSomos">
  teste
  <div class="bloco-1">
    <div class="container-xxl py-5">
      <div class="grid">
        <div class="item item-1">

        </div>
        <div class="item item-2">
          <div class="wrapper">
            <h1 class="mb-3">
              <?= $bloco1_titulo; ?>
            </h1>
            <h2 class="mb-4">
              <?= $bloco1_subtitulo; ?>
            </h2>
            <div class="texto__wrapper pb-4">
              <?= $bloco1_texto; ?>
            </div>
            <a href="<?= $bloco1_link; ?>" class="cta">
              <?= $bloco1_cta; ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bloco-2 bg-primary p-5">
    <div class="container-xxl text-white px-5 text-center">
      <?= $bloco2_texto; ?>
    </div>
  </div>

  <div class="bloco-3">
    <div class="container-xxl">
      <div class="title pt-5 mt-3">
        <h2 class="text-primary mb-0">
          <?= $bloco3_titulo; ?>
        </h2>
        <h3 class="text-primary mb-0">
          <?= $bloco3_subtitulo; ?>
        </h3>
      </div>
    </div>

    <div class="container-xxl my-5 pe-0 me-0">
      <div class="content__wrapper">
        <div class="grid">
          <div class="item item-1">
            <div class="wrapper">
              <div class="img__wrapper">
                <img src="<?= $bloco3_1_imagem; ?>" alt="<?= $bloco3_1_titulo; ?>">
              </div>
              <div class="text__wrapper">
                <h3 class="mb-0">
                  <?= $bloco3_1_titulo; ?>
                </h3>
                <p class="mb-0">
                  <?= $bloco3_1_texto; ?>
                </p>
              </div>
            </div>
            <div class="wrapper">
              <div class="img__wrapper">
                <img src="<?= $bloco3_2_imagem; ?>" alt="<?= $bloco3_2_titulo; ?>">
              </div>
              <div class="text__wrapper">
                <h3 class="mb-0">
                  <?= $bloco3_2_titulo; ?>
                </h3>
                <p class="mb-0">
                  <?= $bloco3_2_texto; ?>
                </p>
              </div>
            </div>
            <div class="wrapper">
              <div class="img__wrapper">
                <img src="<?= $bloco3_3_imagem; ?>" alt="<?= $bloco3_3_titulo; ?>">
              </div>
              <div class="text__wrapper">
                <h3 class="mb-0">
                  <?= $bloco3_3_titulo; ?>
                </h3>
                <p class="mb-0">
                  <?= $bloco3_3_texto; ?>
                </p>
              </div>
            </div>
          </div>
          <div class="item item-2">
            <img src="<?= $bloco3_imagem_destaque; ?>" alt="<?= $bloco3_titulo; ?>">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bloco-4 p-5">
    <div class="container-xxl">
      <div class="title d-flex flex-column align-items-center text-center pb-5 px-5">
        <h2 class="text-primary mb-0">
          <?= $bloco4_titulo; ?>
        </h2>
        <p class="text-gray mt-3 mb-5 px-5">
          <?= $bloco4_texto; ?>
        </p>
        <img src="<?= $bloco4_imagem; ?>" alt="<?= $bloco4_titulo; ?>" class="img-fluid rounded-3 mt-3">
      </div>
      <div class="equipe py-5 px-5">
        <div class="grid">
          <div class="ceo">
            <img src="<?= $equipe_ceo_imagem ?>" alt="<?= $equipe_ceo_nome; ?>" class="w-100 rounded-4">
          </div>
          <?php if (have_rows('equipe_colaboradores')) :
            while (have_rows('equipe_colaboradores')) : the_row();
              $equipe_imagem = get_sub_field('imagem');
              $equipe_nome = get_sub_field('nome');
          ?>
            <div class="item">
              <img src="<?= esc_url($equipe_imagem); ?>" alt="<?= esc_attr($equipe_nome); ?>" class="w-100 rounded-4">
            </div>
          <?php endwhile;
          endif; ?>
        </div>
      </div>
    </div>
  </div>

</div>

<?= get_footer(); ?>