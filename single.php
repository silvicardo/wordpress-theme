<?php #single.php ?>

<!-- HEADER -->
<?php get_header(); ?>

<div class="container">
  <div class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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

  <!-- FOOTER -->
  <?php get_footer(); ?>
