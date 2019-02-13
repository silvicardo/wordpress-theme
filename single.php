<?php #single.php ?>

<!-- HEADER -->
<?php get_header(); ?>

<?php $categories = get_the_category();
      $currentPostID = get_the_ID(); ?>

<!-- Link to a blog page post reaches this template page -->

<div id="post-<?php echo  $currentPostID; ?>" <?php post_class('container'); ?>>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/single/has-posts', get_post_format() ); ?>

      <?php endwhile; else: ?>
        <div class="container">
          <p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>
        </div>
      <?php endif; ?>

    </div>
  </div>
</div>

<!-- More post for each category -->

<?php if (!empty($categories)) { ?>
    <?php get_template_part( 'template-parts/single/cats-cardDecks'); ?>
    <div class="container">

        <?php foreach ($categories as $category) { ?>
          <hr>

          <h4 class="mb-3">Read More about <?php echo $category->name; ?></h4>

            <div class="card-deck mb-5">
              <?php
                $query = new WP_Query(['post_type' => 'post', 'posts_per_page' => 4, 'cat' => $category->term_id, 'order' => 'DESC',]);
                 if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                  <?php if( get_the_ID() != $currentPostID) { ?>

                   <div class="card">
                     <a href="<?php the_permalink(); ?>">
                       <h5 class="card-header"><?php the_title(); ?></h5>
                     </a>
                     <div class="card-body">
                       <p class="card-text"><?php the_excerpt(); ?></p>
                       <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read full post</a>
                    </div>
                 </div>
               <?php } ?>

               <?php endwhile; ?>
                <?php endif; ?>

            </div>

        <?php } ?>

    </div>
<?php } ?>


  <!-- FOOTER -->
  <?php get_footer(); ?>
