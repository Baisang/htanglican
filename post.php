<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <h3 class="blog-title"><?php the_title(); ?></h3>
    <p class="blog-meta"><a href="<?php get_permalink();?>"><?php the_date();?> by <?php the_author(); ?></a></p>
    <?php the_content(); ?>
  </div>
</div>
<hr>
