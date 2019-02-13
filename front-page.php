<!-- HEADER -->
<?php get_header(); ?>

<div class="container-fluid bg-white px-0 position-relative">

  <?php if( get_field('immagine_principale') ): ?>

	  <img class="img-fluid" src="<?php the_field('immagine_principale'); ?>" />

    <div class="position-absolute center">
      <?php $blogLink = get_permalink( get_option( 'page_for_posts' ) ); ?> ?>
    <a href="<?php echo $blogLink; ?>" class="btn btn-lg btn-info"><h1>Click here for the blog</h1></a>
    </div>

  <?php endif; ?>

</div>

<!-- FOOTER -->
<?php get_footer(); ?>
