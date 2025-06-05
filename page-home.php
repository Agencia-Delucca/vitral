<?= get_header(); // Template Name: Home

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
$portfolio_cta = get_field('portfolio_cta');

// BLOG
$blog_titulo = get_field('blog_titulo');
$blog_subtitulo = get_field('blog_subtitulo');
$blog_cta = get_field('blog_cta');

?>

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
      <div class="redes__wrapper">
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
        <?php
        $query = new WP_Query(array(
          'post_type' => 'portfolio',
          'post_status' => 'publish',
          'posts_per_page' => 3,
        ));

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post(); ?>
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
          <p>Nenhum projeto encontrado.</p>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
      <div class="cta__wrapper">
        <a href="<?= get_home_url() . '/portfolio/' ?>" class="cta">
          <?= $portfolio_cta ?>
        </a>
      </div>
    </div>
  </div>

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