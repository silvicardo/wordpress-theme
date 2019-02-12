<!-- HEADER -->
<?php get_header(); ?>

<div class="container">
  <div class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="col-12 mb-5">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title"><?php the_title(); ?></h5>
          </div>
          <div class="card-body">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary" title="<?php the_title_attribute(); ?>">Read Post</a>
          </div>
        </div>
      </div>

      <?php endwhile; else: ?>
        <p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>
        
      <?php endif; ?>

    </div>
  </div>

  <!-- FOOTER -->
  <?php get_footer(); ?>
