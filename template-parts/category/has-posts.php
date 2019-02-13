<?php
$theTitle = get_the_title();
$excerptDivClass = (has_post_thumbnail()) ? 'col-md-8': 'col-12';
?>
<div class="col-12 mb-5">

  <div class="card">

    <div class="card-header d-flex flex-wrap justify-content-between align-items-center py-4 bg-primary text-white">
      <a href="<?php the_permalink(); ?>">
        <h5 class="card-title text-white"><?php the_title(); ?></h5>
      </a>
      <span><?php echo get_the_date(); ?></span>
    </div>

    <div class="card-body">
      <div class="row">

        <?php if (has_post_thumbnail()) { ?>
        <div class="col-md-4 text-center mb-4">
        <?php  echo the_post_thumbnail('post-thumbnail', ['class' => 'rounded', 'title' => "$theTitle"]);?>
          </div>
        <?php  }  ?>

        <div class="<?php echo $excerptDivClass; ?> d-flex flex-column justify-content-center">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-lg btn-primary" title="<?php the_title_attribute(); ?>">Read Post</a>
        </div>

      </div>
    </div>
  </div>
</div>
