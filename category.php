<!-- HEADER -->
<?php get_header(); ?>

<?php $categoryName = get_the_category()[0]->name ?>

<!-- Nome categoria -->
<div class="container mb-5">
  <h1 class="category-title text-center"><?php echo $categoryName; ?></h1>
</div>

<div id="category_loop_cnt" class="container">

  <div class="row">

    <!-- Loop Categoria -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'template-parts/category/has-posts', get_post_format() ); ?>
    <?php endwhile; else: ?>
      <?php get_template_part( 'template-parts/category/no-posts'); ?>
    <?php endif; ?>

  </div>

</div>

<!-- FOOTER -->
<?php get_footer(); ?>
