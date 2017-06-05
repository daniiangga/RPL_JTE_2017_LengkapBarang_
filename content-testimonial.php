// merupakan code testimonial
<div class="testimonial">
	<div class="testimonial-content">
		<?php echo $GLOBALS['konten']; ?>
	</div>
	<div class="testimonial-details clearfix">
		<?php if(has_post_thumbnail()) { ?>
		<div class="testimonial-image">
<<<<<<< HEAD:content-testimonial.php
			<?php the_post_thumbnail('preview gambar', array('class' => 'layar penuh')); ?>
=======
			<?php the_post_thumbnail('review', array('class' => 'fullwidth')); ?>
>>>>>>> 01e1df8b9c2c3ef8855df3c5fa55bd33ef7e2715:kelompok3/wp-content/themes/makery/content-testimonial.php
		</div>
		<?php } ?>
		<div class="testimonial-author"><?php the_title(); ?></div>								
	</div>
</div>
// penutup code testimonial