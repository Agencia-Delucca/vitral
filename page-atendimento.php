<?=
get_header();
// Template Name: Central de Atendimento

if ( function_exists('enqueue_central_de_atendimento_css') ) {
  enqueue_central_de_atendimento_css();
}

$topo_imagem = get_field('topo_imagem');
$topo_imagem_m = get_field('topo_imagem_m');
$topo_titulo = get_field('topo_titulo');
$topo_subtitulo = get_field('topo_subtitulo');
$topo_texto = get_field('topo_texto');

$forms = do_shortcode('[contact-form-7 id="0b7f2d2" title="Form - Central de Atendimento"]');

$bottom_imagem = get_field('bottom_imagem');
$bottom_imagem_m = get_field('bottom_imagem_m');
?>

<style>
  <?php if ($topo_imagem): ?>
    @media (min-width: 992px) {      
      #atendimento > .wrapper {
        background-image: url('<?php echo $topo_imagem; ?>');
        background-size: contain;
        background-position: top center;
        background-repeat: no-repeat;
      }
    }
  <?php endif; ?>
</style>

<div id="atendimento">
  <div class="wrapper pt-lg-5 pb-0 pb-lg-5">
    <?php if ($topo_imagem_m): ?>
      <img src="<?php echo $topo_imagem_m; ?>" alt="" class="w-100 d-block d-md-none">
    <?php endif; ?>
    <?php if ($topo_imagem): ?>
      <img src="<?php echo $topo_imagem; ?>" alt="" class="w-100 d-none d-md-block d-lg-none">
    <?php endif; ?>
    <div class="topo container-xxl text-primary pt-5 pt-lg-0">
      <h1 class="mb-0">
        <?= $topo_titulo; ?>
      </h1>
      <h2 class="mb-3 mt-4">
        <?= $topo_subtitulo; ?>
      </h2>
      <p class="mb-0">
        <?= $topo_texto; ?>
      </p>
    </div>
    
    <div class="grid container-xxl py-5 mb-0 mb-lg-5">
      <div class="item item-1">
        <?= $forms; ?>
      </div>
      <div class="item item-2">
        <div class="wrapper">
          <div class="canais">
            <a href="https://api.whatsapp.com/send?phone=5517997680048&text=Olá, vim do site e gostaria de um orçamento" target="_blank" rel="noopener noreferrer" class="canais__wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/whats-white-icon.svg" alt="Logo do WhatsApp" class="img-fluid">
              <span>
                <b>Orçamentos:</b> (17) 99768.0048
              </span>
            </a>
            <p class="canais__wrapper mb-0">
              <a href="tel:+5517981680230" target="_blank" rel="noopener noreferrer" class="canais__wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/tel-white-icon.svg" alt="Logo de telefone" class="img-fluid">
                <span>
                  <b>Atendimento:</b> (17) 98168.0230
                </span>
              </a>
            </p>
            <p class="canais__wrapper mb-0">
              <a href="mailto:vendas@vitralaluminioevidro.com.br" target="_blank" rel="noopener noreferrer" class="canais__wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/mailto-white-icon.svg" alt="Logo de email" class="img-fluid">
                <span class="mailto">
                  <b>E-mail:</b> <br class="d-lg-none"> vendas@vitralaluminioevidro.com.br
                </span>
              </a>
            </p>
            <p class="canais__wrapper mb-0">
              <a href="https://maps.app.goo.gl/NbXa9gUceUrkHFbV8" class="canais__wrapper" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/map-white-icon.svg" alt="Logo de mapa" class="img-fluid">
                <span>
                  <b>Endereço:</b> Rua Sete de Setembro, 164, Centro - Bebedouro/SP - CEP: 14700-405
                </span>
              </a>
            </p>
          </div>
          <div class="sociais mt-5">
            <span class="title fw-semibold text-uppercase text-white">
              Siga nossas redes sociais
            </span>
            <div class="sociais__redes mt-4">
              <a href="https://www.facebook.com/vitralaluminioevidro/" target="_blank" rel="noopener noreferrer" title="Ir para o facebook">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/facebook-white-icon.svg" alt="Logo do Facebook" class="img-fluid">
              </a>
              <a href="https://www.instagram.com/vitralaluminioevidro/" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/instagram-white-icon.svg" alt="Logo do Instagram" class="img-fluid" title="Ir para o instagram">
              </a>
              <a href="https://www.youtube.com/@vitralaluminioevidro" target="_blank" rel="noopener noreferrer" title="Ir para o YouTube">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/youtube-white-icon.svg" alt="Logo do YouTube" class="img-fluid">
              </a>
              <a href="https://br.linkedin.com/company/vitral-alum%C3%ADnio-e-vidros" target="_blank" rel="noopener noreferrer" title="Ir para o LinkedIn">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/linkedin-white-icon.svg" alt="Logo do LinkedIn" class="img-fluid">
              </a>
              <a href="https://g.co/kgs/p1NcrnN" target="_blank" rel="noopener noreferrer" title="Ir para o Google Business">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/business-white-icon.svg" alt="Logo do Google Business" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bottom mt-0 mt-lg-5 pt-0 pt-lg-5">
    <?php if ($bottom_imagem): ?>
      <img src="<?= $bottom_imagem ?>" alt="<?= $topo_titulo ?>" class="w-100 d-none d-lg-block">
    <?php endif; ?>
    <?php if ($bottom_imagem_m): ?>
      <img src="<?= $bottom_imagem_m ?>" alt="<?= $topo_titulo ?>" class="w-100 d-block d-lg-none">
    <?php endif; ?>
  </div>
</div>

<?= get_footer(); ?>