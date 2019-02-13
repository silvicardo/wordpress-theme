<div class="container text-center">
<?php $title = get_the_title();
      $titleExplodedByDots = explode('.', $title);
      foreach ($titleExplodedByDots as $sentence) { ?>
        <h1 class="single-post-title"><?php echo $sentence .= '.'; ?></h1>
  <?php } ?>
  <h5 class="my-4">Published by <?php the_author(); ?> on <?php the_date('M dS Y') ?></h5>
  <h3>Categorie: <?php the_category( ', ' ); ?></h3>
</div>

<?php if (has_post_thumbnail()) { ?>
<div class="jumbotron text-center bg-white">
  <?php  echo the_post_thumbnail('post-thumbnail');?>
</div>
<hr>
<?php  }  ?>

<div class="container">
  <div class="row">
    <p><?php the_content(); ?></p>
    <!-- test ACF -->
    <?php if( get_field('nota_autore')): ?>
      <p><?php the_field('nota_autore'); ?></p>
    <?php endif; ?>
  </div>
</div>
<?php if  (!empty( get_the_tag_list() )) { ?>
  <h5 class="font-weight-bold">Tags</h5>
  <div class="container">
    <div class="row">
  <?php the_tags( '<ul class="list-group"><li class="list-group-item">', '</li><li class="list-group-item">', '</li></ul>' ); ?>
    </div>
  </div>
<?php   } ?>
