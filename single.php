<?php get_header(); ?>

<div id="single">
  <div class="container-xxl py-5" id="post">
    <div class="row">
      <div class="col-lg-9">
        <main class="container-xxl p-0">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <article class="single-post">
                <?php if (has_post_thumbnail()) : ?>
                  <div class="post-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                  </div>
                <?php endif; ?>
                <h1 class="post-title mt-4 mb-2 text-secondary"><?php the_title(); ?></h1>

                <div class="post-meta mb-4 text-primary">
                  <?= get_the_date(); ?>
                </div>
                <div class="post-content text-black">
                  <?php the_content(); ?>
                </div>
              </article>

          <?php endwhile;
          endif; ?>
        </main>
      </div>
      <div class="col-lg-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>