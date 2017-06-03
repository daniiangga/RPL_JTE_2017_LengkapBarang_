// merupakan code testimonial
<div class="testimonial">
	<div class="testimonial-content">
		<?php echo $GLOBALS['konten']; ?>
	</div>
	<div class="testimonial-details clearfix">
		<?php if(has_post_thumbnail()) { ?>
		<div class="testimonial-image">
			<?php the_post_thumbnail('preview gambar', array('class' => 'layar penuh')); ?>
		</div>
		<?php } ?>
		<div class="testimonial-author"><?php the_title(); ?></div>								
	</div>
</div>
// penutup code testimonial