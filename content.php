<?php if (get_header_image()) : ?>
	<div class="header-image" style="background-image:
	  -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4)), url(<?php header_image(); ?>);
	  background-image:
	  linear-gradient(
	    to bottom,
	    rgba(0, 0, 0, 0),
	    rgba(0, 0, 0, 0.4)
	    ),
	  url(<?php header_image(); ?>);">
		<div class="super-heading"><?php echo get_the_title();?></div>
	</div>
<?php endif; ?>
<div class="container-fluid container-pad-5">
	<div class="row row-center">
		<div class="col-md-2"></div>
		<div class="col-md-8">
 			<?php the_content(); ?>
		</div>
	</div>
</div>
