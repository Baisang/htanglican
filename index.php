<?php get_header(); ?>
<div class="header-image" style="background-image:
  -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4)), url('<?php bloginfo('template_directory');?>/images/give_banner.jpg');
  background-image:
  linear-gradient(
    to bottom,
    rgba(0, 0, 0, 0),
    rgba(0, 0, 0, 0.4)
    ),
  url('<?php bloginfo('template_directory');?>/images/give_banner.jpg'); background-position: 0% 80%">
  <div class="super-heading">Blog</div>
</div>
<div class="container-fluid container-pad-10">
<?php
  if ( have_posts() ) : while ( have_posts() ) : the_post();

    get_template_part( 'post', get_post_format() );

  endwhile; ?>
  <div class="row" style="padding-top: 3em">
    <div class="col-md-2"></div>
    <div class="col-md-4">
      <div style="font-size: 1.5em; text-align:left;"><?php previous_posts_link( 'Newer posts' ); ?></div>
    </div>
    <div class="col-md-4">
      <div style="font-size: 1.5em; text-align:right;"><?php next_posts_link( 'Older posts' ); ?></div>
    </div>
  </div>
<?php
endif;
?>
</div>
<?php get_footer(); ?>
