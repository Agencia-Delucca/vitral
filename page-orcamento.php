<?php
  // Template Name: Orçamento
  get_header();

  if (function_exists('enqueue_orcamento_css')) {
    enqueue_orcamento_css();
  }

  $banner = get_field('imagem');
  $banner_m = get_field('imagem_m');
  $titulo = get_field('titulo');
  $subtitulo = get_field('subtitulo');
  $texto = get_field('texto');
  $form = do_shortcode('[contact-form-7 id="5fe4423" title="Form - Orçamento"]');
  $form_texto = get_field('texto_forms');
?>

  <div id="orcamento">
    <div class="container-fluid p-0 m-0">
      <picture>
        <source
          srcset="<?= $banner_m; ?>"
          media="(max-width: 767px)"
        />
        <img
          src="<?= $banner; ?>"
          alt="Banner da página orçamento"
          class="w-100"
        />
      </picture>
    </div>

    <div class="content__wrapper py-5">
      <div class="container-xxl">
        <h1 class="my-0 text-primary fw-normal">
          <?= $titulo; ?>
        </h1>
        <h2 class="mt-3 mb-0 text-primary fw-normal">
          <?= $subtitulo; ?>
        </h2>
        <p class="mt-4 mb-5 text-dark-gray">
          <?= $texto; ?>
        </p>

        <div class="form__wrapper">
          <?= $form ?>
          <p class="mt-3 mb-0 p-0 text-white">
            <?= $form_texto; ?>
          </p>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>