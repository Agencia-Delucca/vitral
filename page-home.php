<?= get_header();
// Template Name: Home

if (function_exists('carregar_css_homepage')) {
  carregar_css_homepage();
}

// TOPO
$topo_video = get_field('topo_video');
$topo_video_mob = get_field('topo_video_mob');
$topo_titulo = get_field('topo_titulo');
$topo_subtitulo = get_field('topo_subtitulo');
$topo_cta_texto = get_field('topo_link[title]');
$topo_cta = get_field('topo_cta');
$topo_cta_texto = $topo_cta['title'];
$topo_cta_link = $topo_cta['url'];

// REDES
$redes_insta = get_field('redes_insta');
$redes_face = get_field('redes_face');
$redes_linkedin = get_field('redes_linkedin');
$redes_yt = get_field('redes_yt');

// PORTFOLIO
$portfolio_titulo = get_field('portfolio_titulo');
$portfolio_subtitulo = get_field('portfolio_subtitulo');
$portfolio_loop = get_field('portfolio_loop');
$portfolio_cta = get_field('portfolio_cta');

// DEPOIMENTOS
$depoimentos_titulo = get_field('depoimentos_topo_titulo');
$depoimentos_img = get_field('depoimentos_topo_imagem');
$depoimentos_img_m  = get_field('depoimentos_topo_imagem_m');

// PRODUTOS
$produtos_titulo = get_field('produtos_titulo');
$produtos_subtitulo = get_field('produtos_subtitulo');
$produtos_loop = get_field('produtos_loop');
$produtos_cta = get_field('produtos_cta');

// BLOG
$blog_titulo = get_field('blog_titulo');
$blog_subtitulo = get_field('blog_subtitulo');
$blog_cta = get_field('blog_cta');

// ORÇAMENTO
$orcamento_titulo = get_field('orcamento_titulo');
$orcamento_texto = get_field('orcamento_texto');
$orcamento_cta = get_field('orcamento_cta');
$orcamento_img = get_field('orcamento_img');
$orcamento_img_mob = get_field('orcamento_img_mob');

// ATENDIMENTO
$atendimento_titulo = get_field('atendimento_titulo');
$atendimento_texto = get_field('atendimento_texto');
$atendimento_cta = get_field('atendimento_cta');
$atendimento_img = get_field('atendimento_img');
$atendimento_img_mob = get_field('atendimento_img_mob');

?>

<style>
  <?php if ($depoimentos_img): ?>#home .depoimentos .title {
    background: center / cover no-repeat url('<?php echo $depoimentos_img; ?>');
  }

  <?php endif; ?>
</style>

<div id="home">
  <div class="topo">
    <div class="container-xxl">
      <div class="text__wrapper">
        <h1>
          <?= $topo_titulo ?>
        </h1>
        <h2>
          <?= $topo_subtitulo ?>
        </h2>
        <?php if ($topo_cta) : ?>
          <a href="<?= $topo_cta_link ?>" class="cta">
            <?= $topo_cta_texto ?>
          </a>
        <?php endif; ?>
      </div>
      <div class="redes__wrapper d-none d-lg-flex">
        <?php if ($redes_insta) : ?>
          <a target="_blank" href="<?= $redes_insta ?>">
            <img src="<?= get_template_directory_uri() . '/assets/imgs/instagram-topo-icon.svg' ?>">
          </a>
        <?php endif; ?>
        <?php if ($redes_face) : ?>
          <a target="_blank" href="<?= $redes_face ?>">
            <img src="<?= get_template_directory_uri() . '/assets/imgs/facebook-topo-icon.svg' ?>">
          </a>
        <?php endif; ?>
        <?php if ($redes_linkedin) : ?>
          <a target="_blank" href="<?= $redes_linkedin ?>">
            <img src="<?= get_template_directory_uri() . '/assets/imgs/linkedin-topo-icon.svg' ?>">
          </a>
        <?php endif; ?>
        <?php if ($redes_yt) : ?>
          <a target="_blank" href="<?= $redes_yt ?>">
            <img src="<?= get_template_directory_uri() . '/assets/imgs/youtube-topo-icon.svg' ?>">
          </a>
        <?php endif; ?>
      </div>
    </div>
    <video id="topoVideo" autoplay muted loop playsinline>
      <source src="<?= $topo_video ?>" type="video/mp4">
    </video>
  </div>

  <div class="portfolio">
    <div class="container-xxl py-5">
      <div class="title mb-5 text-primary">
        <h2 class="mb-3"><?= $portfolio_titulo ?></h2>
        <p class="mb-0"><?= $portfolio_subtitulo ?></p>
      </div>
      <div class="grid mb-5">
        <?php foreach ($portfolio_loop as $portfolio):
          $permalink = get_permalink($portfolio->ID);
          $title = get_the_title($portfolio->ID);
          $excerpt = get_the_excerpt($portfolio->ID);
          $thumbnail = get_the_post_thumbnail_url($portfolio->ID, 'large');
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
      <div class="cta__wrapper">
        <a href="<?= get_home_url() . '/portfolio/' ?>" class="cta">
          <?= $portfolio_cta ?>
        </a>
      </div>
    </div>
  </div>

  <div class="depoimentos pb-5">
    <div class="title pt-3 pt-lg-5">
      <div class="container-xxl">
        <h2 class="mb-0 text-primary">
          <?= $depoimentos_titulo ?>
        </h2>
      </div>
    </div>
    <div class="container-xxl depoimentos__wrapper">
      <div class="depoimentos__slide">
        <div class="swiper-wrapper mb-5">
          <?php if (have_rows('reviews')) : ?>
            <?php while (have_rows('reviews')) : the_row();
              $imagem = get_sub_field('imagem');
              $texto = get_sub_field('texto');
              $avatar = get_sub_field('avatar');
              $nome = get_sub_field('nome');
              $ocupacao = get_sub_field('ocupacao');
              $video = get_sub_field('video');
            ?>
              <div class="swiper-slide item">
                <div class="img__wrapper">
                  <div class="img" style="background-image: url('<?= esc_url($imagem); ?>');"></div>
                </div>
                <div class="text__wrapper">
                  <p class="text-primary mb-0"><?= esc_html($texto); ?></p>
                  <div class="bottom__wrapper">
                    <div class="info__wrapper">
                      <div class="img__wrapper">
                        <img src="<?= esc_url($avatar); ?>" alt="<?= esc_attr($nome); ?>">
                      </div>
                      <div class="d-flex flex-column py-3 pe-3">
                        <p class="mb-0 text-primary"><?= esc_html($nome); ?></p>
                        <?php if ($ocupacao) : ?>
                          <p class="mb-0 text-primary"><?= esc_html($ocupacao); ?></p>
                        <?php endif; ?>
                      </div>
                    </div>
                    <?php if ($video) : ?>
                      <div class="video">
                        <a href="<?= esc_url($video); ?>" data-fancybox>
                          <img src="<?= esc_url(get_template_directory_uri() . '/assets/imgs/play.svg'); ?>" alt="Play">
                        </a>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

  </div>

  <?php if ($produtos_loop): ?>
    <div class="produtos py-5">
      <div class="title text-center">
        <h2 class="mb-0 text-primary mb-3">
          <?= $produtos_titulo ?>
        </h2>
        <p class="mb-0 text-primary">
          <?= $produtos_subtitulo ?>
        </p>
      </div>
      <div class="container-xxl">
        <div class="produtos__slide">
          <div class="swiper-wrapper py-5">
            <?php foreach ($produtos_loop as $produtos):
              $permalink = get_permalink($produtos->ID);
              $title = get_the_title($produtos->ID);
              $excerpt = get_the_excerpt($produtos->ID);
              $thumbnail = get_field('thumbnail_home', $produtos->ID);
            ?>
              <div class="swiper-slide">
                <a href="<?php echo $permalink; ?>" class="item">
                  <div class="infos__wrapper">
                    <h2 class="mb-0 fw-semibold">
                      <?php echo $title; ?>
                    </h2>
                    <p class="mb-0">
                      <?php echo $excerpt; ?>
                    </p>
                    <p class="mb-0 saiba__mais">Saiba mais</p>
                  </div>
                  <div class="img__wrapper">
                    <img src="<?php echo $thumbnail; ?>" alt="<?php echo $title; ?>">
                  </div>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="cta__wrapper mt-5">
        <a href="<?= get_home_url() . '/produtos/' ?>" class="cta">
          <?= $produtos_cta ?>
        </a>
      </div>
    </div>
  <?php endif; ?>

  <div class="blog">
    <div class="container-xxl py-5">
      <div class="title mb-5 text-primary">
        <h2 class="mb-3">
          <?= $blog_titulo ?>
        </h2>
        <p class="mb-0">
          <?= $blog_subtitulo ?>
        </p>
      </div>
      <div class="grid mb-5">
        <?php
        $latest_post = new WP_Query(array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => 4,
        ));

        if ($latest_post->have_posts()) :
          while ($latest_post->have_posts()) : $latest_post->the_post(); ?>
            <a href="<?php the_permalink(); ?>">
              <div class="infos__wrapper">
                <h2 class="mb-0 fw-normal"><?= the_title(); ?></h2>
                <?= get_the_date(); ?>
                <p class="mb-0">
                  Ler mais
                </p>
              </div>
              <div class="img__wrapper">
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?= the_title(); ?>">
              </div>
            </a>
          <?php endwhile; ?>
        <?php else : ?>
          <p>Nenhum resultado encontrado.</p>
        <?php endif;
        wp_reset_postdata(); ?>
      </div>
      <div class="cta__wrapper">
        <a href="<?= get_home_url() . '/blog/' ?>" class="cta">
          <?= $blog_cta ?>
        </a>
      </div>
    </div>
  </div>

  <div class="orcamento">
    <div class="container-xxl pb-5">
      <div class="wrapper">
        <div class="text__wrapper">
          <div class="text">
            <h2 class="mb-4 fw-medium">
              <?= $orcamento_titulo ?>
            </h2>
            <p class="p=mb-4 fw-light">
              <?= $orcamento_texto ?>
            </p>
            <a href="<?= get_home_url() . '/orcamento/' ?>" class="cta">
              <?= $orcamento_cta ?>
            </a>
          </div>
        </div>
        <div class="img__wrapper">
          <picture class="img-full">
            <source
              srcset="<?= $orcamento_img_mob ?>"
              media="(max-width: 991px)" />
            <img
              src="<?= $orcamento_img ?>"
              class="img-full"
              alt="Faça agora o seu orçamento" />
          </picture>
        </div>
      </div>
    </div>
  </div>

  <div class="atendimento">
    <div class="wrapper">
      <div class="img__wrapper">
        <picture class="img-full">
          <source
            srcset="<?= $atendimento_img_mob ?>"
            media="(max-width: 991px)" />
          <img
            src="<?= $atendimento_img ?>"
            class="img-full"
            alt="Fale com a nossa central de atendimento" />
        </picture>
      </div>
      <div class="text__wrapper">
        <div class="text">
          <h2 class="mb-4 fw-medium">
            <?= $atendimento_titulo ?>
          </h2>
          <p class="mb-4 fw-light">
            <?= $atendimento_texto ?>
          </p>
          <a href="<?= get_home_url() . '/central-de-atendimento/' ?>" class="cta">
            <?= $atendimento_cta ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const video = document.getElementById('topoVideo');
  const mobileVideo = '<?= $topo_video_mob ?>';
  const desktopVideo = '<?= $topo_video ?>';

  const isMobile = window.innerWidth <= 991;

  const selectedSource = isMobile ? mobileVideo : desktopVideo;
  video.querySelector('source').src = selectedSource;
  video.load();
</script>

<?php get_footer(); ?>