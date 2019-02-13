<?php #single.php ?>

<!-- HEADER -->
<?php get_header(); ?>

<div id="<?php the_ID(); ?>" <?php post_class('container-fluid px-0'); ?>>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="container text-center text-uppercase">
        <?php the_title( '<h1 class="single-post-title">', '</h1>' ); ?>
        </div>

        <?php if (has_post_thumbnail()) { ?>
        <div class="jumbotron jumbotron-fluid text-center bg-white">
          <?php  echo the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);?>
        </div>
        <?php  }  ?>
      <div class="container">
        <div class="row">
          <p><?php the_content(); ?></p>
          <!-- test ACF -->
          <?php if( get_field('campo_di_test')): ?>

            <p><?php the_field('campo_di_test'); ?></p>
          <?php endif; ?>

      <?php endwhile; else: ?>
        <p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>
      <?php endif; ?>

    </div>
  </div>
</div>
  <!-- FOOTER -->
  <?php get_footer(); ?>
