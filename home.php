<!-- HEADER -->
<?php get_header(); ?>

<div id="index_loop_cnt" class="container">
  <div class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'template-parts/index/has-posts', get_post_format() ); ?>
    <?php endwhile; else: ?>
      <?php get_template_part( 'template-parts/index/no-posts'); ?>
    <?php endif; ?>

  </div>
</div>

<!-- FOOTER -->
<?php get_footer(); ?>
